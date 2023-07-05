<!-- se almacenan las credenciales y se enviar por metodo post al controlador de validar credenciales -->

<div class="container.fluid">
    <form class="mx-auto" action="controlador/validar_credenciales.php" method="post">
        <h2 class="text-center">Consultorio Medico</h2>
        <div class="mb-3 mt-5">
            <label for="exampleInputEmail1" class="form-label">Nombre Usuario</label>
            <input name="user" class="form-control" placeholder="Ingrese Usuario" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input name="pass" type="password" class="form-control" placeholder="Ingrese Contraseña" required>
            <div id="recuperarCtñ" class="form-text">Olvide la contraseña</div>
        </div>
        <button type="submit" class="btn btn-primary mt-4">INGRESAR</button>
    </form>
</div>
