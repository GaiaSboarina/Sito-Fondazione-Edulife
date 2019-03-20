$(window).scroll(function() {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 1200);
});

$(window).scroll(function() {
    if($(this).scrollTop() > 1200) {
        $('.abc').addClass('ncol');
    } else {
        $('.abc').removeClass('ncol');
    }
});
