<?php

namespace App\Filament\Widgets;

use App\Models\Conversation;
use App\Models\Department;
use Filament\Widgets\ChartWidget;

class ConversationsByDepartmentWidget extends ChartWidget
{
    protected ?string $heading = 'Conversations by Department';

    protected static ?int $sort = 4;

    protected function getData(): array
    {
        $departments = Department::withCount('conversations')->get();

        $labels = [];
        $data = [];
        $colors = [
            'rgb(59, 130, 246)',   // blue
            'rgb(139, 92, 246)',   // purple
            'rgb(236, 72, 153)',   // pink
            'rgb(34, 197, 94)',    // green
            'rgb(251, 191, 36)',   // amber
        ];

        foreach ($departments as $index => $department) {
            $labels[] = $department->name;
            $data[] = $department->conversations_count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Conversations',
                    'data' => $data,
                    'backgroundColor' => array_slice($colors, 0, count($departments)),
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    public function getPollingInterval(): ?string
    {
        return '60s';
    }
}
