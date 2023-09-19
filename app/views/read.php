
<div class="container mt-3">
    <div class="row">
        <div class="col mt-3">
            <table class="table table-hover table-primary table-striped table-responsive table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Categoria</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php
                        foreach ($contactos as $contacto):
                    ?>
                    <tr>
                        <td><?php echo $contacto["nombre"]?></td>
                        <td><?php echo $contacto ["telefono"]?></td>
                        <td><?php echo $contacto["email"]?></td>
                        <td><?php echo $contacto["categoria"] ?></td>
                        <td><a href="./update&id=<?php echo $contacto["id"]?>" class="btn btn-warning">Actualizar</a></td>
                        <td><button data-id="<?php echo $contacto["id"] ?>" class="btn btn-danger eliminar">Eliminar</button></td>
                    </tr>
                    <?php
                        endforeach; 
                    ?>
                </tbody>
            </table>
            <div class="d-grid gap-2 justify-content-md-end">
                <a href="./create" class="btn btn-success">Agregar</a>
                <a href="./readCategoria" class="btn btn-primary">Ver Categoria</a>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controller/delete.controller.php";
?>