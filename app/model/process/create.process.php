<?php
    require "../crud.class.php";
    $crud = new Crud();
    
    $crud->create([
        "nombre" => $_POST["nombre"],
        "id_categoria" => $_POST["id_categoria"],
        "telefono" => $_POST["telefono"],
        "email" => $_POST["email"],
        "categoria" => $_POST["categoria"]
    ]);
?>