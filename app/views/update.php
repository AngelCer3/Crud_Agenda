<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar contacto</h1>
            <div>
                <div class="mb-3">
                    <input type="text" name="id" id="id" value="<?php echo $contacto["id"]?>" hidden>
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $contacto["nombre"] ?>">
                </div>
                <div class="mb-3">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $contacto["telefono"]?>">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email"  class="form-control" name="email" id="email" value="<?php echo $contacto["email"] ?>">
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
                <button id="actualiza" class="btn btn-success">Actualizar</button>
                <a  class="btn btn-primary" href="./read">Regresar</a>
            </div>
        </div>
    </div>
</div>

<?php require "./app/controller/update.controller.php"?>