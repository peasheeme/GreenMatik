<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CONTACTO | FRIOCONTROL - DISTRIBUIDOR AUTORIZADO THERMOKING</title>
    <link rel="shortcut icon" type="image/png" href="images/icons/fav.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.theme.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/hamburgers.css">
     <link rel="stylesheet" href="css/style.css">
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  </head>
  <body>

      <nav class="navbar ">
          <a class="navbar-brand" href="">
            <img src="images/brand.png"  class="d-inline-block align-top" alt="">
           
          </a>

          <ul class="nav justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link active" href="#"> <i class="far fa-clock"></i> <span class="header-oculto">SERVICIO 24 HORAS</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="tel:018006394040"><i class="fas fa-phone"></i> <span class="header-oculto">01 800 639 4040</span> </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-envelope"></i> <span class="header-oculto">CORREO INTERNO</span></a>
                  </li>
                 
                  
                </ul>
        </nav>

        <header>    
            <input type="checkbox" id="btn-menu">
            <label for="btn-menu" class="hamburger hamburger--emphatic-r">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </label>
          
            <nav class="menu-responsive navbar justify-content-end bg-blue">
                <ul class="nav justify-content-end">
                        <li class="nav-item">
                          <a class="nav-link activo barra" href="index.html">INICIO</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link barra" href="#servicios">SERVICIOS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link barra" href="catalogo.html">CATÁLOGO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link barra" href="refacciones.html">REFACCIONES</a>
                       </li>
                        <li class="nav-item">
                             <a class="nav-link barra" href="contacto.php">CONTACTO</a>
                         </li>
                </ul>
            </nav>
        </header>

                 

    <!--<section id="contacto">
          
                    <div class=" row justify-content-end"><h1 class="titulo-sucursales">AMPLIA ZONA DE  <BR>COBERTURA EN MÉXICO</h1></div>
                   <div class=" row justify-content-end">
                     <button class="btn-sucursales ">LLÁMANOS</button>
                     </div>
        

    </section>-->
    <section id="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner">
              
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/bg2.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                        <h1>AMPLIA ZONA DE  <BR>COBERTURA EN MÉXICO</h1>
                        <div>
                           <a href="tel:018006394040"><button class="btn-1">LLÁMANOS</button></a> 
                        </div>
                       
                      </div>
              </div>
          </div>
        </div>
    </section>
    
    <section class="sucursales" id="Contacto">
        <div class="container">
                <br>
                <h3 class="blue2"><strong>CONTÁCTANOS</strong></h3> <div id="mensajeCampos" class="errores">Todos los campos son requeridos</div>  <BR>
            <div class="row">
                    <div class="col-xs-12 col-md-6">
                       
                            <form action="mail/enviar.php" id="contact-form" method="post" role="form">
                                <div class="ajax-hidden">
                                    <?php                                          
                                        if(isset($_GET['error'])):
                                            echo '<p style="color:red;">'.$_GET['error'].'</p>';
                                        endif;
                                    ?>
                                    <div class="form-group">
                                       <label class="sr-only" for="c_name">Nombre</label>
                                       <input type="text" id="c_name" class="form-control" name="nombre" placeholder="Nombre" onkeypress="return validarLetras(event);">
                                       <div id="mensaje1" class="errores">Ingresa tu nombre</div>
                                   </div>
                                   
                                   <div class="form-group">
                                        <label class="sr-only" for="c_phone">Teléfono </label>
                                        <input type="tel" id="c_phone" class="form-control" name="telefono" placeholder="Teléfono" onkeypress="return validarNumeros(event);">
                                        <div id="mensaje2" class="errores">Ingresa un télefono válido</div>
                                    </div>
                                   <div class="form-group">
                                        <label class="sr-only" for="c_email">E-mail </label>
                                       <input type="email" id="c_email" class="form-control" name="email" placeholder="E-mail">
                                       <div id="mensaje3" class="errores">Ingresa tu e-mail</div>
                                   </div>
                                   <div class="form-group">
                                        <label class="sr-only" for="c_name">Estado</label>
                                        <input type="text" id="c_estado" class="form-control" name="estado" placeholder="Estado" onkeypress="return validarLetras(event);">
                                        <div id="mensaje4" class="errores">Ingresa el estado</div>
                                    </div>
                                   <div class="form-group">
                                       <label class="sr-only" for="c_name">Ciudad</label>
                                       <input type="text" id="c_ciudad" class="form-control" name="ciudad" placeholder="Ciudad" onkeypress="return validarLetras(event);">
                                       <div id="mensaje5" class="errores">Ingresa tu ciudad</div>
                                   </div>
                                   
                                   <div class="form-group">
                                       <textarea class="form-control" id="c_message" name="mensaje" rows="7" placeholder="Mensaje"></textarea>
                                       <div id="mensaje6" class="errores">Ingresa un mensaje</div>
                                   </div>
                                   <div class="form-check ">
                                        <input class="form-check-input" name="terminos" type="checkbox" value="" id="c_terminos">
                                          <label class="form-check-label" for="defaultCheck1">
                                               <a class="aviso2" href="aviso-privacidad.html" target="_blank" >Acepto términos de privacidad</a>
                                            </label>
                                            <div id="mensaje7" class="errores">Debes aceptar los términos y condiciones</div>
                                    </div>
                                   <input type="submit" id="btnEnviar" value="ENVIAR" name="enviar" class="btn-enviar">
                                      
                               </div>
                               <div class="ajax-response"></div>
                            </form>
                    </div>
                    <div class="col-xs-12 col-md-6 mapa-oculto" id="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.927275592708!2d-100.24018508452129!3d25.706831783661695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eac1d343fecd%3A0x4e6e489ff6e132ad!2sAv.+3+675%2C+Central+de+Carga%2C+67129+Guadalupe%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1543525857495" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

            </div>
            <div class="row">
                <div class="col-xs-12  col-lg-12"> <br><br>
                        <h3  id="sucursales" class="blue2"><strong>SUCURSALES</strong></h3> 
                    <div class="row">
                     <div class="col-xs-12 col-sm-6 col-lg-4">
                        <h5 class="blue padding-superior"><strong>Frio Control Nuevo Leon</strong></h5>
                        <div class="media">
                            <img class="mr-3" src="images/icons/ubicacion.png" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">MONTERREY <span class="badge badge-dark">Matriz</span></h5>
                                 <p class="contacto-text">Ave. Tres #675 <br> Col. Central de Carga C.P. 67129  <br>  Guadalupe, N.L.
                                    <a href="#" data-toggle="modal" data-target=".MapaMatriz"> <u>Ver mapa</u> </a></p> 
                                
                             </div>
                        </div>
                        <div class="media ">
                            <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
                             <div class="media-body">
                                 <h6 class="mt-0">Telefono </h6> <a class="contacto-tel" href="tel:8183945555"> (81) 8394-5555</a></div>
                             </div>
                         <div class="media padding-superior-tel">
                            <img class="mr-3" src="images/icons/cel.png" alt="Generic placeholder image">
                                <div class="media-body">
                                     <h6 class="mt-0">Emergencias </h6><a class="contacto-tel"  href="tel:8118165586">(81) 1816 5586 </a></div>
                                </div>
                         <div class="media">
                            <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
                                <div class="media-body"><h6 class="mt-0">Contacto 24 horas </h6> 
                                    <a class="contacto-tel"  href="tel:018006394040">01-800 639 4040</a> </div>
                         </div>
                      </div> 

                    <div class="col-xs-12 col-sm-6  col-lg-4">
                        <h5 class="blue padding-superior"><strong>Frio Control Nuevo Leon</strong></h5>
                        <div class="media">
                            <img class="mr-3" src="images/icons/ubicacion.png" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0">GUADALUPE </h5>
                                    <p class="contacto-text"> Ave Uno #160 <br> Col. Central de Carga,  <br> Guadalupe, N.L. 
                                    <a href="#" data-toggle="modal" data-target=".MapaGuadalupe"> <u>Ver mapa</u> </a></p>
                                </div>
                         </div> 
                         <div class="media ">
                                <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
                                 <div class="media-body">
                                     <h6 class="mt-0">Telefono </h6> <a class="contacto-tel" href="tel:8183347766">(81) 8334 7766</a><br>
                                     <a class="contacto-tel"  href="tel:818394-5570">(81) 8394 5570</a></div>
                                    </div> 
                                 
                                 
                             
                               
                             <div class="media padding-superior-tel">
                                <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
                                    <div class="media-body"><h6 class="mt-0">Contacto 24 horas </h6> 
                                        <a class="contacto-tel"  href="tel:018006394040">01-800 639 4040</a> </div>
                             </div>
                         
                            </div>
                      
                      <div class="col-xs-12 col-sm-6  col-lg-4">
                          <h5 class="blue padding-superior"><strong>Frio control Aguascalientes</strong></h5>
                            <div class="media">
                                <img class="mr-3" src="images/icons/ubicacion.png" alt="Generic placeholder image">
                                <div class="media-body">
                                 <h5 class="mt-0">AGUASCALIENTES </h5>
                                 <p class="contacto-text"> Carretera Panamericana Km. 115+500, <br> Entronque a Montoro, C.P. 20392,  <br> Aguascalientes, Aguascalientes.
                                    <a href="#" data-toggle="modal" data-target=".MapaAguascalientes"> <u>Ver mapa</u> </a></p>
                                 </div>
                            </div>
                            <div class="media ">
                                    <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
                                     <div class="media-body">
                                         <h6 class="mt-0">Telefono </h6> <a class="contacto-tel" href="tel:4499295555"> (449) 929 5555</a></div>
                                     </div>
                                 <div class="media padding-superior-tel">
                                    <img class="mr-3" src="images/icons/cel.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                             <h6 class="mt-0">Emergencias </h6><a class="contacto-tel"  href="tel:8118165586
                                             ">(81) 1816 5586
                                                </a></div>
                                        </div>
                                 <div class="media">
                                    <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
                                        <div class="media-body"><h6 class="mt-0">Contacto 24 horas </h6> 
                                            <a class="contacto-tel"  href="tel:018006394040">01-800 639 4040</a> </div>
                                 </div>
                             
                      </div>   
                      <div class="col-xs-12  col-sm-6  col-lg-4">
                          <h5 class="blue padding-superior"><strong>Frio Control Leon Bajío</strong></h5>
                            <div class="media">
                                    <img class="mr-3" src="images/icons/ubicacion.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                      <h5 class="mt-0">SILAO, GUANAJUATO </h5>
                                     <p class="contacto-text"> Carretera Federal 45, <br> Tramo Silao-León km 158+860,<br> Fraccionamiento.  Granjas Campestres,  <br> San Antonio, Silao Guanajuato.
                                        <a href="#" data-toggle="modal" data-target=".MapaLeon"> <u>Ver mapa</u> </a></p>
                                      </div>
                            </div>
                            <div class="media ">
                                    <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
                                     <div class="media-body">
                                         <h6 class="mt-0">Telefono </h6> <a class="contacto-tel" href="tel:4774920960"> (477) 492 0960</a></div>
                                     </div>
                                 <div class="media padding-superior-tel">
                                    <img class="mr-3" src="images/icons/cel.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                             <h6 class="mt-0">Emergencias </h6><a class="contacto-tel"  href="tel:8119395262">(81) 1939 5262
                                                </a></div>
                                        </div>
                                 <div class="media">
                                    <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
                                        <div class="media-body"><h6 class="mt-0">Contacto 24 horas </h6> 
                                            <a class="contacto-tel"  href="tel:018006394040">01-800 639 4040</a> </div>
                                 </div>

                            
                      </div> 
                      <div class="col-xs-12 col-sm-6  col-lg-4">
                          <h5 class="blue padding-superior"> <strong>Frio Control Tijuana</strong></h5>
                            <div class="media">
                                    <img class="mr-3" src="images/icons/ubicacion.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                      <h5 class="mt-0">Tijuana, Baja California </h5>
                                      <p class="contacto-text"> Carretera aeropuerto 1007 A 6, Blvd. <br> Bellas Artes, Otay,  <br>   Tijuana Baja California <br>
                                      C.P. 22435 <a href="#" data-toggle="modal" data-target=".MapaTijuana"> <u>Ver mapa</u> </a></p>   
                            </div>
                            
                        </div>
                        <div class="media ">
                                <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
                                 <div class="media-body">
                                     <h6 class="mt-0">Telefono </h6> <a class="contacto-tel" href="tel:6646478269"> (664) 647 8269</a></div>
                                 </div>
                             <div class="media padding-superior-tel">
                                <img class="mr-3" src="images/icons/cel.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                         <h6 class="mt-0">Emergencias </h6><a class="contacto-tel"  href="tel:6642044904">(664) 204 4904 </a></div>
                                    </div>
                                         
                      </div> 
                      <div class="col-xs-12 col-sm-6  col-lg-4">
                          <h5 class="blue padding-superior"><strong>Frio Control Ensenada</strong></h5>
                            <div class="media">
                                    <img class="mr-3" src="images/icons/ubicacion.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                      <h5 class="mt-0">Ensenada, Baja california</h5>
                                      <p class="contacto-text"> Avenida Miramar No. 832, <br> Entre calle 8 y 9 Col. Zona Centro,  <br> Ensenada Baja California. <br>   C.P: 22800.
                                        <a href="#" data-toggle="modal" data-target=".MapaEnsenada"> <u>Ver mapa</u> </a></p>
                                    </div>
                            </div>
                            <div class="media ">
                                    <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
                                     <div class="media-body">
                                         <h6 class="mt-0">Telefono </h6> <a class="contacto-tel" href="tel:6461770515"> (646) 177 0515</a></div>
                                     </div>
                                 <div class="media padding-superior-tel">
                                    <img class="mr-3" src="images/icons/cel.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                             <h6 class="mt-0">Emergencias </h6><a class="contacto-tel"  href="tel:6461424073
                                             "> (646) 142 4073</a></div>
                                        </div>
                               
                      </div>
                       
                  </div>
                </div>
               
               
        </div>
  </section>
    <section class="mostrar-mapa oculto" >
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.927275592708!2d-100.24018508452133!3d25.7068317836617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eac1d343fecd%3A0x4e6e489ff6e132ad!2sAv.+3+675%2C+Central+de+Carga%2C+67129+Guadalupe%2C+N.L.!5e0!3m2!1ses!2smx!4v1545148032696" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <footer class="footer">
        <div class="container">
                <div class="row ">
                        <div class="col-xs-123 col-sm-12 col-lg-6">
                            <h2 class="footer"> <strong>FRIO CONTROL</strong> </h2>
                            <P>Somos representantes de <strong>THERMO KING CORPORATION,</strong>  líder mundial en refrigeración para el transporte con la tecnología más avanzadas para proteger sus productos sensibles a la temperatura.</P>
                       <p class="copy copy-oculto"><a class="footer-link" href="aviso-privacidad.html">Aviso de Privacidad </a> <br> Copyright © Frio Control 2018, Todos los derechos reservados. <br>
                          <a  class="footer-link " href="https://kalamedia.mx/"  target="_blank"> Sitio web diseñado por <img src="images/icons/kala.png" width="90px;"  alt="kalamedia"> </a>

                       </p>
                        </div>
                        <div class="col-6 col-sm-6 col-lg-3">
                            <h5 style=" color: #9ACAEB;">CONTÁCTANOS</h5>
                            <a class="footer-link" > <i class="fas fa-phone dos"></i> <span style="font-family: 'Raleway', sans-serif;"><strong>TELEFONOS</strong> </span> </a> <br>
                             <a  class="mostrar margen-movil" href="tel:018006394040"><span class="sucursales-footer">018006394040</span> </a> <br>
                            <a  class="mostrar margen-movil" href="tel:8183945555"> <span class="sucursales-footer">(81) 8394 5555</span> </a><br>
                            <a class="footer-link" >  <i class="fas fa-envelope dos"></i> <span style="font-family: 'Raleway', sans-serif;"><strong>E-MAIL</strong> </span> </a> <br>
                            <a class="mostrar footer-link" href="mailto:mail@friocontrol.com"> <span class="sucursales-footer">mail@friocontrol.com</span> </a> <br>
                            <a class="footer-link" > <i class="fas fa-map-marker-alt dos"></i> <strong>SUCURSALES</strong></a> <br>
                             <a class="footer-link" href="contacto.html#sucursales"> <span class="sucursales-footer">Monterrey</span> </a> <br>
                             <a class="footer-link" href="contacto.html#sucursales">  <span class="sucursales-footer">Aguascalientes</span></a><br>
                             <a class="footer-link" href="contacto.html#sucursales"> <span class="sucursales-footer">Leon Bajío</span> </a><br>
                             <a class="footer-link" href="contacto.html#sucursales">  <span class="sucursales-footer">Tijuana</span></a><br>
                             <a class="footer-link" href="contacto.html#sucursales">  <span class="sucursales-footer">Ensenada</span></a>
                             
                            <a class="oculto link" href="tel:">
                            <i class="fas fa-phone dos"></i> </a>
                             <br>
                             <a class="oculto link" href="mailto:info@tanquesilumex.com"> <i class="fas fa-envelope dos"></i>  info@tanquesilumex.com </a><br> <br>
                            
                         </div>

                        <div class="col-6 col-sm-6 col-lg-3 ">
                                <h5 style=" color: #9ACAEB;">FRIO CONTROL</h5>
                                <a class="footer-link activo" href="index.html"><span >INICIO</span></a> <br>
      						<a class="footer-link" href="index.html#SERVICIOS"><span >SERVICIOS </span></a> <br>
      						<a class="footer-link" href="portafolio.html"><span>CATÁLOGO DE PRODUCTOS</span></a><br>
      						<a class="footer-link" href="catalogo.html"><span>REFACCIONES</span></a><br>
                              <a class="footer-link" href="contacto.html"><span>CONTACTO</span></a> 
                              <h6 class=" margen-movil2  "><strong>SÍGUENOS</strong></h6>
                              <a  class="mostrar footer-link" href="https://www.facebook.com/FrioControlMx/" target="_blank"> <i class="fab fa-facebook-f dos  "> </i> @friocontrol </a>
                              <h6 class="oculto margen-movil2  "><strong>SÍGUENOS</strong></h6>
      							<a class="oculto link" href="https://www.facebook.com/FrioControlMx/" target="_blank"> <i class="fab fa-facebook-f dos"></i> @friocontrol </a>  
                        </div>

                       
                    </div>
                    
            <p class=" copy-mostrar"> <br> Copyright © Frio Control 2018, Todos los derechos reservados. <br><a class="footer-link" href="aviso-privacidad.html">Aviso de Privacidad </a>  | 
                <a  class="footer-link " href="https://kalamedia.mx/"  target="_blank"> Sitio web diseñado por <img src="images/icons/kala.png" width="90px;"  alt="kalamedia"> </a>

             </p>
        </div>
        
            </footer>


    

        <div class="modal fade MapaGuadalupe" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
                <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Frio Control Nuevo Leon, Guadalupe. Sucursal Linda vista.</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.987032078217!2d-100.23791118452138!3d25.704853383662638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eaeac58a5bd7%3A0xfb46368e512f9e52!2sAv.+Uno+160%2C+La+Pur%C3%ADsima%2C+67129+Guadalupe%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1543526510928" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>
                          
                        </div>
                      </div>
        </div>
        </div>


        <div class="modal fade MapaAguascalientes" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Frio Control Aguascalientes.</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.5325964946333!2d-102.28002198505484!3d21.759638885607014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDQ1JzM0LjciTiAxMDLCsDE2JzQwLjIiVw!5e0!3m2!1ses!2smx!4v1544200440986" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>
                                  
                                </div>
                              </div>
                </div>
                </div>

                <div class="modal fade MapaLeon" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Frio Control Leon Bajío. Silao, Guanajuato</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9567339117675!2d-101.50136468506794!3d20.994371386017022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDU5JzM5LjciTiAxMDHCsDI5JzU3LjAiVw!5e0!3m2!1ses!2smx!4v1544200498844" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>       
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>
                                          
                                        </div>
                                      </div>
                        </div>
                </div>
                <div class="modal fade MapaTijuana" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Frio Control Tijuana, Baja California
                                            </h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.314093845183!2d-116.93121608439465!3d32.54446158104285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d9471275996617%3A0x6d4a6ae088288e62!2sBlvd.+de+las+Bellas+Artes%2C+Tijuana%2C+B.C.!5e0!3m2!1ses-419!2smx!4v1543527689694" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        
                                         </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>
                                          
                                        </div>
                                      </div>
                        </div>
                </div>

                <div class="modal fade MapaEnsenada" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Frio Control Ensenada, Baja california</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3388.336505197242!2d-116.6236150844083!3d31.870265581255357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d89262c0205f9d%3A0x598d71abc9d669a0!2sMiramar+832%2C+Zona+Centro%2C+22800+Ensenada%2C+B.C.!5e0!3m2!1ses-419!2smx!4v1543527940411" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                                         </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>
                                          
                                        </div>
                                      </div>
                        </div>
                </div>

                
                <div class="modal fade MapaMatriz" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Frio Control Ensenada, Baja california</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.927275592708!2d-100.24018508452129!3d25.706831783661695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eac1d343fecd%3A0x4e6e489ff6e132ad!2sAv.+3+675%2C+Central+de+Carga%2C+67129+Guadalupe%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1543525857495" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
                                         </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>
                                          
                                        </div>
                                      </div>
                        </div>
                </div>

                   
                
    

    <script>
        var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        $(document).ready(function(){
        
            $("#btnEnviar").click(function(){
                var nombre = $("#c_name").val();
                var telefono = $("#c_phone").val();
                var email = $("#c_email").val();
                var estado = $("#c_estado").val();
                var ciudad = $("#c_ciudad").val();
                var mensaje = $("#c_message").val();
                var terminos = $("input[type='checkbox']:checked");

                if(nombre == ""){
                    $("#mensaje1").fadeIn();
                    return false;
                }else{
                    $("#mensaje1").fadeOut();

                    if(telefono == "" || isNaN(telefono)){
                        $("#mensaje2").fadeIn();
                        return false;
                    }else{
                        $("#mensaje2").fadeOut();

                        if(email == "" || !expr.test(email)){
                            $("#mensaje3").fadeIn();
                            return false;
                        }else{
                            $("#mensaje3").fadeOut();

                            if(estado == ""){
                                $("#mensaje4").fadeIn();
                                return false;
                            }else{
                                $("#mensaje4").fadeOut();

                                if(ciudad == ""){
                                    $("#mensaje5").fadeIn();
                                    return false;
                                }else{
                                    $("#mensaje5").fadeOut();

                                    if(mensaje == ""){
                                        $("#mensaje6").fadeIn();
                                        return false;
                                    }else{
                                        $("#mensaje6").fadeOut();

                                        if(terminos.length == 0){
                                            $("#mensaje7").fadeIn();
                                            return false;
                                        }else{
                                            $("#mensaje7").fadeOut();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/jquery-1.11.0.min.js"> </script>
    <script src="js/owl.carousel.min.js"> </script>
    <script src="js/custom.js"></script>
  </body>
</html>