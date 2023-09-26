<div class="container">
    <div class="row">
        <div class="col">
            <h1>Registrar Usuario</h1>
            <div>
                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa tu nombre"> 
                </div>
                <div class="mb-3">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingresa tu apellido">
                </div>
                <div class="mb-3">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingresa tu numero de telefono">
                </div>
                <div class="mb-3">
                    <label for="email">Correo Electronico</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Ingresa tu correo electronico">
                </div>
                <div class="mb-3">
                    <label for="contrasena">Contraseña</label>
                    <input type="text" name="contrasena" id="contrasena" class="form-control" placeholder="Ingresa una contraseña">
                </div>

                <button class="btn btn-primary" id="crearUsuario">Crear Usuario</button>
                <a href="./home" class="btn btn-dark">Regresar</a>
            </div>
        </div>
    </div>
</div>

<?php require "./app/controller/registre.controller.php" ?>