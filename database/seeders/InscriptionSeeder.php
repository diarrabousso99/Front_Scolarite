<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inscriptions')->delete();
        DB::table('inscriptions')->insert([
            [
                'niveau' => 'Master 2',
                'formation' => 'GDIL',
                'annee_academique' => '2023-2023',
                'etudiant_id' => 1
            ],
            [
                'niveau' => 'Master 2',
                'formation' => 'GDIL',
                'annee_academique' => '2023-2023',
                'etudiant_id' => 2
            ],
            [
                'niveau' => 'Master 2',
                'formation' => 'GDIL',
                'annee_academique' => '2023-2023',
                'etudiant_id' => 3
            ],
        ]);
    }
}
