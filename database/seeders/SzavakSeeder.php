<?php

namespace Database\Seeders;

use App\Models\Szavak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SzavakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Szavak::create(['tema_id'=>1, 'angol'=>'rose', 'magyar'=>'rózsa']);
        Szavak::create(['tema_id'=>2, 'angol'=>'table', 'magyar'=>'asztal']);
        Szavak::create(['tema_id'=>3, 'angol'=>'sunny', 'magyar'=>'napos']);
    }
}
