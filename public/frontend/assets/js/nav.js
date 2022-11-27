jQuery(function ($) {
    let navIsOpen = false;
    $('.nav-toggle').click(function (e) {
        if (!navIsOpen) {
            $('#mobile-menu').stop().removeClass('slide-out-elliptic-top-bck').addClass('slide-in-elliptic-top-fwd').slideDown();
            navIsOpen = true;
        } else {
            $('#mobile-menu').addClass('slide-out-elliptic-top-bck').removeClass('slide-in-elliptic-top-fwd').slideUp(500);
            navIsOpen = false;
        }
    })
    $(window).on('scroll' , function () {
        let CurrentScroll = $(window).scrollTop()
        if (CurrentScroll > 80){
            $('nav').addClass('active')
        }else{
            $('nav').removeClass('active')
        }
    })

})
