<div class="container">
    <div class="row">
        <div class="col">
            <h1>Crear contacto</h1>
            <div>
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email"  class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="">Categorias</label>
                    <select name="categoria" id="categoria" class="form-control">
                        <option value="">Seleccione una categoria</option>
                        <?php 
                            foreach ($Categorias as $categoria): 
                            $selected = ($categoria['id_categoria'] == $contacto['id_categoria']) ? 'selected' : '';
                        ?>
                         <option value="<?php echo $categoria['id_categoria']; ?>" <?php echo $selected; ?>><?php echo $categoria['categoria']; ?></option>
                        <?php 
                            endforeach; 
                        ?>
                    </select>
                </div>
                <button id="crear" class="btn btn-success">Crear</button>
                <a  class="btn btn-primary" href="./read">Regresar</a>
            </div>
        </div>
    </div>
</div>

<?php require "./app/controller/create.controller.php"?>