<?php
    require "../crud.class.php";
    $crud = new Crud();
    
    $crud->update([
        "id" => $_POST["id"],
        "nombre" => $_POST["nombre"],
        "telefono" => $_POST["telefono"],
        "email" => $_POST["email"],
        "id_categoria" => $_POST["id_categoria"],
        "categoria" => $_POST["categoria"]
    ]);
?>