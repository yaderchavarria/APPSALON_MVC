<h1 class="nombre-pagina">Actualizar Servicios</h1>
<p class="descripcion-pagina">Actualizar datos de los servicios</p>

<?php include_once __DIR__ . '/../templates/barra.php';
      include_once __DIR__ . '/../templates/alertas.php';
?>


<form  class="formulario" method="POST">

<?php include_once __DIR__ . '/formulario.php'; ?>

<input type="submit" value="Actualizar" class="boton">
</form>