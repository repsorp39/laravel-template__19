<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "nom" => "Jean",
            "prenom" => "Jean",
            "email" => "example@gmail.com",
            "date_naissance" => Carbon::now(),
            "sexe" => "M",
            "password" => bcrypt("password"),
            "role_id" => 2
        ]);
    }
}
