<?php
$programas = programa_modelo::listar();
?>

<div class="container-fluid pt-4 px-4">

    <div class="row">
        <div class="col-lg-12">
            <h3>Administracion de Inscripciones</h3>
            <a href="?controlador=usupro&accion=frmRegistrar" class= "btn btn-primary">Agregar Nuevo</a>

        </div>
    </div>

    <div class="row mt-2">
    <div class="col-lg-12">
        <div class="bg-light rounded p-4">
            <h3>Reporte de Estudiantes Matriculados</h3>
            <form action="?controlador=usupro&accion=reportePDF" method="post" target="_blank">
                <input class="btn btn-success" type="submit" name="nombreprograma" value="Generar Reporte">
            </form>
        </div>
    </div>
</div>

