<?php

function slugify($text){
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

function fechaActual() {
    $datetimeHoy = new \Datetime("now");
    return date("Y-m-d H:i:s", $datetimeHoy->getTimestamp());
}

function guardarImagen($file, $carpeta = 'almacenamiento/blog/') {
    // Mover archivo a /almacenamiento/blog/{nombre}
    $imageBinaryData = file_get_contents($file["tmp_name"]);
    // Crea el archivo en uploads, require 2 cosas: nombre de archivo, contenido
    file_put_contents($carpeta . $file["name"], $imageBinaryData);
}

?>