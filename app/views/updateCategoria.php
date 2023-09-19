<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar Categoria</h1>
            <div>
            <input type="text" class="form-control" id="id" value="<?php echo $categoria['id_categoria'] ?>" name="id" hidden>
                <div class="mb-3">
                    <label for="">Categoria</label>
                    <input type="text" class="form-control" value="<?php echo $categoria['categoria']?>" id="categoria" name="categoria">
                </div>
                
                <button id="actualizar" class="btn btn-success">Actualizar</button>
                <a  class="btn btn-primary" href="./readCategoria">Regresar</a>
            </div>
        </div>
    </div>
</div>
<?php
    require "./app/controller/updateCategoria.controller.php";
?>