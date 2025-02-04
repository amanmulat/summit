<?php

namespace App\Filament\Widgets;

use App\Models\Vote;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class DailyVotesChart extends ChartWidget
{
    protected static ?string $heading = 'Daily Vote Submissions';
    protected static ?int $sort = 3;

    protected function getData(): array
    {

            $days = collect(range(6, 0))->map(fn ($daysAgo) => Carbon::now()->subDays($daysAgo)->format('Y-m-d'));
            $voteCounts = $days->map(fn ($date) => Vote::whereDate('created_at', $date)->count());

            return [
                'datasets' => [
                    [
                        'label' => 'Votes',
                        'data' => $voteCounts->toArray(),
                        'borderColor' => '#007bff',
                        'backgroundColor' => 'rgba(0, 123, 255, 0.2)',
                    ],
                ],
                'labels' => $days->toArray(),
            ];

    }

    protected function getType(): string
    {
        return 'line';
    }
}
