'use strict'

$("#owl-products").owlCarousel({
    items : 3,
    slideSpeed : 300,
    paginationSpeed : 400,
    autoPlay: 5000,
    singleItem: false
  });

  $("#owl-refacciones").owlCarousel({
    items : 2,
    slideSpeed : 300,
    paginationSpeed : 400,
    autoPlay: 5000,
    singleItem: false
  });

  $("#owl-green").owlCarousel({
    items : 1,
    slideSpeed : 300,
    paginationSpeed : 400,
    autoPlay: 5000,
    singleItem: true
  });


  /*Magnific popup*/
  $(document).ready(function() {
    $('.image-popup-greenmatik').magnificPopup({
     type: 'image',
     closeOnContentClick: true,
     mainClass:'mfp-fade',
     gallery: {
     enabled: true,
     navigateByImgClick: true,
     preload: [0,1] // Will preload 0 - before current, and 1 after the current image
     },
      image: {
      verticalFit: true,
    }
   });
  });
//sólo letras
function validarLetras(e){
  var key = e.keyCode || e.which;
  var tecla = String.fromCharCode(key).toString();
  var letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
  var especiales = [8, 37, 39, 46, 6];

  var tecla_especial= false;

  for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }

  if(letras.indexOf(tecla) == -1 && !tecla_especial){
    alert('tecla no aceptada');
    return false;
  }
}

//sólo números
function validarNumeros(evt){
  if(window.event){
    var keynum = evt.keyCode;
  }else{
    keynum = evt.which;
  }

  if((keynum>47 && keynum<58) || keynum == 8 || keynum == 13 || keynum == 6){
    return true;
  }else{
    alert('Sólo números');
    return false;
  }
}