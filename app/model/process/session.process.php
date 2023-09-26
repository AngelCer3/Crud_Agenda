<?php
    require "../crud.class.php";
    $crud = new Crud();
    
    $crud->comprobarUsuario([
        "email" =>  $_POST["email"],
        "contrasena" => $_POST["contrasena"]
    ]);
?>