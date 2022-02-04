$(function(){


    // Scroll Top

    $(window).scroll(function(){

        if($(window).scrollTop() > 700){

            if($('.scroll-top').is(':hidden')){
                $('.scroll-top').fadeIn()
            }
        }
        else {
            $('.scroll-top').fadeOut()
        }
    })

    $('.scroll-top').click(function(){

        $('html , body').animate({

            scrollTop: 0
        
    }, 500);
    })


    // ##########################################################

    // Start Search
    $('.main-search .fa-search').on('click', function(){
        $(this).toggleClass('fa-search , fa-times')

        if($(this).hasClass('fa-times')){

            $('nav .main-list > li, .mob-icon').hide().siblings('.nav-search').fadeIn()
            $('.nav-search input').focus()
        }

        else {
            $('nav .main-list > li, .mob-icon').show().siblings('.nav-search').hide()
            
        }
        
    })

    
    // ##########################################################

    // Fixed The Aside
    $(window).scroll(function(){
        if($(this).scrollTop() > 400){
            $('aside .aside-one, aside .aside-two').addClass('fixed')
            
            $('aside .aside-one').addClass('aside-one-fixed')
        }
        else {
            $('aside .aside-one, aside .aside-two').removeClass('fixed')
        }
        
        if($(this).scrollTop() >= 2700){
            $('aside .aside-one, aside .aside-two').addClass('fixed-screen')
        }
        else {
            $('aside .aside-one, aside .aside-two').removeClass('fixed-screen')
        }
    })
    // ##########################################################

    // Open And Close The Setting Option
    $('nav .mob-icon').click(function(){
        $('.popup-overlay').show()
        $('.setting-options').addClass('open')
    })

    $('.setting-options .icon-close .fa-times, .popup-overlay').click(function(){
        $('.setting-options').removeClass('open')
        $('.popup-overlay').hide()

    })

    // ##########################################################
    // Dropdown In Side Menu
    $('.setting-options .main-list-mob > li > a').click(function(){
        $(this).children('i').toggleClass('fa-angle-right , fa-angle-down')
        $(this).parent().children().children('li').toggleClass('slideDown')
        $(this).toggleClass('active')
        $(this).children().toggleClass('active')
        
    })
    
    $('.setting-options .main-list-mob > li > ul li > a').click(function(){
        $(this).children('i').toggleClass('fa-angle-right , fa-angle-down')
        $(this).parent().children().children().toggleClass('slideDown')
        $(this).toggleClass('active')
        $(this).children().toggleClass('active')
    })


// close 
})
