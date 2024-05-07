<?php
class Ruta{
    public static function CargarContenido($controlador, $accion){
            // echo "<br> se debe cargar el controlador: $controlador";
            // echo "<br>Y ejecutar el servicio: $accion";
            // echo "<br>$controlador"."_Controlador.php";
            if(file_exists("controlador/$controlador"."_controlador.php")){
                    require_once "Controlador/$controlador"."_controlador.php";
                    $cnt=$controlador."_controlador";
                    $obj=new $cnt();
                    if(method_exists ($obj,$accion)){
                        $obj->$accion();
                    }else{
                        echo "<br> Este servicio no existe";
                    }
                }else{
                    echo"<br>Este controlador no existe";
                }

            }
}
?>