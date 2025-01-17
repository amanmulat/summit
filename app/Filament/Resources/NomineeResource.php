<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NomineeResource\Pages;
use App\Filament\Resources\NomineeResource\RelationManagers;
use App\Models\Nominee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NomineeResource extends Resource
{
    protected static ?string $model = Nominee::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required(),
                Forms\Components\FileUpload::make('logo')
                    ->label('Logo')
                    ->required(),
                Forms\Components\TextInput::make('link')->label('Link')->required(),
                Forms\Components\TextInput::make('short_description')->label('Short Description')->required(),
                Forms\Components\TextInput::make('description')->label('Description')->required(),
                Forms\Components\Select::make('technology_id')->relationship('technology', 'name')->label('Technology')->required(),
                Forms\Components\Select::make('category_id')->relationship('category', 'name')->label('Category')->required(),
                Forms\Components\Select::make('award_type_id')->relationship('awardType', 'name')->label('Award Type')->required(),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('logo')->label('Logo')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('link')->label('Link')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('short_description')->label('Short Description')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')->label('Description')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('technology_id')->label('Technology')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category_id')->label('Category')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('award_type_id')->label('Award Type')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNominees::route('/'),
            'create' => Pages\CreateNominee::route('/create'),
            'edit' => Pages\EditNominee::route('/{record}/edit'),
        ];
    }
}
