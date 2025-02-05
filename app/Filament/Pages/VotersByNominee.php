<?php

namespace App\Filament\Pages;

use App\Exports\VotersExport;
use App\Models\Nominee;
use App\Models\Vote;
use Filament\Actions\ExportAction;
use Filament\Pages\Page;
use Filament\Tables\Actions\ExportAction as ActionsExportAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\ButtonAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\View\View;

class VotersByNominee extends Page implements HasTable
{
    use InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.voters-by-nominee';

    public ?int $nomineeId = null;

    public $nominees;
    public function mount()
    {
        $this->nominees = Nominee::all();
        $this->nomineeId = Nominee::first()->id ?? null;
    }

    public function setNominee($id)
    {
        $this->nomineeId = $id;
    }

    public function table(Table $table): Table
    {
        return $table
        ->query(Vote::query()
            ->with(['user', 'nominee'])
            ->when($this->nomineeId, fn($query) => $query->where('nominee_id', $this->nomineeId))
        )
        ->columns([
            TextColumn::make('user.email')->label('Voter Email')->sortable()->searchable(),
            TextColumn::make('user.name')->label('Voter Name')->sortable()->searchable(),
            TextColumn::make('nominee.name')->label('Nominee Voted For')->sortable()->searchable(),
            TextColumn::make('created_at')->label('Vote Date')->dateTime('Y-m-d H:i:s')->sortable(),
        ])
        ->actions([
            ButtonAction::make('export')
                ->label('Export Voters')
                ->action(fn () => Excel::download(new VotersExport($this->nomineeId), 'voters_list.xlsx')),
        ])
        ->paginated([10, 25, 50, 100, 200, 'all']);


    }

}
