$(function(){

    
// Start The Down
 (function Download() {

    $('.the-down .fa-angle-double-down').animate({

       bottom: '-=15px'

    }, 500, function(){

       $(this).animate({

          bottom: '+=15px'
    
       }, 500, function(){
    
          Download()
    
    
       })


    })

}())


// click icon in header to go to second section
   $('header .fa-angle-double-down').on('click', function(){

       $('html, body').animate({
   
           scrollTop: $('.why-us').offset().top -15
       }, 1000)
   })


   // ####################################################################################################


// add opacity to nav
$(window).scroll(function(){

    $(window).scrollTop() >= $('nav').height() ? $('nav').addClass('nav-opacity') : $('nav').removeClass('nav-opacity')
 })


   // ####################################################################################################


  // Start Typed
  var typed = new Typed('.typeme-one', {
    strings: ["Welcome To"],
    typeSpeed: 50,
    startDelay: 2000, // وقت قبل الكتابة
    backSpeed: 20, // وقت وهو بيرجع بيk اتنين
    backDelay: 2500, // الوقت اللي بيقعده ظاهر
    loop: false , // كرره 
    // loopCount: 5, // كرره 5 مرات بس
    showCursor: true, // شيل الخط
    cursorChar: ' ',
    autoInsertCss: true,

  });

  var typed = new Typed('.typeme-one-plus', {
    strings: ["MUDARRIS.net"],
    typeSpeed: 50,
    startDelay: 2800, // وقت قبل الكتابة
    backSpeed: 20, // وقت وهو بيرجع بيk اتنين
    backDelay: 2500, // الوقت اللي بيقعده ظاهر
    loop: false , // كرره 
    // loopCount: 5, // كرره 5 مرات بس
    showCursor: true, // شيل الخط
    cursorChar: ' ',
    autoInsertCss: true,

  });


  var typed = new Typed('.typeme-two', {
    strings: ["Ask For A Private Teacher Now", "Learn through the latest modern means"],
    typeSpeed: 50,
    color: '#f5f5f5',
    backDelay: 2500, // الوقت اللي بيقعده ظاهر
    startDelay: 5000, // وقت قبل الكتابة
    backSpeed: 2, // وقت وهو بيرجع بيت اتنين
    loop: true , // كرره مالا نهاية
    showCursor: true, // شيل الخط
    cursorChar: '.',
    autoInsertCss: false,


  });

   // ####################################################################################################

  var counted = 0;
$(window).scroll(function() {

  var oTop = $('.our-success').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > (oTop + 580 )) {
    $('.count').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 1000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }

});


// close 
})


