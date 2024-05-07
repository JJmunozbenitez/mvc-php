<?php
require_once "Modelo/inicio_modelo.php";
class inicio_controlador{
    public function __construct(){
        $this-> obj= new Plantilla();
    }

    public function principal() {
        $this-> obj->unirPagina("Inicio/frmLogin",false);
    }

    public function dashboard() {
        if(!isset($_SESSION["USU_UID"]))
            header("location:/controladores");

        $this-> obj->unirPagina("Inicio/principal");
        }

    public function frmLogin() {
        
        $this-> obj->unirPagina("Inicio/frmLogin");
       
    }


    public function validarUsuario(){
        extract($_POST);
        if(isset($email)  &&  isset($password)){
            $res = inicio_modelo::validarUsuario($email, $password);
            if(is_array($res)){
                $_SESSION['USU_NOMBRES']   = $res["USU_NOMBRES"];
                $_SESSION['USU_APELLIDOS'] = $res["USU_APELLIDOS"];
                $_SESSION['USU_UID']       = $res["USU_UID"];
                $_SESSION['USU_ROL']       = $res["USU_ROL"];
                echo json_encode(array("estado"=>1, "mensaje"=>"Bienvenido"));
            }else{
                echo json_encode(array("estado"=>2, "mensaje"=>"Usuario/password errados"));
            }
        }else{
            echo json_encode(array("estado"=>2, "mensaje"=>"faltan parametros"));
        }
    } 





    public function cerrarSession() {
        session_destroy();
        header("location: /controladores");
    }
}
?>