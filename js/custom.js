'use strict'

$("#owl-products").owlCarousel({
    items : 5,
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

  var filterizd = $('.filtr-container').filterizr({
    animationDuration: 0.5, // in seconds
    filter: 'all', // Initial filter 
    delayMode: 'progressive',
    controlsSelector: '', // Selector for custom controls
    easing: "ease-in",    
    layout: 'sameSize'
});


$(function(){
  var botones = $(".cont button");
  botones.click(function() {
    botones.removeClass('activo');
    $(this).addClass('activo');
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