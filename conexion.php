<?php
    class Conexionbd{
        private $server="localhost";
        private $user="root";
        private $bd="hospital";
        private $pass="";

        public function conectar(){
            $conexion = mysqli_connect($this->server,
                                        $this->user,
                                        $this->pass,
                                        $this->bd);
            return $conexion;
        }
        public function Cerrar(){
            $this->conn->close();
        }
        public function ExecuteQuery($sql){
            $result = $this->conn->query($sql);
            return $result;
            }
    }
?>  