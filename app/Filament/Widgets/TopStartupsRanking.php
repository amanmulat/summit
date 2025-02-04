<?php

namespace App\Filament\Widgets;

use App\Models\Nominee;
use App\Models\Vote;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class TopStartupsRanking extends BaseWidget
{
    protected static ?string $heading = 'Top 3 Startups by Votes';
    protected static ?int $sort = 2;
    protected static bool $isLazy = true;

    protected function getTableQuery(): Builder
    {
        return Nominee::withCount('votes')
            ->orderByDesc('votes_count')
            ->limit(3);
    }

    protected function getTableColumns(): array
    {
        $totalVotes = Vote::count() ?: 1;

        return [
            TextColumn::make('rank')
                ->label('Rank')
                ->state(fn ($record) => Nominee::withCount('votes')
                ->having('votes_count', '>=', $record->votes_count)
                ->count()),
            TextColumn::make('name')
                ->label('Startup Name')
                ->weight('bold'),

            TextColumn::make('votes_count')
                ->label('Votes'),

            TextColumn::make('percentage')
                ->label('Percentage')
                ->state(fn ($record) => round(($record->votes_count / $totalVotes) * 100, 2) . '%'),
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
