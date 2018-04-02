<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SeederListaDeTarefas extends Seeder{
    public function run() {
        DB::table('ListaDeTarefas')->insert([
        'texto' =>'Comprar passagem aéreas',
        'autor' =>'Elton Andrade',
        'status' =>'Cocluido',
        'created_at' => date('Y-m-d h:t:s')
    ]);
    DB::table('ListaDeTarefas')->insert([
    'texto' =>'Reservar hotel',
    'autor' =>'Elton Andrade',
    'status' =>'Cocluido',
    'created_at' => date('Y-m-d h:t:s')
    ]);

    DB::table('ListaDeTarefas')->insert([
    'texto' =>'Preparar slide para apresentação',
    'autor' =>'Elton Andrade',
    'status' =>'Pendente',
    'created_at' => date('Y-m-d h:t:s')
    ]);
    }
}
