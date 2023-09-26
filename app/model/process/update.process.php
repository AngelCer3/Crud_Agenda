<?php
    require "../crud.class.php";
    session_start();
    $crud = new Crud();
    
    $crud->update([
        "id" => $_POST["id"],
        "nombre" => $_POST["nombre"],
        "telefono" => $_POST["telefono"],
        "email" => $_POST["email"],
        "id_categoria" => $_POST["id_categoria"],
        "categoria" => $_POST["categoria"],
        "creador_por" => $_SESSION["id_usuario"]
    ]);
?>