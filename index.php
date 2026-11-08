<?php  include("cabecera.php"); ?>
<?php  include("conexion.php"); ?>
<?php
$objConexion=new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");

?>
<style>
    .portfolio-hero {
        position: relative;
        isolation: isolate;
        overflow: hidden;
        padding: clamp(3rem, 8vw, 6rem);
        border-radius: 1.5rem;
        color: #f8fafc;
        background:
            radial-gradient(ellipse at 85% 20%, rgba(56, 189, 248, .28), transparent 35%),
            radial-gradient(ellipse at 15% 100%, rgba(129, 140, 248, .24), transparent 40%),
            linear-gradient(120deg, #0f172a, #172554 60%, #164e63);
    }

    .portfolio-hero::after {
        position: absolute;
        z-index: -1;
        top: -5rem;
        right: -4rem;
        width: 18rem;
        height: 18rem;
        border: 1px solid rgba(255, 255, 255, .16);
        border-radius: 50%;
        box-shadow: 0 0 0 2rem rgba(255, 255, 255, .035), 0 0 0 4rem rgba(255, 255, 255, .025);
        content: "";
    }

    .portfolio-hero .eyebrow {
        color: #7dd3fc;
        font-size: .8rem;
        font-weight: 700;
        letter-spacing: .16em;
        text-transform: uppercase;
    }
</style>

<section class="portfolio-hero my-4">
    <div class="position-relative">
        <p class="eyebrow mb-3">Portafolio</p>
        <h1 class="display-3 fw-bold">Ideas que se convierten en proyectos</h1>
        <p class="lead mt-3 mb-4 text-white-50">Conoce una selección de trabajos, propuestas y soluciones.</p>
</section>


<div class="container" id="proyectos">
<div class="row row-cols-1 row-cols-md-3 g-4">

 <?php foreach($proyectos as $proyecto){ ?>

    <div class="col">
    <div class="card">
      <img src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="<?php echo $proyecto['nombre']; ?>" style="height: 220px; object-fit: cover;">
      <div class="card-body">
        <h4 class="card-title"><?php echo $proyecto['nombre']; ?></h4>
        <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
      </div>
      </div>
    </div>

 <?php } ?>
    
    


  
</div>
</div>
     
    

   <?php  include("pie.php"); ?>
