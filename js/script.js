var lunghezzaScroll = 0;

$(document).ready(function(){
    lunghezzaScroll = $('body').innerHeight();
});

$(window).scroll(function() {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 1100);
});

$(window).scroll(function() {
    if($(this).scrollTop() > 1100) {
        $('.abc').addClass('ncol');
        $('.nav').addClass('transparentoff');
    } else {
        $('.abc').removeClass('ncol');
        $('.nav').removeClass('transparentoff');
    }
});

$(window).scroll(function(){

    if($(window).scrollTop() <= lunghezzaScroll) {
        $(window).scrollTop() + ' - ' + lunghezzaScroll + ' - ' + $('header .content').css('top');
        parallax();
    }
  });
  
  function parallax(){
    var scrolled = $(window).scrollTop();
    
    $('.bg').css('top',-(scrolled*0.1)+'px');
    $('header .content').css('top',65+(scrolled*0.1)+'%');
    $('header .content').css('opacity',1-(scrolled*0.01)/10);
    $('header .content').css('opacity',1-(scrolled*0.01)/10);    
  };


$(document).ready(function(){
    $('#tipo').on('change', function(){
        var demovalue = $(this).val(); 
        if (demovalue == "Progetto" || demovalue == "News") {
            $("#showTitle").show();
            $("#showContent").show();
            $("#showImg").show();
            $("#showDate").hide();
            $("#showLink").hide();
        } else if(demovalue == "Evento"){
            $("#showLink").hide();
            $("#showTitle").show();
            $("#showContent").show();
            $("#showImg").show();
            $("#showDate").show();
        } else if(demovalue == "Video"){
            $("#showLink").show();
            $("#showTitle").show();
            $("#showContent").show();
            $("#showImg").show();
            $("#showDate").hide();
        }else{
            $("div.myDiv").hide();
        }

        
        
    });
});

function validate(e) {
    var r = confirm("Do you want to submit the form?");
    if (r == true){
        e.returnValue = true; 
    } else{
        e.returnValue = false; 
    }
    
}