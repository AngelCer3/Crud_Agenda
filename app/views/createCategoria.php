<div class="container">
    <div class="row">
        <div class="col">
            <h1>Crear Categoria</h1>
            <div>
                <div class="mb-3">
                    <label for="">Categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria">
                </div>
                
                <button id="crear" class="btn btn-success">Crear</button>
                <a  class="btn btn-primary" href="./readCategoria">Regresar</a>
            </div>
        </div>
    </div>
</div>
<?php
    require "./app/controller/createCategoria.controller.php";
?>