<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-123 col-sm-12 col-lg-6">
                <h2 class="footer"> <strong>GREENMATIK</strong> </h2>
                <p>Somos una empresa dedicada a dar soluciones de autolavado de vehículos, venta de equipo, refacciones, accesorios y productos de limpieza. 
Un autolavado es un negocio rentable, invierte ahora y haremos realidad tus sueños a toda máquina. Pregunta por nuestras soluciones de negocio. </p>
              
               <p class="copy copy-oculto"><a class="footer-link" href="aviso-privacidad.html"> <br> © Copyright 2019 GREENMATIK, Todos los derechos reservados. <br>Aviso de Privacidad </a> |  <a  class="footer-link " href="http://www.3e-digital.com/"  target="_blank"> Sitio web diseñado por 3e-Digital </a>
                </p>
            </div>
            <div class="col-6 col-sm-6 col-lg-3">
                <h6><strong>CONTÁCTANOS</strong></h6>
                <a class="footer-link" > <i class="fas fa-phone dos"></i> <span style="font-family: 'Raleway', sans-serif;"><strong>TELÉFONOS</strong> </span> </a> <br>
                <a  class="mostrar margen-movil" href="tel:018001347336"><span class="sucursales-footer">01 800 134 7336</span> </a> <br>
                  <a class="footer-link" >  <i class="fas fa-envelope dos"></i> <span style="font-family: 'Raleway', sans-serif;"><strong>E-MAIL</strong> </span> </a> <br>
                <a class=" footer-link" href="mailto:ventas@greenmatik.com"> <span class="sucursales-footer">ventas@greenmatik.com</span> </a> <br>
                             
                <a class="footer footer-link" > <i class="fas fa-map-marker-alt dos"></i> <strong>UBICACIÓN</strong></a> <br>
                <a class="footer-link mt-20" href="#"> <span class="sucursales-footer">lorem ipsum dolor</span> </a> <br>
               
                                 
                <a class="oculto link" href="tel:">
                <i class="fas fa-phone dos"></i> </a>
                <br>
               
            </div>
    
            <div class="col-6 col-sm-6 col-lg-3 ">
                <h6 ><strong>MENÚ</strong> </h6>
                <a class="footer-link activo" href="index.html"><span >INICIO</span></a> <br>
                <a class="footer-link" href="servicios"><span >SERVICIOS </span></a> <br>
                <a class="footer-link" href="portafolio.html"><span>CATÁLOGO DE PRODUCTOS</span></a><br>
                <a class="footer-link" href="refacciones.html"><span>REFACCIONES</span></a><br>
                <a class="footer-link" href="nosotros.html"><span>NOSOTROS</span></a><br>
                <a class="footer-link" href="faq.html"><span>PREGUNTAS FRECUENTES</span></a><br>
                <a class="footer-link mb-20" href="contacto.php"><span class="">CONTACTO</span></a> 
                <!-- <h6 class=" margen-movil2  "><strong>SÍGUENOS</strong></h6>
                <a class="mostrar footer-link" href="/" target="_blank"> <i class="fab fa-facebook-f dos  "> </i> @friocontrol </a>
                <h6 class="oculto margen-movil2  "><strong>SÍGUENOS</strong></h6>
                <a class="oculto link" href="/" target="_blank"> <i class="fab fa-facebook-f dos"></i> @GREENMATIK </a>   -->
            </div>
    
                           
        </div>
                        <br><br>
        <p class=" copy-mostrar "> <br> Copyright © GREENMATIK 2019, Todos los derechos reservados. <br><a class="footer-link" href="aviso-privacidad.html">Aviso de Privacidad </a>  | 
        	<a  class="footer-link "  href="http://www.3e-digital.com/" target="_blank"> Sitio web diseñado por 3e-Digital </a>
        </p>
    </div>      
</footer>


            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"> </script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/jquery.backstretch.min.js"></script>
    <script src="js/jquery.simple-text-rotator.min.js"></script>
    
	<script>
        /*menu hamburguesa */
        var hamburger=document.querySelector('.hamburger');
        //on click
        hamburger.addEventListener('click', function(){
            hamburger.classList.toggle('is-active');
        });
	</script>
	    <script>
        //botón ir hacia arriba
        $(document).ready(function(){
			$('.ir-arriba').click(function(){
			$('body, html').animate({
				scrollTop: '0'
			}, 300)
        });

        $(window).scroll(function(){
			if($(this).scrollTop()>0){
				$('.ir-arriba').slideDown(100);
			}else{
				$('.ir-arriba').slideUp(100);
			}
			});
        });
    </script>
    <script>
  AOS.init();
</script>
    <script>
        $(document).ready(function(){
            $('.category_list .categoryItem[category="todos"]').addClass('ct-item-active');

            //Agregarle la clase active al item seleccionado
            $('.categoryItem').click(function(){
                //filtrado de los productos
                var catEvent = $(this).attr('category');
                console.log(catEvent);

                $('.categoryItem').removeClass('ct-item-active');
                $(this).addClass('ct-item-active');

                //ocultar los productos
                $('.filtr-item').css('transform','scale(0)');

                function hideEvents(){
                    $('.filtr-item').hide();
                }setTimeout(hideEvents, 400);

                //Mostrando los productos
                function showEvents(){
                    $('.filtr-item[category="'+catEvent+'"]').show();
                    $('.filtr-item[category="'+catEvent+'"]').css('transform','scale(1)');
                }setTimeout(showEvents, 400);
            });

            //mostrando los productos
            $('.categoryItem[category="todos"]').click(function(){
                function showAll(){
                    $('.filtr-item').show();
                    $('.filtr-item').css('transform','scale(1)');
                }setTimeout(showAll, 400);

            });
        });
        // sucursales

        $(document).ready(function(){
            $('.category_lista2 .categoryItem[category="todos"]').addClass('ct-item-active');

            //Agregarle la clase active al item seleccionado
            $('.category_lista2  .categoryItem').click(function(){
                //filtrado de los productos
                var catEvent = $(this).attr('category');
                console.log(catEvent);

                $('.category_lista2  .categoryItem').removeClass('ct-item-active');
                $(this).addClass('ct-item-active');

                //ocultar los productos
                $('.filtr-item').css('transform','scale(0)');

                function hideEvents(){
                    $('.filtr-item').hide();
                }setTimeout(hideEvents, 400);

                //Mostrando los productos
                function showEvents(){
                    $('.filtr-item[category="'+catEvent+'"]').show();
                    $('.filtr-item[category="'+catEvent+'"]').css('transform','scale(1)');
                }setTimeout(showEvents, 400);
            });

            //mostrando los productos
            $('.category_lista2  .categoryItem[category="todos"]').click(function(){
                function showAll(){
                    $('.filtr-item').show();
                    $('.filtr-item').css('transform','scale(1)');
                }setTimeout(showAll, 400);

            });
        });
        


    </script>
    