<h1 class="nombre-pagina">Crea tu cita</h1>
<p class="descripcion-pagina">Elige el servicio que deseas agendar</p>

<?php include_once __DIR__ . '/../templates/barra.php' ?>

<div id="app">

    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Información Cita</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>


    <div id="paso-1" class="seccion">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>
    <div id="paso-2" class="seccion">
        <h2>Tus datos y cita</h2>
        <p class="text-center">Coloca tus datos y fecha de tu cita</p>

    <div class="cita-alerta"></div>

        <form action="" class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input disabled type="text" name="" id="nombre" placeholder="Tu nombre" value="<?php echo $nombre; ?>">
                
            </div>

            <div class="campo">
                <label for="fecha">Fecha</label>
                <input type="date" name="" id="fecha" min="<?php echo date('Y-m-d', strtotime('+ 1 day')) ?>">
            </div>

            <div class="campo">
                <label for="hora">Hora</label>
                <input type="time" name="" id="hora">
            </div>

            <input type="hidden" id="id" value="<?php echo $id; ?>">
        </form>
    </div>
    <div id="paso-3" class="seccion contenido-resumen">
        <h2>Resumen</h2>
        <p class="text-center">Verifica que la información sea correcta</p>
    </div>

    <div class="paginacion">
        <button id="anterior" class="boton">&laquo; Anterior</button>
        <button id="siguiente" class="boton">Siguiente &raquo;</button>
    </div>

</div>

<?php 
echo $script = "
<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<script src='build/js/app.js'></script>" 

?>