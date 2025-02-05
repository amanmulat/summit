<?php

namespace App\Filament\Pages;

use App\Models\Vote;
use Filament\Pages\Page;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\PaginationAction;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Table;
use Livewire\WithPagination;

class VotersList extends Page implements HasTable
{

    use InteractsWithTable;
    protected static ?string $model = Vote::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.voters-list';

    public function table(Table $table): Table
    {

        return $table
            ->paginated([10, 25, 50, 100, 200, 'all'])
            ->defaultPaginationPageOption(200)
            ->query(Vote::query()->latest('created_at'))
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
                TextColumn::make('created_at')
                    ->label('Vote Date & Time')
                    ->dateTime('Y-m-d H:i:s')
                    ->sortable(),
            ]);


    }

}
