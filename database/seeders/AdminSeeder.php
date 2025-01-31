<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Eyob Atnafu',
            'email' => 'eyobatnafu@gmail.com',
            'password' => Hash::make('WZWPpIkzLU2EGA*05COMHid8'), // Hash the password
        ]);
    }
}
