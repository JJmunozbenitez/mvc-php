<?php
require_once "Modelo/usuario_modelo.php";
    class usuario_controlador{

       public function __construct(){
        $this->obj= new plantilla();
       }

       public function principal(){
        $this->obj->usuarios = usuario_modelo::listar();
        $this->obj->unirpagina("usuario/principal");
       }

       public function frmRegistrar(){
        $this->obj-> unirpagina("usuario/frmRegistrar");
       }
       public function registrar(){
        if(isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['telefono']) && isset($_POST['fecha_nac']) && isset($_POST['rol'])){
            extract($_POST);
            
            if(trim($nombres)=="" || trim($apellidos)== "" || trim($email)== "" || trim($password)== "" || trim($telefono)== "" || trim($fecha_nac)== "" || trim($rol)== ""){
                echo json_decode(array("estado"=>2, "mensaje"=>"todos los campos son obligatorios"));
            }else{
                $datos['nombres'] = $nombres;
                $datos['apellidos'] = $apellidos;
                $datos['email'] = $email;
                $datos['password'] = $password;
                $datos['telefono'] = $telefono;
                $datos['fecha_nac'] = $fecha_nac;
                $datos['rol'] = $rol;
                $res= usuario_modelo::buscarXEmail($email);

                if(is_array($res)){
                    echo json_encode(array("estado"=>2,"mensaje"=>"Ya ese correo existe", "icono"=>"error"));
                }else{
                    $res = usuario_modelo::registrar($datos);
                    if ($res > 0)
                        echo json_encode(array("estado"=>1, "mensaje"=>"Registrado","icono"=>"sucess"));
                    else
                        echo json_encode(array("estado"=>2, "mensaje"=>"Error al registrar","icono"=>"error"));
                } 
            }
        }else{
            header('location: /controladores');
        }

       }

       public function frmEditar(){
            $uid= $_GET["uid"];
            $this->obj->infoUsuario = usuario_modelo::buscarXuid($uid);
            $this->obj->unirpagina("usuario/frmEditar");
       }
       public function editar(){

        if(isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['telefono']) && isset($_POST['fecha_nac'])){
            extract($_POST);
            
            if(trim($nombres)=="" || trim($apellidos)== "" || trim($email)== "" || trim($uid)== "" || trim($telefono)== "" || trim($fecha_nac)== ""){
                echo json_decode(array("estado"=>2, "mensaje"=>"todos los campos son obligatorios"));
            }else{
                $datos['nombres'] = $nombres;
                $datos['apellidos'] = $apellidos;
                $datos['email'] = $email;
                $datos['uid'] = $uid;
                $datos['telefono'] = $telefono;
                $datos['fecha_nac'] = $fecha_nac;




                $res= usuario_modelo:: actualizar($datos);
                if ($res > 0)
                    echo json_encode(array("estado" =>1, "mensaje"=>"Editado", "icono"=>"succces"));
                else
                    echo json_decode(array("estado" =>2, "mensaje"=>"Error al editar", "icono"=>"error"));

            //}
            }

        }else{
            echo json_decode(array("estado" =>3, "mensaje"=>"Faltan parametros", "icono"=>"error"));

        }
        }   
       

       public function eliminar(){
            if (isset($_GET["uid"])){
                $uid = $_GET["uid"];
                $r = usuario_modelo::eliminar($uid);
                echo "se elimino el registro";
            }
       }

       public function buscar(){
       }

       public function reportePDF(){
        $rol = $_POST["rol"];
        $allUsers = usuario_modelo::Listar("WHERE USU_ROL = $rol");
        require_once "Vista/usuario/reporte.php";
       }
        

}
?>