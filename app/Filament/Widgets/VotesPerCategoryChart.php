<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use Filament\Widgets\ChartWidget;

class VotesPerCategoryChart extends ChartWidget
{
    protected static ?string $heading = 'Votes Per Category';
    protected static ?int $sort = 1;

    protected function getData(): array
    {
        $categories = Category::withCount('votes')->get();
        return [
            'datasets' => [
                [
                    'label' => 'Votes',
                    'data' => $categories->pluck('votes_count')->toArray(),
                    'backgroundColor' => ['#239D24', '#1D72AF', '#F0790E'],
                ],
            ],
            'labels' => $categories->pluck('name')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
