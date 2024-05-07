<?php
session_start();
require_once "Recursos/Ruta.php";
require_once "Recursos/Plantilla.php";
require_once "Recursos/conexion.php";
if(isset($_GET['controlador']) && isset($_GET['accion'])){
    $controlador=$_GET['controlador'];
    $accion=$_GET['accion'];
}else{
    $controlador='inicio';
    $accion='principal';
}





ruta::CargarContenido($controlador, $accion);
?>
