<?php 
    require "../crud.class.php";
    $crud =  new Crud();
    
    $crud->createUsuario([
        "nombre" => $_POST["nombre"],
        "apellido" => $_POST["apellido"],
        "telefono" => $_POST["telefono"],
        "email" => $_POST["email"],
        "contrasena" => $_POST["contrasena"] 
    ]);
?>