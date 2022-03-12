<?php
//echo $controlador;
//echo $accion;
//echo "controller/controlador_".$controlador;
//include_once("controladores/controlador_paginas.php");
include_once("controller/controlador_".$controlador.".php");
//echo"Controlador".ucfirst($controlador);
$objControlador="Controlador".ucfirst($controlador);//almaceno el nombre de la clase que voy a instanciar
//echo $objControlador;
$controlador= new $objControlador;//creo el objeto mediante la clase que traje en el anterior paso
$controlador->$accion(); //el ruteador instancia el controlador de libros y accede al inicio
?>