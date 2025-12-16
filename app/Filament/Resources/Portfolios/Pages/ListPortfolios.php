<?php

namespace App\Filament\Resources\Portfolios\Pages;

use App\Filament\Resources\Portfolios\PortfolioResource;
use App\Models\Portfolio;
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;
use League\Csv\Writer;

class ListPortfolios extends ListRecords
{
    protected static string $resource = PortfolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),

            Action::make('export')
                ->label('Export to CSV')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('success')
                ->action(function () {
                    return $this->exportToCSV();
                }),

            Action::make('import')
                ->label('Import from CSV')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('warning')
                ->form([
                    FileUpload::make('file')
                        ->label('CSV File')
                        ->acceptedFileTypes(['text/csv', 'application/csv', 'text/plain'])
                        ->required()
                        ->helperText('Upload a CSV file with portfolio data. The file should have the same format as the exported CSV.'),
                ])
                ->action(function (array $data) {
                    $this->importFromCSV($data['file']);
                }),
        ];
    }

    protected function exportToCSV()
    {
        $portfolios = Portfolio::withTrashed()->get();

        // Create CSV in memory
        $csv = Writer::createFromString();

        // Add headers
        $csv->insertOne([
            'id',
            'title',
            'slug',
            'tagline',
            'description',
            'challenge',
            'solution',
            'features',
            'technologies',
            'metrics',
            'category',
            'client',
            'industry',
            'completed_at',
            'url',
            'app_store_url',
            'play_store_url',
            'featured_image',
            'gallery',
            'testimonial',
            'is_featured',
            'is_published',
            'order',
            'created_at',
            'updated_at',
            'deleted_at',
        ]);

        // Add data rows
        foreach ($portfolios as $portfolio) {
            $csv->insertOne([
                $portfolio->id,
                $portfolio->title,
                $portfolio->slug,
                $portfolio->tagline,
                $portfolio->description,
                $portfolio->challenge,
                $portfolio->solution,
                json_encode($portfolio->features),
                json_encode($portfolio->technologies),
                json_encode($portfolio->metrics),
                $portfolio->category,
                $portfolio->client,
                $portfolio->industry,
                $portfolio->completed_at?->format('Y-m-d'),
                $portfolio->url,
                $portfolio->app_store_url,
                $portfolio->play_store_url,
                $portfolio->featured_image,
                json_encode($portfolio->gallery),
                json_encode($portfolio->testimonial),
                $portfolio->is_featured ? 'true' : 'false',
                $portfolio->is_published ? 'true' : 'false',
                $portfolio->order,
                $portfolio->created_at?->format('Y-m-d H:i:s'),
                $portfolio->updated_at?->format('Y-m-d H:i:s'),
                $portfolio->deleted_at?->format('Y-m-d H:i:s'),
            ]);
        }

        // Generate filename with timestamp
        $filename = 'portfolios_export_' . now()->format('Y-m-d_His') . '.csv';

        // Save to storage temporarily
        Storage::disk('local')->put('exports/' . $filename, $csv->toString());

        Notification::make()
            ->title('Export Successful')
            ->success()
            ->body('Exported ' . $portfolios->count() . ' portfolios')
            ->send();

        // Return download response
        return response()->streamDownload(function () use ($csv) {
            echo $csv->toString();
        }, $filename, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    protected function importFromCSV($filePath)
    {
        try {
            $path = Storage::disk('local')->path($filePath);
            $csv = Reader::createFromPath($path, 'r');
            $csv->setHeaderOffset(0);

            $records = $csv->getRecords();
            $imported = 0;
            $updated = 0;
            $errors = [];

            foreach ($records as $offset => $record) {
                try {
                    // Parse JSON fields
                    $features = !empty($record['features']) ? json_decode($record['features'], true) : [];
                    $technologies = !empty($record['technologies']) ? json_decode($record['technologies'], true) : [];
                    $metrics = !empty($record['metrics']) ? json_decode($record['metrics'], true) : null;
                    $gallery = !empty($record['gallery']) ? json_decode($record['gallery'], true) : null;
                    $testimonial = !empty($record['testimonial']) ? json_decode($record['testimonial'], true) : null;

                    // Prepare data
                    $data = [
                        'title' => $record['title'],
                        'slug' => $record['slug'],
                        'tagline' => $record['tagline'],
                        'description' => $record['description'],
                        'challenge' => $record['challenge'] ?? null,
                        'solution' => $record['solution'] ?? null,
                        'features' => $features,
                        'technologies' => $technologies,
                        'metrics' => $metrics,
                        'category' => $record['category'],
                        'client' => $record['client'] ?? null,
                        'industry' => $record['industry'] ?? null,
                        'completed_at' => !empty($record['completed_at']) ? $record['completed_at'] : null,
                        'url' => $record['url'] ?? null,
                        'app_store_url' => $record['app_store_url'] ?? null,
                        'play_store_url' => $record['play_store_url'] ?? null,
                        'featured_image' => $record['featured_image'] ?? null,
                        'gallery' => $gallery,
                        'testimonial' => $testimonial,
                        'is_featured' => ($record['is_featured'] ?? 'false') === 'true',
                        'is_published' => ($record['is_published'] ?? 'true') === 'true',
                        'order' => (int) ($record['order'] ?? 0),
                    ];

                    // Check if portfolio exists by ID or slug
                    $portfolio = null;
                    if (!empty($record['id'])) {
                        $portfolio = Portfolio::withTrashed()->find($record['id']);
                    }
                    if (!$portfolio && !empty($record['slug'])) {
                        $portfolio = Portfolio::withTrashed()->where('slug', $record['slug'])->first();
                    }

                    if ($portfolio) {
                        // Update existing
                        $portfolio->update($data);
                        $updated++;
                    } else {
                        // Create new
                        Portfolio::create($data);
                        $imported++;
                    }

                } catch (\Exception $e) {
                    $errors[] = "Row " . ($offset + 2) . ": " . $e->getMessage();
                }
            }

            // Clean up uploaded file
            Storage::disk('local')->delete($filePath);

            if (empty($errors)) {
                Notification::make()
                    ->title('Import Successful')
                    ->success()
                    ->body("Imported {$imported} new portfolios, updated {$updated} existing portfolios")
                    ->send();
            } else {
                Notification::make()
                    ->title('Import Completed with Errors')
                    ->warning()
                    ->body("Imported {$imported}, updated {$updated}. Errors: " . count($errors))
                    ->send();
            }

        } catch (\Exception $e) {
            Notification::make()
                ->title('Import Failed')
                ->danger()
                ->body($e->getMessage())
                ->send();
        }
    }
}
