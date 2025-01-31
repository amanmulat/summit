<?php

namespace App\Filament\Pages;

use App\Models\Nominee;
use Filament\Pages\Page;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;

class Leaderboard extends Page implements HasTable
{
    use InteractsWithTable;
    protected static ?string $model = Nominee::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.leaderboard';

    public function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->query(Nominee::query()->withCount('votes')->orderByDesc('votes_count')) // Count votes
            ->columns([
                TextColumn::make('name')
                    ->label('Nominee Name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('votes_count')
                    ->label('No. of Votes')
                    ->sortable()
                    ->searchable(),
            ]);
    }
}
