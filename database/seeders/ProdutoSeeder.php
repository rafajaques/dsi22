<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => 'Bermuda',
            'descricao' => 'Uma bermuda legal',
            'preco' => 70.5,
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Boné',
            'descricao' => 'Um boné mais ou menos',
            'preco' => 32.75,
        ]);
    }
}
