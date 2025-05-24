<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('noticias')->insert([
        [
        'id' => 1,
        'titulo' => 'Noticia 1',
        'resumen' => 'Resumen de la noticia 1',
        'contenido' => 'Contenido de la noticia 1',
        'autor' => 'Autor de la noticia 1',
        'categoria' => 'Categoria 1',
        'estado' => 'publicada',
        'created_at' => now(),
        'updated_at' => now() ],
        [
        'id' => 2,
        'titulo' => 'Noticia 2',
        'resumen' => 'Resumen de la noticia 2',
        'contenido' => 'Contenido de la noticia 2',
        'autor' => 'Autor de la noticia 2',
        'categoria' => 'Categoria 2',
        'estado' => 'publicada',
        'created_at' => now(),
        'updated_at' => now() ],
        [
        'id' => 3,
        'titulo' => 'Noticia 3',
        'resumen' => 'Resumen de la noticia 3',
        'contenido' => 'Contenido de la noticia 3',
        'autor' => 'Autor de la noticia 3',
        'categoria' => 'Categoria 3',
        'estado' => 'publicada',
        'created_at' => now(),
        'updated_at' => now() ],
        [
        'id' => 4,
        'titulo' => 'Noticia 4',
        'resumen' => 'Resumen de la noticia 4',
        'contenido' => 'Contenido de la noticia 4',
        'autor' => 'Autor de la noticia 4',
        'categoria' => 'Categoria 4',
        'estado' => 'publicada',
        'created_at' => now(),
        'updated_at' => now() ],
        [
        'id' => 5,
        'titulo' => 'Noticia 5',
        'resumen' => 'Resumen de la noticia 5',
        'contenido' => 'Contenido de la noticia 5',
        'autor' => 'Autor de la noticia 5',
        'categoria' => 'Categoria 5',
        'estado' => 'publicada',
        'created_at' => now(),
        'updated_at' => now()
        ]
     ]);
    }
}
