<?php
    require "../crud.class.php";
    $crud = new Crud();
    
    $crud->deleteCategoria([
        "id" => $_POST["id_categoria"],
    ]);
?>