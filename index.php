<!DOCTYPE html>
<html lang="en">
<head>
    <?php require './app/views/includes/metatags.php' ?>
</head>
<body> 
    <?php
        require("./app/model/crud.class.php");
        $crud = new Crud();
        if(isset($_GET["vista"])){
            switch($_GET["vista"]){
                case 'home':
                    include "./app/views/home.php";
                    break;
                case 'read':
                    $contactos = $crud->read();
                    include "./app/views/read.php";
                    break;
                case 'readCategoria':
                    $Categorias = $crud->readCategoria();
                    include "./app/views/readCategoria.php";
                    break;
                case 'update':
                    $contacto = $crud->show($_GET["id"]);
                    $Categorias = $crud->readCategoria();                   
                    include "./app/views/update.php";
                    break;
                case 'updateCategoria':
                    $categoria = $crud->showCategoria($_GET["id"]);
                    include "./app/views/updateCategoria.php";
                    break;
                case 'create':
                    $Categorias = $crud->readCategoria();
                    include "./app/views/create.php";
                    break;
                case 'createCategoria':
                    include "./app/views/createCategoria.php";
                    break;
                default:
                    header("location: ./read");
                    break;
            }
        }else{
            header("location: ./home");
        }
    ?>
   

    <?php require './app/views/includes/scripts.php' ?>
</body>
</html>