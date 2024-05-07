<?php
class usuario_modelo {

    public static function registrar($info){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "INSERT INTO t_usuario(USU_UID,USU_NOMBRES,USU_APELLIDOS,USU_EMAIL,USU_CONTRASEÑA,USU_TELEFONO,USU_FCH_NAC,USU_ROL)
        values
        (?,?,?,?,?,?,?,?)";

        $st = $con->prepare($sql);
        $uid = uniqid();
        $v = array(
            $uid,
            $info['nombres'], 
            $info['apellidos'], 
            $info['email'],
            sha1( 
            $info['password']),
            $info['telefono'], 
            $info['fecha_nac'],
            $info['rol']);

        return $st->execute($v); // retorna el valor numerico

    }

    public static function listar($condicion=""){
        $i = new conexion();
        $con = $i->getconexion();
        $sql= "SELECT * FROM t_usuario $condicion";
        $st = $con->prepare($sql);
        $st->execute();
        return $st->fetchAll();
    
    }

    
    public static function eliminar($uid){
        $i = new conexion();
        $con = $i->getconexion();
        $sql= "DELETE FROM t_usuario WHERE USU_UID = ?";
        $st = $con->prepare($sql);
        $v = array($uid);
        return $st->execute($v);
    }

    public static function buscarXEmail($email){
        $i = new conexion();
        $con =$i->getConexion();
        $sql= "SELECT * FROM t_usuario WHERE USU_EMAIL = ?";
        $st = $con->prepare($sql);
        $v = array($email);
        $st-> execute($v);
        return $st->fetch();
       

    }

    public static function buscarXUid($uid){
        $i = new conexion();
        $con =$i->getConexion();
        $sql= "SELECT * FROM t_usuario WHERE USU_UID = ?";
        $st = $con->prepare($sql);
        $v = array($uid);
        $st-> execute($v);
        return $st->fetch();
       

    }
    
    public static function actualizar($info){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "UPDATE t_usuario SET USU_NOMBRES=?, USU_APELLIDOS=?, USU_EMAIL=?, USU_TELEFONO=?, USU_FCH_NAC=? WHERE USU_UID=?";

        $st = $con->prepare($sql);
        $v = array(
            $info['nombres'], 
            $info['apellidos'], 
            $info['email'],
            $info['telefono'], 
            $info['fecha_nac'],
            $info['uid']
        );
        return $st->execute($v); // retorna el valor numerico

    
    }  
} 