<h1 class="nombre-pagina">Olvidaste tu Password</h1>

<p class="descripcion-pagina">Restablece tu password</p>

<?php include_once __DIR__ . '/../templates/alertas.php' ?>

<form action="/olvide" class="formulario" method="POST">

<div class="campo">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Tu Email">
</div>

<input type="submit" value="Recuperar Contraseña" class="boton">

</form>

<div class="acciones">
    <a href="/">Ya tienes una cuenta ? Inicia Sesión</a>
    <a href="/crear-cuenta">Crear una Cuenta</a>
</div>