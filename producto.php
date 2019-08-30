<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Equipo | GreenMatik</title>

    <!-- Archivos externos -->
    <?php require_once('includes/archivosExternosCabecera.php'); ?>

  </head>
  <body>

    <!-- header y navbar -->
    <?php require_once('includes/header.php'); ?>

    <section class="producto">
        <div class="container">
            <div class="row">
            <?php

                include('php/conexion.php');
                $id=$_REQUEST['id'];

                $query = "SELECT * FROM informacion WHERE id = '$id'";
                $resultado = $conexion->query($query);
                $row = $resultado->fetch_assoc();
            ?>
                <div class="col-xs-12 col-md-6">
                    <div class="row align-center">

                    </div>
                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['img']); ?>" class=" img-product-ocultar" alt="">
                    <h6 class="bule2" style="color: #149447; font-weight:700;">MATIK'S SERIES</h6>
                    <h3 class="blue"><strong><?php echo $row['nombre']; ?></strong></h3>

                        <div class="lista-productos">

                            <?php
                                echo $row['contenido'];
                            ?>

                        </div>
                        <!--Diseñado para ser amigable con el medio ambiente-->

                        <div class="row">
                            <a onclick="history.back();"> <button class="btn btn-productos-claro mont"><h6 ><i class="fas fa-undo"></i> <strong>Regresar</strong></h6></button></a>
                           <a href="contacto.php"> <button class="btn btn-productos btn-productos-oculto mont"  id="prueba"> <strong>Contáctanos</strong></button></a>
                        </div>
                </div>
                <div class="col-xs-12 col-md-6 img-producto">
                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['img']); ?>" class="img-product-mostrar" alt="">
                </div>
            </div>

        </div>
    </section>
    <section class="productos-relacionados">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-md-6 "> <h3 class="blue"><strong>ESPECIFICACIONES TÉCNICAS</strong></h3>
               <div class="services">
               <table class="table services">
  <thead class="thead-light">
    <tr class="align-items-center">
      <th scope="col"></th>
      <th scope="col">EQUIPO</th>
      <th scope="col">TÚNEL DE LAVADO MK5</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>Numero de cepillos</td>
      <td>5</td>

    </tr>
    <tr>
      <th scope="row"></th>
      <td>Área de montaje</td>
      <td>70 M2</td>

    </tr>
    <tr>
      <th scope="row"></th>
      <td>Unidades por hora</td>
      <td>40 -60</td>

    </tr>
  </tbody>
</table>


               </div>
            </div>
                <div class="col-xs-12 col-md-6"> <h3 class="blue"><strong>TE OFRECEMOS LO MEJOR</strong></h3>

                <div class="row text-left services" >
                    <div class="col-xs-12 col-sm-12 col-lg-12  left " >
                       <a href="servicio-asesoria" style="color:black">
                       <div class="media">
                            <img class="mr-3" src="images/icons/catalogo-01.png" alt=" Asesoría  Personalizada de Negocios">
                            <div class="media-body">
                                <h6 class="mt-0 mont"><strong> CALIDAD DE LAVADO</strong></h6>
                                <p class="light mt-0 mont"> CEPILLOS DE FOAMI DE ÚLTIMA GENERACIÓN</p>
                            </div>
                        </div><!--end media-->
                           <p class="gray mt-10">Los cepillos de FOAMI se adaptan al contorno del auto y ofrecen un lavado profundo sin rayones. </p>
                       </a>
                     </div><!--col-end-->

                     <div class="col-xs-12 col-sm-12 col-lg-12  left " >
                       <a href="servicio-asesoria" style="color:black">
                       <div class="media">
                            <img class="mr-3" src="images/icons/catalogo-02.png" alt=" Asesoría  Personalizada de Negocios">
                            <div class="media-body">
                                <h6 class="mt-0 mont"><strong> SECADO EFICIENTE</strong></h6>
                                <p class="light mt-0 mont"> POTENTES TURBO VENTILADORES DE 5.5 KW</p>
                            </div>
                        </div><!--end media-->
                           <p class="gray mt-10">Los turbo ventiladores trabajan a bajas revoluciones y un alto caudal de aire lo que mejora su rendimiento. La tobera horizontal móvil con su particular diseño 3D ofrece una eficiencia de secado excepcional en cualquier tipo de vehículo.</p>
                       </a>
                     </div><!--col-end-->

                     <div class="col-xs-12 col-sm-12 col-lg-12  left " >
                       <a href="servicio-asesoria" style="color:black">
                       <div class="media">
                            <img class="mr-3" src="images/icons/catalogo-03.png" alt=" Asesoría  Personalizada de Negocios">
                            <div class="media-body">
                                <h6 class="mt-0 mont"><strong> BRILLO DESLUMBRANTE</strong></h6>
                                <p class="light mt-0 mont"> EXCLUSIVO MÓDULO AUTO POLISH SYSTEM (APS)</p>
                            </div>
                        </div><!--end media-->
                           <p class="gray mt-10">Compuesto por 3 cepillos de tela absorbente, optimiza la acción de la cera aplicada tras el ciclo de aclarado, optimiza el secado y ofrece un brillo deslumbrante de forma totalmente automatizada. </p>
                       </a>
                     </div><!--col-end-->
                     <div class="col-xs-12 col-sm-12 col-lg-12  left " >
                       <a href="servicio-asesoria" style="color:black">
                       <div class="media">
                            <img class="mr-3" src="images/icons/catalogo-04.png" alt=" Asesoría  Personalizada de Negocios">
                            <div class="media-body">
                                <h6 class="mt-0 mont"><strong> CERRAMIENTO INCLUIDO</strong></h6>
                                <p class="light mt-0 mont"> LA SERIE MATIK’S INCLUYE EL CERRAMIENTO DEL TÚNEL</p>
                            </div>
                        </div><!--end media-->
                           <p class="gray mt-10">Todos los modelos de túnel de lavado incluyen la estructura de acero galvanizado del cerramiento, las cubiertas superiores y laterales que pueden ser de cristal, policarbonato o PVC se cotizan aparte. </p>
                       </a>
                     </div><!--col-end--> <div class="col-xs-12 col-sm-12 col-lg-12  left " >
                       <a href="servicio-asesoria" style="color:black">
                       <div class="media">
                            <img class="mr-3" src="images/icons/catalogo-05.png" alt=" Asesoría  Personalizada de Negocios">
                            <div class="media-body">
                                <h6 class="mt-0 mont"><strong> PERSONALIZA TU EQUIPO</strong></h6>
                                <p class="light mt-0 mont"> TÚ DESIDES CÓMO QUIERES QUE SEA TU EQUIPO</p>
                            </div>
                        </div><!--end media-->
                           <p class="gray mt-10">Personaliza tu equipo con los diferentes colores, pictogramas, configuraciones y operaciones para hacer único y exclusivo el equipo de autolavado. </p>
                       </a>
                     </div><!--col-end-->
                     <div class="col-xs-12 col-sm-12 col-lg-12  left " >
                       <a href="servicio-asesoria" style="color:black">
                       <div class="media">
                            <img class="mr-3" src="images/icons/catalogo-06.png" alt=" Asesoría  Personalizada de Negocios">
                            <div class="media-body">
                                <h6 class="mt-0 mont"><strong> AHORRO DE AGUA</strong></h6>
                                <p class="light mt-0 mont"> PUEDES RECICLAR HASTA 95% DE AGUA UTILIZADA</p>
                            </div>
                        </div><!--end media-->
                           <p class="gray mt-10">Instalando un reciclador de agua GreenMatik se puede llegar a reciclar hasta el 90% del agua utilizada en los procesos de lavado, optimizando costes y reduciendo de forma significativa el impacto de la huella hídrica. </p>
                       </a>
                     </div><!--col-end-->



                </div><!--end row-->
            </div>
            </div>
        </div>
    </section>


    <section class="productos-relacionados">
        <div class="container">
                <h3 class="blue"><strong>OTROS PRODUCTOS RELACIONADOS</strong></h3>
                <div class="row">
                <?php
                    $query = "SELECT * FROM informacion ORDER BY RAND() LIMIT 0,3";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()):
                ?>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="item-catalogo">
                            <a href="producto.php?id=<?php echo $row['id']; ?>">
                                <img src="data:image/jpg;base64, <?php echo base64_encode($row['img']); ?>" alt="" class="img-fluid imagenProducto">
                                <div class="text-item">
                                    <h6 class="nombreProducto"><?php echo $row['nombre']; ?></h6>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                    endwhile;
                ?>
                </div>
        </div>
    </section>

    <!--footer-->
    <?php require_once('includes/footer.php'); ?>
  </body>
</html>