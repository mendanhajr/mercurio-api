<?php

use Illuminate\Database\Seeder;

class TipoDespesasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_despesas')->insert([
            'nome' => 'FIXA',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipo_despesas')->insert([
            'nome' => 'DIVERSAS',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
