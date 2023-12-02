<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into produtos
        (name, quantidade, valor, descricao)
        values (?,?,?,?)',
        array('Geladeira', 2, 900.00,
        'Side by com gelo na porta'));

        DB::insert('insert into produtos
        (name, quantidade, valor, descricao)
        values (?,?,?,?)',
        array('Fogão', 5, 950.00,
        'Painel automático e forno elétrico'));

        DB::insert('insert into produtos
        (name, quantidade, valor, descricao)
        values (?,?,?,?)',
        array('Microondas', 1, 520.00,
        'Manda SMS quando terminar de esquentar'));
    }
}
