<?php
    require "../crud.class.php";
    session_start();
    $crud = new Crud();
    
    $crud->create([
        "nombre" => $_POST["nombre"],
        "id_categoria" => $_POST["id_categoria"],
        "telefono" => $_POST["telefono"],
        "email" => $_POST["email"],
        "categoria" => $_POST["categoria"],
        "creado_por" => $_SESSION["id_usuario"]
    ]);
?>