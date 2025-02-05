<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class VotesByCategoryChart extends ChartWidget
{
    protected static ?int $refreshInterval = 10;
    protected static ?string $heading = 'Votes Per Category';
    protected static bool $isLazy = true;



    protected function getType(): string
    {
        return 'bar'; // Alternative: 'horizontalBar'
    }

    protected function getOptions(): array
{
    return [
        'animation' => [
            'duration' => 1000, // Animation speed (1 second)
            'easing' => 'easeInOutBounce', // Smooth bounce effect
        ],
        'scales' => [
            'x' => [
                'grid' => ['display' => false], // Hide X-axis grid
                'ticks' => ['font' => ['size' => 14]],
            ],
            'y' => [
                'ticks' => ['font' => ['size' => 14]],
            ],
        ],
        'elements' => [
            'bar' => [
                'barThickness' => 20, // Set bar width
                'maxBarThickness' => 40,
                'borderRadius' => 5,
                'borderWidth' => 0,
            ],
        ],
        'responsive' => true,
        'maintainAspectRatio' => false,
    ];
}

protected function getData(): array
{
    
    $query = Category::withCount('votes')->get();

    return [
        'datasets' => [
            [
                'label' => 'Votes',
                'data' => $query->pluck('votes_count')->toArray(),
                'backgroundColor' => ['#239D24', '#1D72AF', '#F0790E'],
            ],
        ],
        'labels' => $query->pluck('name')->toArray(),
    ];
}


    public static function canView(): bool
    {
        return true;
    }

    public static function getColumns(): int
    {
        return 1;
    }

    public function getColumnSpan(): string|int
    {
        return 'full';
    }
}
