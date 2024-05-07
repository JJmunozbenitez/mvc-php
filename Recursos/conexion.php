
<?php
    class conexion{
        public function __construct(){
            try{
                $this->con = new PDO("mysql:host=localhost;dbname=bdmvc", "root", "");
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            }catch(Exception $e){
                echo "ERROR:".$e->getMessage();

            }
        }
        public function getConexion(){
            return $this->con;

        }

}
?>
