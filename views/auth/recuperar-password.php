<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Escribe tu nuevo password a continuación</p>

<?php include_once __DIR__ . '/../templates/alertas.php' ?>

<?php if ($error) return ?>

<form class="formulario" method="POST">

    <div class="campo">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Tu nuevo password">
    </div>

    <div class="campo">
        <label for="passwordconf">Confirmar Password</label>
        <input type="password" name="passwordconf" id="passwordconf" placeholder="Confirma tu nuevo password">
    </div>

    <input class="boton" type="submit" value="Guardar Nuevo Password">

</form>

<div class="acciones">
    <a href="/">Ya tienes una cuenta ? Inicia Sesión</a>
    <a href="/crear-cuenta">Crear una cuenta</a>
</div>