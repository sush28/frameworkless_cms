<?php

/**
 * Class Entrada
 */
class ModeloEntrada{
    
    public function obtenerPosts(){
        
        
    }

}


/* CONSULTAS */

/* CREATE */
$sql = sprintf(
    "INSERT INTO `entrada` (`id`, `titulo`, `contenido`, `id_autor`, `imagen`, `altimagen`, `fecha`, `publico`, `slug`, `id_cat`) 
    VALUES (%s, `%s`, `%s`, %s, `%s`, `%s`, `%s`, %s, `%s`, %s)",
    "NULL",
    mysqli::real_escape_string ($titulo),
    mysqli::real_escape_string ($contenido),
    mysqli::real_escape_string ($autor),
    mysqli::real_escape_string ($imagen),
    mysqli::real_escape_string ($altimagen),
    mysqli::real_escape_string ($fecha),
    mysqli::real_escape_string ($publico),
    mysqli::real_escape_string ($slug),
    mysqli::real_escape_string ($id_cat)
);

/* READ */
$sql = "SELECT * FROM `entrada` ORDER BY `fecha` ASC";

$sql = sprintf(
    "SELECT * FROM `entrada` WHERE id=%s",
    mysqli::real_escape_string ($id)
);

/* UPDATE */
$sql = sprintf(
    "UPDATE `entrada` SET `id`=%s, `fecha`=%s, `arena`=`%s`, `ciudad`=`%s`, `disponibilidad`=%s , `puntoventa`=%s  WHERE id=%s",
    "NULL",
    mysqli::real_escape_string ($fecha),
    mysqli::real_escape_string ($arena),
    mysqli::real_escape_string ($ciudad),
    mysqli::real_escape_string ($disponibilidad),
    mysqli::real_escape_string ($puntoventa)
);

/* DELETE */
$sql = sprintf(
    "DELETE FROM `entrada` WHERE id=%s",
    mysqli::real_escape_string ($id)
);
