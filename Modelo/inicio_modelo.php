<?php
class inicio_modelo{
public static function validarUsuario($usuario,$password){

    $i = new conexion();
    $con = $i->getconexion();
    $sql= "SELECT USU_ROL, USU_NOMBRES, USU_APELLIDOS, USU_UID FROM t_usuario where USU_EMAIL = ? AND USU_CONTRASEÑA = ?";
    $st = $con->prepare($sql);
    $V = array($usuario, sha1($password));
    $st->execute($V);
    return $st->fetch();
    }
}
    