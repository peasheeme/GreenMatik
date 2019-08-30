<!doctype html>
<html lang="es">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Catálogo | GreenMatik</title>

        <!-- Archivos externos -->
        <?php include 'includes/archivosExternosCabecera.php'; ?>
    </head>

    <body>
        <div id="wraper">

            <!-- header y navbar -->
            <?php include 'includes/header.php'; ?>

            <section id="refacciones">
                <div class="container">
                    <h1 class="titulo-refacciones">Catálogo</h1>
                    <p class="white mt-10 mb-50">Conoce nuestra increíble línea de productos pensada 100% en el mercado
                        Mexicano.

                    </p>
                    <a href="contacto.php"><button class="btn btn-border-white mont">Contáctanos</button></a>
                    <a href="contacto.php"><button class="btn btn-blanco ml-10 mont"><i class="fas fa-download"></i>
                            <strong>Catálogo</strong></button></a>
                </div>
            </section>

            <section class="catalogo">
                <div class="container">
                    <div class="row justify-content-center"></div>
                </div>
            </section>


            <section id="filtro" class="catalogo-filtro">
                <div class="container">
                    <div class="row justify-content-center" style="margin:70px 0;">
                        <div class="category_list">
                            <button category="todos" data-toggle="tooltip" data-placement="top" title="ALL ITEMS"
                                class="btn categoryItem">TODOS</button>
                            <button category="camionesGrandes" data-toggle="tooltip" data-placement="top"
                                title="TÚNEL DE LAVADO" class=" btn categoryItem">TÚNEL DE LAVADO</button>
                            <button category="camionesPeq" data-toggle="tooltip" data-placement="top"
                                title="PUENTE DE LAVADO" class="btn categoryItem">PUENTE DE LAVADO</button>
                            <button category="apu" data-toggle="tooltip" data-placement="top" title="ACCESORIOS"
                                class="btn categoryItem">ACCESORIOS</button>
                            <button category="otros" data-toggle="tooltip" data-placement="top"
                                title="PRODUCTO QUÍMICO CERTIFICADO" class="btn categoryItem">PRODUCTO QUÍMICO
                                CERTIFICADO</button>
                        </div>
                    </div>
                    <div class="row filtr-container text-center">
                        <?php
                            include 'php/catalogo.php';

                            $resultado = Catalogo::getRandom();

                            while($row = $resultado->fetch_assoc()) {
                        ?>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 filtr-item"
                            category="<?php echo $row['categoria']; ?>">
                            <div class="item-catalogo">
                                <a href="producto.php?id=<?php echo $row['id']; ?>"><img
                                        src="data:image/jpg;base64, <?php echo base64_encode($row['img']); ?>"
                                        alt="Producto" class="img-fluid imagenProducto">
                                    <div class="text-item">
                                        <h6 class="nombreProducto mont"><strong><?php echo $row['nombre']; ?></strong>
                                        </h6>
                                        <p class="light">nombre de la categoria</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                            <?php } ?>
                    </div>
            </section>

            <!--footer-->
            <?php include 'includes/footer.php'; ?>

        </div>
    </body>

</html>