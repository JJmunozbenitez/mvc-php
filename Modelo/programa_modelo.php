<?php
class programa_modelo {

    public static function registrar($info){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "INSERT INTO t_programa(PRO_UID,PRO_NOMBRE,PRO_CODIGO)
        values
        (?,?,?)";

        $st = $con->prepare($sql);
        $uid = uniqid();
        $v = array(
            $uid,
            $info['nombre'], 
            $info['codigo']); 

        return $st->execute($v); // retorna el valor numerico

    }


     public static function listar(){
            $i = new conexion();
            $con = $i->getconexion();
            $sql= "SELECT * FROM t_programa";
            $st = $con->prepare($sql);
            $st->execute();
            return $st->fetchAll();
        
    }
    
    
    
    public static function eliminar($uid){
        $i = new conexion();
        $con = $i->getconexion();
        $sql= "DELETE FROM t_programa WHERE PRO_UID = ?";
        $st = $con->prepare($sql);
        $v = array($uid);
        return $st->execute($v);
    
    }


    public static function buscarXCodigo($codigo){
        $i=new conexion();
        $con= $i -> getConexion();
        $sql="SELECT * FROM t_programa WHERE PRO_CODIGO= ?";
        $st=$con -> prepare($sql);
        $v=array($codigo);
        $st -> execute($v);
        return $st -> fetch();
    }

    
    public static function buscarXUid($uid){
        $i = new conexion();
        $con =$i->getConexion();
        $sql= "SELECT * FROM t_programa WHERE PRO_UID = ?";
        $st = $con->prepare($sql);
        $v = array($uid);
        $st-> execute($v);
        return $st->fetch();
       

    }

    public static function actualizar($info){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "UPDATE t_programa SET PRO_NOMBRE=?, PRO_CODIGO=? WHERE PRO_UID=?";

        $st = $con->prepare($sql);
        $v = array(
            $info['nombre'], 
            $info['codigo'],
            $info['uid']
        );
        return $st->execute($v); // retorna el valor numerico

    
    }  
}