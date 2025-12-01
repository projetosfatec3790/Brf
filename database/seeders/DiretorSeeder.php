<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diretores')->insert(
        [
            [
                'name' => "Steven Spielberg",
                'descricao' => "Diretor do filme ET: O Extraterrestre",
                'nacionalidade_id' => 1
            ],
            
            [
                'name' => "Quentin Tarantino",
                'descricao' => "Diretor do filme Cães de Aluguel",
                'nacionalidade_id' => 2
            ],

            [
                'name' => "Christopher Nolan",
                'descricao' => "Diretor do filme Interestelar",
                'nacionalidade_id' => 2
            ],

              [
                'name' => "Tim Burton",
                'descricao' => "Diretor do filme A Noiva Cadáver",
                'nacionalidade_id' => 2
            ],

              [
                'name' => "James Cameron",
                'descricao' => "Diretor do filme Avatar",
                'nacionalidade_id' => 1
            ],

             [
                'name' => "Woody Allen",
                'descricao' => "Diretor do filme Meia-Noite em Paris",
                'nacionalidade_id' => 1
            ],
        ]
            
        );


    }
}
