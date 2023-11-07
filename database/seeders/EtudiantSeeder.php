<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('etudiants')->delete();
        DB::table('etudiants')->insert([

            [
                'code_etu' => 'P28 2467',
                'ine' => 'dahdahdow838727',
                'nom' => 'DIENG',
                'prenom' => 'Diarra Bousso',
                'mail_ugb' => 'dieng.diarra-bousso@ugb.edu.sn',
                'date_naiss_etu' => '1999-01-16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'code_etu' => 'P28 616',
                'ine' => 'dahdafwjsf773727',
                'nom' => 'DIAW',
                'prenom' => 'Lamine',
                'mail_ugb' => 'diaw.lamine@ugb.edu.sn',
                'date_naiss_etu' => '1998-09-28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'code_etu' => 'P28 832',
                'ine' => 'd34683d948h',
                'nom' => 'NDIAYE',
                'prenom' => 'Abdou',
                'mail_ugb' => 'ndiaye.abdou@ugb.edu.sn',
                'date_naiss_etu' => '1998-09-09',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);
    }
}
