<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add a record with Eloquent ORM
        $pet = new pet;
        $pet->name     = 'Pocholo';
        $pet->photo    = 'Pocholo.png';
        $pet->kind     = 'Dog';
        $pet->weight   = 25;
        $pet->age      = 13;
        $pet->breed    = 'Salchicha';
        $pet->location = 'Manizales';
        $pet->save();

        $pet = new pet;
        $pet->name     = 'Taylor';
        $pet->photo    = 'Pocholo.png';
        $pet->kind     = 'Dog';
        $pet->weight   = 30;
        $pet->age      = 7;
        $pet->breed    = 'Pitbull';
        $pet->location = 'Manizales';
        $pet->save();

        $pet = new pet;
        $pet->name     = 'Lupe';
        $pet->photo    = 'Pocholo.png';
        $pet->kind     = 'Dog';
        $pet->weight   = 15;
        $pet->age      = 2;
        $pet->breed    = 'Pincher';
        $pet->location = 'Manizales';
        $pet->save();
    }
}
