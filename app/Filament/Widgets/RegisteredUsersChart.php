<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Vote;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class RegisteredUsersChart extends ChartWidget
{
    protected static ?string $heading = 'User Registrations Over Time';
    protected static bool $isLazy = true;
    protected function getType(): string
    {
        return 'line';
    }

    protected function getData(): array
    {
        $users = User::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->where('created_at', '>=', Carbon::now()->subDays(3))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'New Users',
                    'data' => $users->pluck('count')->toArray(),
                    'borderColor' => '#2196F3',
                    'fill' => false,
                ],
            ],
            'labels' => $users->pluck('date')->toArray(),
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
