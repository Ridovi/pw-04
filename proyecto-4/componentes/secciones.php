<?php

$inicio = [
    'titulo'=>'Bienvenido',
    'contenido'=>'Bienvenido al mundo de los gatos',
    'imagen'=>'http://lorempixel.com/g/400/200/cats/',
];

$razas = [
    'titulo'=>'Razas',
    'contenido'=>'¿Sabes cuantas razas de gatos hay?',
    'imagen'=>'http://lorempixel.com/g/400/200/cats/',
];

$juguetes = [
    'titulo'=>'Juguetes',
    'contenido'=>'Existen muchos tipos de juguetes',
    'imagen'=>'http://lorempixel.com/g/400/200/cats/',
];

$extra = [
    'titulo'=>'Extra',
    'contenido'=>'¿Te gustaría ver imagenes de gatos aleatoria?',
    'imagen'=>'http://lorempixel.com/g/400/200/cats/',
];

$secciones = [
    'p1'=> $inicio,
    'p2'=> $razas,
    'p3'=> $juguetes,
    'p4'=> $extra,
   
];


if (isset($_GET['seccion'])){
    $seccion = $_GET['seccion'];
}

if (!isset($_GET['seccion'])){
    $seccion = 'p1';
}

$titulo= $secciones[$seccion]['titulo'];  
$contenido= $secciones[$seccion]['contenido'];  
$imagen= $secciones[$seccion]['imagen'];  

?>