<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php
    session_start(); 
    require './app/views/includes/metatags.php' 
    ?>
</head>

<body>
    <?php
    require("./app/model/crud.class.php");
    $crud = new Crud();
    if (isset($_GET["vista"])) {
        switch ($_GET["vista"]) {
            case 'home':
                include "./app/views/home.php";
                break;
            case 'registre':
                include "./app/views/registre.php";
                break;
            case 'read':
                if (isset($_SESSION['id_usuario'])) {
                    $contactos = $crud->read($_SESSION['id_usuario']);
                    include "./app/views/read.php";
                } else {
                    header("location: ./home");
                }
                break;
            case 'readCategoria':
                if (isset($_SESSION['id_usuario'])) {
                    $Categorias = $crud->readCategoria();
                    include "./app/views/readCategoria.php";
                } else {
                    header("location: ./home");
                }
                break;
            case 'update':
                if (isset($_SESSION['id_usuario'])) {
                    $contacto = $crud->show($_GET["id"], $_SESSION['id_usuario']);
                    $Categorias = $crud->readCategoria();
                    include "./app/views/update.php";
                } else {
                    header("location: ./home");
                }
                break;
            case 'updateCategoria':
                if (isset($_SESSION['id_usuario'])) {
                    $categoria = $crud->showCategoria($_GET["id"]);
                    include "./app/views/updateCategoria.php";
                } else {
                    header("location: ./home");
                }
                break;
            case 'create':
                if (isset($_SESSION['id_usuario'])) {
                    $Categorias = $crud->readCategoria();
                    include "./app/views/create.php";
                } else {
                    header("location: ./home");
                }
                break;
            case 'createCategoria':
                if (isset($_SESSION['id_usuario'])) {
                    include "./app/views/createCategoria.php";
                } else {
                    header("location: ./home");
                }
                break;
            case 'logout':
                if (isset($_SESSION['id_usuario'])) {
                    include "./app/model/process/close.proccess.php";
                }
                break;
            default:
                header("location: ./read");
                break;
        }
    } else {
        header("location: ./home");
    }
    ?>


    <?php require './app/views/includes/scripts.php' ?>
</body>

</html>