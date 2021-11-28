<?php
include 'mdl_conexion.php';

class login{

    private $db;
    private $lista;

    public function __construct()
    {
        $this->db = conexion::db_connection();
        $this->arraybd =  array();
    }

    public function login_usuario($correo,$contrasena){                
        $resultado = $this->db->query("SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena ='$contrasena' AND rol = 'usuario'");        
        while ($filas = $resultado->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

    public function login_admin($correo,$contrasena){                                
        $resultado = $this->db->query("SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena ='$contrasena' AND rol = 'administrador'");        
        while ($filas = $resultado->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
}


?>