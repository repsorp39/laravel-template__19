<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliereSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filiere::create([
            "codefil" => "EAS",
            "nom" => "something"
        ]);
    }
}
