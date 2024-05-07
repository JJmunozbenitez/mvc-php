<?php
class usupro_modelo{


    public static function registrar($uid,$pid){
        $i=new conexion();
        $con= $i->getConexion();
        $sql="INSERT INTO t_us_pro(USPRO_UID,USPRO_USU_ID,USPRO_PRO_ID)
        VALUES
        (?,?,?)";

        $st=$con->prepare($sql);
        $Uid=uniqid();
        $v=array(
            $Uid,
            $uid, 
            $pid);
        return $st->execute($v);
    }

    public static function listar($codigo){
        $i=new conexion();
        $con= $i -> getConexion();
        $sql="SELECT USU_ID, USU_NOMBRES, USU_APELLIDOS, USU_EMAIL, USU_TELEFONO, PRO_NOMBRE, PRO_CODIGO FROM t_usuario 
        INNER JOIN t_us_pro ON USPRO_USU_ID=USU_ID JOIN t_programa ON USPRO_PRO_ID=PRO_ID WHERE PRO_CODIGO;	
         ";
        $st=$con -> prepare($sql);
        $st -> execute();
        return $st -> fetchAll();
    }

     public static function validarUsupro($uid, $pid) {
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "SELECT * FROM t_us_pro WHERE USPRO_USU_ID = ? AND USPRO_PRO_ID = ?";
        $st = $con->prepare($sql);
        $st->execute([$uid, $pid]);
        $usuarioPrograma = $st->fetch();
        if ($usuarioPrograma) {
            return false;
        }
        return true;
    } 
    
}

