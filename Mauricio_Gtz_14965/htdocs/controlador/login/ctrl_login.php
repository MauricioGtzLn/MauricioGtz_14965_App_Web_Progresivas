<?php
include("../../modelo/mdl_login.php");
$obj = new login();

if(isset($_POST['user_pass'])){
    $usuario = $_POST['usuario'];
    $pass = $_POST['user_pass'];
    $resultado = $obj -> login_usuario($usuario,$pass);
    if(empty($resultado)){
        exit(json_encode(
            [
                "status" => "3",
                
            ]
            ));
    }else{
        exit(json_encode(
            [
                "status" => "1",
                "resultado" => $resultado
            ]
            ));
    }

}else{
    
}

?>