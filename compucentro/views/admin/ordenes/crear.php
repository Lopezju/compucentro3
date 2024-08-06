<h2 class="dashboard__heading"><?php echo $titulo ?></h2>

<div  class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/ordenes">
        <i class="fa-solid fa-circle-plus">
            volver
        </i>
    </a>
</div>

<div class="dashboard__formulario">
    <?php 
       include_once __DIR__ . './../../templates/alertas.php'
    ?>

    <form method="POST" enctype="multipart/form-data"  class="formulario" action="/admin/ordenes/crear">
    <?php 
       include_once __DIR__ . './../../admin/ordenes/formulario.php'
    ?>
       <input type="submit" value="Registrar Orden">
    </form>
</div>