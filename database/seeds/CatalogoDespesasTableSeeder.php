<?php

use Illuminate\Database\Seeder;

class CatalogoDespesasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogo_despesas')->insert([
            'nome' => 'Lanches',
            'tipo_despesa_id' => 2,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Serviços',
            'tipo_despesa_id' => 2,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Carro',
            'tipo_despesa_id' => 2,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Casa',
            'tipo_despesa_id' => 1,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Compras',
            'tipo_despesa_id' => 1,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Mercado',
            'tipo_despesa_id' => 1,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Medicamentos',
            'tipo_despesa_id' => 2,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Boletos',
            'tipo_despesa_id' => 1,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Gasolina',
            'tipo_despesa_id' => 1,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Transporte',
            'tipo_despesa_id' => 2,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Roupas',
            'tipo_despesa_id' => 2,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Viagem',
            'tipo_despesa_id' => 2,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Investimentos',
            'tipo_despesa_id' => 1,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('catalogo_despesas')->insert([
            'nome' => 'Entretenimento',
            'tipo_despesa_id' => 2,
            'situacao' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
