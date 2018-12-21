$("#owl-products").owlCarousel({
    items : 5,
    slideSpeed : 300,
    paginationSpeed : 400,
    autoPlay: 5000,
    singleItem: false
  });

  $("#owl-refacciones").owlCarousel({
    items : 1,
    slideSpeed : 300,
    paginationSpeed : 400,
    autoPlay: 5000,
    singleItem: true
  });

  var filterizd = $('.filtr-container').filterizr({
    animationDuration: 0.5, // in seconds
    filter: 'all', // Initial filter 
    delayMode: 'progressive',
    controlsSelector: '', // Selector for custom controls
    easing: "ease-in",    
    layout: 'sameSize'
});

/*function Descripcion-producto ( titulo, texto) {
  console.log('holi')

}*/

$(function(){
  var botones = $(".cont button");
  botones.click(function() {
    botones.removeClass('activo');
    $(this).addClass('activo');
  });
});


