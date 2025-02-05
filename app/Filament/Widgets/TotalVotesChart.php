<?php

namespace App\Filament\Widgets;

use App\Models\Vote;
use Filament\Widgets\ChartWidget;

class TotalVotesChart extends ChartWidget
{
    protected static ?string $heading = 'Total Votes Cast';


    protected function getType(): string
    {
    return 'line';
    }

    protected function getData(): array
    {
        $votesPerDay = Vote::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Votes Over Time',
                    'data' => $votesPerDay->pluck('count')->toArray(),
                    'borderColor' => '#4CAF50',
                    'backgroundColor' => 'rgba(76, 175, 80, 0.2)',
                ],
            ],
            'labels' => $votesPerDay->pluck('date')->toArray(),
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
