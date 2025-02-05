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
        $totalVotes = Vote::count();

        if ($totalVotes === 0) {
            dd('No votes found');
        }
        return [
            'datasets' => [
                [
                    'label' => 'Total Votes',
                    'data' => [1000],
                    'backgroundColor' => ['#4CAF50'],
                ],
            ],
            'labels' => ['Total Votes'],
        ];
    }

    public static function canView(): bool
    {
        return true;
    }

    public static function getColumns(): int
    {
        return 1; // Set to 1 column
    }

    public function getColumnSpan(): string|int
    {
        return 'full'; // Forces full-width display
    }
}
