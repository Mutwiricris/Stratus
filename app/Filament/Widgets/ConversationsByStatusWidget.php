<?php

namespace App\Filament\Widgets;

use App\Models\Conversation;
use Filament\Widgets\ChartWidget;

class ConversationsByStatusWidget extends ChartWidget
{
    protected ?string $heading = 'Conversations by Status';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $open = Conversation::where('status', 'open')->count();
        $pending = Conversation::where('status', 'pending')->count();
        $resolved = Conversation::where('status', 'resolved')->count();
        $closed = Conversation::where('status', 'closed')->count();

        return [
            'datasets' => [
                [
                    'label' => 'Conversations',
                    'data' => [$open, $pending, $resolved, $closed],
                    'backgroundColor' => [
                        'rgb(239, 68, 68)',   // red for open
                        'rgb(251, 191, 36)',  // amber for pending
                        'rgb(34, 197, 94)',   // green for resolved
                        'rgb(156, 163, 175)', // gray for closed
                    ],
                ],
            ],
            'labels' => ['Open', 'Pending', 'Resolved', 'Closed'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

    public function getPollingInterval(): ?string
    {
        return '60s';
    }
}
