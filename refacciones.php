<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Refacciones | GreenMatik</title>
    <!-- Archivos externos -->
    <?php require_once('includes/archivosExternosCabecera.php'); ?>
  </head>
  <body>

    <!-- header y navbar -->
    <?php require_once('includes/header.php'); ?>
        

    <section id="refacciones">
           <div class="container">
                <h1 class="titulo-refacciones">Refacciones</h1>
                
<p class="white mt-10 mb-50">Nos interesa que tu negocio funcione al 100% es por ello que <br>
contamos con entrega inmediata en refacciones.</p>
                 
                    <div>
                    <a href="catalogo.php"><button class="btn btn-border-white mont">Ver Catálogo</button></a>
             <a href="contacto.php"><button class="btn btn-blanco ml-10 mont"><strong>Contáctanos</strong></button></a>
                    </div>
           </div>

    </section>

    <section class="producto">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6">
                                         
                        <h3 class="blue2"><strong>Entrega inmediata, listo para atender cualquier necesidad tanto para equipo GreenMatik como para otras Marcas.</strong></h3> <br>
                        <h4><strong>Envíos a todo México</strong></h4> <br>

                        
                        <p class="gray mont"> Contamos con las refacciones necesarias para que tu equipo GreenMatik nunca deje de funcionar. Solicítalo con tu vendedor o contáctanos aquí para la cotización y entrega de cualquier refaccion que necesites. </p>
               
                        <div class="row">
                            <a href="contacto.php" ><button class="btn btn-ver-catalogo-refacciones mont">Contáctanos</button> </a>
                        </div>
                </div>
                <div class="col-xs-12 col-lg-6 img-refaccion text-center">
                        <div id="owl-refacciones" class="owl-carousel wow ">
                            <?php
                                include('php/conexion.php');
                                
                                $query3 = "SELECT * FROM informacion where categoria ='otros' ";
                                $resultado = $conexion->query($query3);
                                while($row = $resultado->fetch_assoc()):                                
                            ?>
                                <div class="owl-item">
                                    <div class="item-catalogo"> 
                                        <a href="producto.php?id=<?php echo $row['id']; ?>">
                                        <img src="data:image/jpg;base64, <?php echo base64_encode($row['img']); ?>" alt="Productos" class="img-fluid">
                                            <div class="text-item">
                                            <h6 class="nombreProducto mont"><strong><?php echo $row['nombre']; ?></strong></h6>
                                            </div> 
                                        </a>
                                    </div>                                    
                                </div>
                            <?php
                                endwhile;
                            ?>
                                 
                        </div>
                </div>

            </div>
        </div>
    </section>

        <!--footer-->
        <?php require_once('includes/footer.php'); ?>
 