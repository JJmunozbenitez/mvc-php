<?php
require_once "Modelo/usuario_modelo.php";
require_once "Modelo/usupro_modelo.php";
require_once "Modelo/programa_modelo.php";
    class usupro_controlador{

       public function __construct(){
        $this->obj= new plantilla();
       }

       public function principal(){
        $this->obj->unirpagina("usupro/principal");
       }

       public function frmRegistrar(){
        $this->obj-> unirpagina("usupro/frmRegistrar");
       }


       public function registrar() {
        if (isset($_POST['correo']) && isset($_POST['codigo'])) {
            extract($_POST);
            if (trim($correo) == "" or trim($codigo) == "") {
                echo json_encode(array("estado" => 3, "mensaje" => "Debe completar los campos", "icon" => "error"));
            } else {
                $datos['correo'] = $correo;
                $datos['codigo'] = $codigo;
                $res1 = usuario_modelo::buscarXEmail($correo);
                $res2 = programa_modelo::buscarXCodigo($codigo);
                if (!is_array($res1)) {
                    echo json_encode(array("estado" => 2, "mensaje" => "Usuario no existe", "icon" => "error"));
                } elseif (!is_array($res2)) {
                    echo json_encode(array("estado" => 2, "mensaje" => "Programa no existe", "icon" => "error"));
                } else {
                    // Validar si el usuario ya está inscrito en el programa
                    $validarUsuarioPrograma = usupro_modelo::validarUsupro($res1["USU_ID"], $res2["PRO_ID"]);
                    if (!$validarUsuarioPrograma) {
                        echo json_encode(array("estado" => 2, "mensaje" => "El usuario ya está inscrito en el programa", "icon" => "error"));
                        return;
                    }
                    $res = usupro_modelo::registrar($res1["USU_ID"], $res2["PRO_ID"]);
                    if ($res > 0) {
                        echo json_encode(array("estado" => 1, "mensaje" => "Registrado", "icon" => "success"));
                    } else {
                        echo json_encode(array("estado" => 2, "mensaje" => "ERROR No se pudo Registrar", "icon" => "error"));
                    }
                }
            }
        }
    }

    public function frmEditar(){}
    
    public function editar(){}

    public function eliminar(){}

    public function buscar(){}

    public function reportePDF(){
        $programas=$_POST["programa"];
        $allUSer=usupro_modelo::listar($programas);
        require_once "Vista/usupro/reporteEstudiante.php";
    }
}
?>