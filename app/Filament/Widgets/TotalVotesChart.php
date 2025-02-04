<?php

namespace App\Filament\Widgets;

use App\Models\Vote;
use Filament\Widgets\ChartWidget;

class TotalVotesChart extends ChartWidget
{
    protected static ?string $heading = 'Total Votes Cast';
    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Total Votes',
                    'data' => [Vote::count()],
                    'backgroundColor' => ['#4CAF50'],
                ],
            ],
            'labels' => ['Votes'],
        ];
    }
}
