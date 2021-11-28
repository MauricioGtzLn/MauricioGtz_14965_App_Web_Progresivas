<?php

class conexion {
    public function db_connection(){
        $con = mysqli_connect("localhost", "root", "root", "proyecto");
        $con -> set_charset("UTF-8");
        return $con;
    }
}

?>