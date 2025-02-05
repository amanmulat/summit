<?php

namespace App\Exports;

use App\Models\Vote;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class VotersExport implements FromCollection, FromQuery, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;
    public function collection()
    {
        return Vote::all();
    }

    public function query()
    {
        return Vote::query()->with(['user', 'nominee'])->get();
    }

    public function headings(): array
    {
        return ['ID', 'Voter Email', 'Voter Name', 'Nominee', 'Vote Date'];
    }

    public function map($vote): array
    {
        return [
            $vote->id,
            $vote->user->email ?? 'N/A', // Handle missing data
            $vote->user->name ?? 'N/A',
            $vote->nominee->name ?? 'N/A',
            $vote->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
