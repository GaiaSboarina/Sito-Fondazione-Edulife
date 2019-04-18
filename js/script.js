(function($) {
    $(function () {
          $('#nav-toggle').on('click', function() {
                $('body').toggleClass('open');
          });
    });
})(jQuery);

$(document).ready(function(){
    $('#tipo').on('change', function(){
        var demovalue = $(this).val(); 
        if (demovalue == "Progetto" || demovalue == "News") {
            $("#showTitle").show();
            $("#showContent").show();
            $("#showImg").show();
            $("#showDate").hide();
            $("#showLink").hide();
            $("#showLink2").hide();
        } else if(demovalue == "Evento"){
            $("#showLink").hide();
            $("#showLink2").hide();
            $("#showTitle").show();
            $("#showContent").show();
            $("#showImg").show();
            $("#showDate").show();
            
        } else if(demovalue == "Video"){
            $("#showLink").show();
            $("#showLink2").show();
            $("#showTitle").show();
            $("#showContent").show();
            $("#showImg").show();
            $("#showDate").hide();

        }else if(demovalue == "File"){
            $("#showImg").show();
            $("#showLink").hide();
            $("#showLink2").hide();
            $("#showTitle").hide();
            $("#showContent").hide();
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

