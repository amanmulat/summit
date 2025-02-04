<?php

namespace App\Filament\Pages;

use App\Models\Category;
use App\Models\User;
use App\Models\Vote;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry\Size;
use Filament\Pages\Page;
use Filament\Support\Enums\FontWeight;

class Summary extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static string $view = 'filament.pages.summary';
    protected static ?string $title = 'Summary';

    public static function getTotalVotes(): int
    {
        return Vote::count();
    }

    public static function getTotalRegisteredUsers(): int
    {
        return User::whereHas('vote')->count(); // Ensure 'vote' relationship is correctly defined in User model
    }

    public static function getVotesByCategory(): string
    {
        return Category::withCount('votes')
            ->get()
            ->map(fn ($category) => "{$category->name}: {$category->votes_count} votes")
            ->implode('<br>');
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->state([
            'total_votes' => static::getTotalVotes(),
            'total_registered_users' => static::getTotalRegisteredUsers(),
            'votes_by_category' => static::getVotesByCategory(),
        ])->schema([
            Section::make('Overview / Summary')
                ->columns(3)
                ->schema([
                    TextEntry::make('total_votes')
                        ->label('Total Votes Cast')
                        ->weight(FontWeight::Bold)
                        ->size('xl')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->extraAttributes([
                            'class' => 'text-center text-green-600 dark:text-green-400',
                        ]),
                    TextEntry::make('total_registered_users')
                        ->label('Total Registered Users')
                        ->weight(FontWeight::Bold)
                        ->size('xl')
                        ->icon('heroicon-o-user-group')
                        ->color('primary')
                        ->extraAttributes([
                            'class' => 'text-center text-blue-600 dark:text-blue-400',
                        ]),
                    TextEntry::make('votes_by_category')
                        ->label('Votes by Category')
                        ->extraAttributes([
                            'class' => 'text-center text-gray-700 dark:text-gray-300',
                            ])
                        ->html(),
                ]),
        ]);
    }
}
