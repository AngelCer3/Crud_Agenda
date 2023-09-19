<?php
    require "../crud.class.php";
    $crud = new Crud();
    
    $crud->updateCategoria([
        "id" => $_POST["id_categoria"],
        "categoria" => $_POST["categoria"]
    ]);
?>