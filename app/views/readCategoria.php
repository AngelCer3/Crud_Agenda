
<div class="container mt-3">
    <div class="row">
        <div class="col mt-3">
            <table class="table table-hover table-primary table-striped table-responsive table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php
                        foreach ($Categorias as $categoria):
                    ?>
                    <tr>
                        <td><?php echo $categoria["categoria"] ?></td>
                        <td><a href="./updateCategoria&id=<?php echo $categoria["id_categoria"]?>" class="btn btn-warning">Actualizar</a></td>
                        <td><button data-id="<?php echo $categoria["id_categoria"] ?>" class="btn btn-danger eliminar">Eliminar</button></td>
                    </tr>
                    <?php
                        endforeach; 
                    ?>
                </tbody>
            </table>
            <div class="d-grid gap-2 justify-content-md-end">
                <a href="./createCategoria" class="btn btn-success">Agregar Categoria</a>
                <a href="./read" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controller/deleteCategoria.controller.php";
?>