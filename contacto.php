<!doctype html>
<html lang="es">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contacto Greenmatik</title>
    <!-- Archivos externos -->
    <?php require_once('includes/archivosExternosCabecera.php'); ?>
  </head>

  <body>

    <!-- header y navbar -->
    <?php require_once('includes/header.php'); ?>


    <section id="refacciones">
      <div class="container">
        <h1 class="titulo-refacciones">Contacto</h1>

        <p class="white mt-10 mb-50">En Greenmatik haremos realidad tus sueños a toda máquina. <br>
          Si tienes alguna duda, nuestro equipo se pondrá en contacto contigo.
        </p>

        <div>
          <a href="#"><button class="btn btn-border-white mont">Ver ubicación</button></a>
          <a href="#"><button class="btn btn-blanco ml-10 mont"><strong>Llámanos</strong></button></a>
        </div>
      </div>

    </section>



    <section class="contact" id="Contacto">
      <div class="container">

        <h3 class="blue2"><strong>CONTÁCTANOS</strong></h3>
        <div id="mensajeCampos" class="errores">Todos los campos son requeridos
        </div>
        <br>
        <div class="row">
          <div class="col-xs-12 col-md-6">

            <form action="php/enviar.php" id="contact-form" method="post" role="form">
              <div class="ajax-hidden">
                <?php
                    if(isset($_GET['error'])):
                        echo '<p style="color:red;">'.$_GET['error'].'</p>';
                    endif;
                ?>
                <div class="form-group">
                  <label class="sr-only" for="c_name">Nombre</label>
                  <input type="text" id="c_name" class="form-control" name="nombre" placeholder="Nombre"
                    onkeypress="return validarLetras(event);">
                  <div id="mensaje1" class="errores">*Ingresa un nombre válido</div>
                </div>

                <div class="form-group">
                  <label class="sr-only" for="c_phone">Teléfono </label>
                  <input type="tel" id="c_phone" class="form-control" name="telefono" placeholder="Teléfono"
                    onkeypress="return validarNumeros(event);">
                  <div id="mensaje2" class="errores">*Ingresa un télefono válido</div>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="c_email">E-mail </label>
                  <input type="email" id="c_email" class="form-control" name="email" placeholder="E-mail">
                  <div id="mensaje3" class="errores">Ingresa un e-mail válido</div>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="c_name">Estado</label>
                  <input type="text" id="c_estado" class="form-control" name="estado" placeholder="Estado"
                    onkeypress="return validarLetras(event);">
                  <div id="mensaje4" class="errores">Ingresa tu estado</div>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="c_name">Ciudad</label>
                  <input type="text" id="c_ciudad" class="form-control" name="ciudad" placeholder="Ciudad"
                    onkeypress="return validarLetras(event);">
                  <div id="mensaje5" class="errores">Ingresa tu ciudad</div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" id="c_message" name="mensaje" rows="7"
                    placeholder="Mensaje"></textarea>
                  <div id="mensaje6" class="errores">Ingresa un mensaje válido</div>
                </div>
                <div class="form-check ">
                  <input class="form-check-input" name="terminos" type="checkbox" value="" id="c_terminos">
                  <label class="form-check-label" for="defaultCheck1">
                    <a class="aviso2" href="aviso-privacidad.html" target="_blank">Acepto términos de privacidad</a>
                  </label>
                  <div id="mensaje7" class="errores">Debes aceptar los términos y condiciones</div>
                </div>
                <input type="submit" id="btnEnviar" value="ENVIAR" name="enviar" class="btn btn-enviar">

              </div>
              <div class="ajax-response"></div>
            </form>
          </div>


          <div class="col-xs-12 col-sm-6  col-lg-4 filtr-item" category="Monterrey">


          </div>


        </div>
        <!--end row-->

        <div class="row contact2">
          <div class="col-xs-12 col-md-4">
            <div class="media">
              <img class="mr-3" src="images/icons/ubicacion.png" alt="Generic placeholder image">
              <div class="media-body">
                <h6 class="mt-0">Ubicación </h6>
                <p class="contacto-text"> Ave Uno #160 <br> Col. Central de Carga, <br> Guadalupe, N.L.

              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="media ">
              <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
              <div class="media-body">
                <h6 class="mt-0">Teléfono </h6> <a class="contacto-tel" href="tel:8183347766">(81) 8334 7766</a><br>
                <!-- <a class="contacto-tel"  href="tel:818394-5570">(81) 8394 5570</a> -->
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="media ">
              <img class="mr-3" src="images/icons/tel.png" alt="Generic placeholder image">
              <div class="media-body">
                <h6 class="mt-0">E-mail </h6>
                <a class="contacto-tel" href="mailto:ventas@greenmatik.com">ventas@greenmatik.com</a>
              </div>
            </div>
          </div>

        </div>


    </section>



    <section class="">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.927275592708!2d-100.24018508452133!3d25.7068317836617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eac1d343fecd%3A0x4e6e489ff6e132ad!2sAv.+3+675%2C+Central+de+Carga%2C+67129+Guadalupe%2C+N.L.!5e0!3m2!1ses!2smx!4v1545148032696"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <!-- footer -->
    <?php require_once('includes/footer.php'); ?>

    <!--Validación de formulario con JQuery-->
    <script>
      var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
      $(document).ready(function () {

        $("#btnEnviar").click(function () {
          var nombre = $("#c_name").val();
          var telefono = $("#c_phone").val();
          var email = $("#c_email").val();
          var estado = $("#c_estado").val();
          var ciudad = $("#c_ciudad").val();
          var mensaje = $("#c_message").val();
          var terminos = $("input[type='checkbox']:checked");

          if (nombre == "") {
            $("#mensaje1").fadeIn();
            return false;
          } else {
            $("#mensaje1").fadeOut();

            if (telefono == "" || isNaN(telefono)) {
              $("#mensaje2").fadeIn();
              return false;
            } else {
              $("#mensaje2").fadeOut();

              if (email == "" || !expr.test(email)) {
                $("#mensaje3").fadeIn();
                return false;
              } else {
                $("#mensaje3").fadeOut();

                if (estado == "") {
                  $("#mensaje4").fadeIn();
                  return false;
                } else {
                  $("#mensaje4").fadeOut();

                  if (ciudad == "") {
                    $("#mensaje5").fadeIn();
                    return false;
                  } else {
                    $("#mensaje5").fadeOut();

                    if (mensaje == "") {
                      $("#mensaje6").fadeIn();
                      return false;
                    } else {
                      $("#mensaje6").fadeOut();

                      if (terminos.length == 0) {
                        $("#mensaje7").fadeIn();
                        return false;
                      } else {
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

    <!--modales-->
    <div class="modal fade MapaGuadalupe" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Frio Control Nuevo Leon, Guadalupe. Sucursal Linda vista.
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.987032078217!2d-100.23791118452138!3d25.704853383662638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eaeac58a5bd7%3A0xfb46368e512f9e52!2sAv.+Uno+160%2C+La+Pur%C3%ADsima%2C+67129+Guadalupe%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1543526510928"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>
    </div>


    <div class="modal fade MapaAguascalientes" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Frio Control Aguascalientes.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.5325964946333!2d-102.28002198505484!3d21.759638885607014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDQ1JzM0LjciTiAxMDLCsDE2JzQwLjIiVw!5e0!3m2!1ses!2smx!4v1544200440986"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9567339117675!2d-101.50136468506794!3d20.994371386017022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDU5JzM5LjciTiAxMDHCsDI5JzU3LjAiVw!5e0!3m2!1ses!2smx!4v1544200498844"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>
    </div>
    <div class="modal fade MapaTijuana" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
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
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.314093845183!2d-116.93121608439465!3d32.54446158104285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d9471275996617%3A0x6d4a6ae088288e62!2sBlvd.+de+las+Bellas+Artes%2C+Tijuana%2C+B.C.!5e0!3m2!1ses-419!2smx!4v1543527689694"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade MapaEnsenada" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Frio Control Ensenada, Baja california</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3388.336505197242!2d-116.6236150844083!3d31.870265581255357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d89262c0205f9d%3A0x598d71abc9d669a0!2sMiramar+832%2C+Zona+Centro%2C+22800+Ensenada%2C+B.C.!5e0!3m2!1ses-419!2smx!4v1543527940411"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>
    </div>


    <div class="modal fade MapaMatriz" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Frio Control Ensenada, Baja california</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.927275592708!2d-100.24018508452129!3d25.706831783661695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eac1d343fecd%3A0x4e6e489ff6e132ad!2sAv.+3+675%2C+Central+de+Carga%2C+67129+Guadalupe%2C+N.L.!5e0!3m2!1ses-419!2smx!4v1543525857495"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>