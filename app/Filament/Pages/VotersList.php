<?php

namespace App\Filament\Pages;

use App\Models\Vote;
use Filament\Pages\Page;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Table;

class VotersList extends Page implements HasTable
{
    use InteractsWithTable;
    protected static ?string $model = Vote::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.voters-list';

    public function table(Table $table): Table
    {
        return $table

            ->query(Vote::query())
            ->columns([
                TextColumn::make('user.email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('user.name')
                    ->label('Name (Google Auth)')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('nominee.name')
                    ->label('Nominee Voted For')
                    ->sortable()
                    ->searchable(),
            ])->paginate(100);
    }
}
