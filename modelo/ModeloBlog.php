<?php

/**
 * Class Blog
 */
class ModeloBlog
{
    public function obtenerPosts()
    {
        // @todo conexion con la base de datos... para obtener los posts

        // Devuelvo un array guarrero
        return [
            [
                'titulo'    => 'post 1',
                'contenido' => 'contenido....',
            ],
            [
                'titulo'    => 'post 1',
                'contenido' => 'contenido....',
            ],
            [
                'titulo'    => 'post 1',
                'contenido' => 'contenido....',
            ],
            [
                'titulo'    => 'post 1',
                'contenido' => 'contenido....',
            ]
        ];
    }
}
