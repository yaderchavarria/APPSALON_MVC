<h1 class="nombre-pagina">Login</h1>

<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php include_once __DIR__ . '/../templates/alertas.php' ?>

<form action="/" class="formulario" method="POST">

    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email">
    </div>

    <div class="campo">
        <label for="password">Password</label>

        <input class="input-password" type="password" name="password" id="password" placeholder="Tu Password">
    </div>

    <input type="submit" value="Iniciar Sesión" class="boton">

</form>

<div class="acciones">
    <a href="/crear-cuenta">Crear una cuenta</a>
    <a href="/olvide">Olvidaste tu password ?</a>
</div>