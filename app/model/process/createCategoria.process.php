<?php 
    require "../crud.class.php";

    $crud = new Crud();

    $crud->createCatergoria([
        "categoria" => $_POST["categoria"]
    ])
?>