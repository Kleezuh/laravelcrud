<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title'=> 'Harry Potter e o Cálice de Fogo',
            'pages'=>'200',
            'price'=>'119.99',
            'id_user'=>'1'
        ]);
        
        $book->create([
            'title'=> 'Percy Jackson e o Ladrão de Raios',
            'pages'=>'250',
            'price'=>'99.99',
            'id_user'=>'2'
        ]);

        $book->create([
            'title'=> 'Percy Jackson e o Mar de Monstros',
            'pages'=>'200',
            'price'=>'109.99',
            'id_user'=>'2'
        ]);
        
    }
}
