<?php
include("../../modelo/mdl_login.php");
$obj = new login();

if(isset($_POST['admin_user_pass'])){
    $usuario = $_POST['admin_user'];
    $pass = $_POST['admin_user_pass'];
    $resultado = $obj -> login_admin($usuario,$pass);    
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