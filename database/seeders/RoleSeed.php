<?php

namespace Database\Seeders;

use App\Models\Role as ModelsRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsRole::create([
            "role" => "ADMIN",
        ]);

        ModelsRole::create([
            "role" => "USER",
        ]);
    }
}
