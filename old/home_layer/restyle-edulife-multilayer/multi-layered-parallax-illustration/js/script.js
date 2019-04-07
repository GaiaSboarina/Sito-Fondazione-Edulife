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

// js per centrare i div in home

var clientHeight = document.getElementById('center').clientHeight;
var clientWidth = document.getElementById('center').clientWidth;
var h = $(window).height();
var w = $(window).width();
h = (h / 2) - (clientHeight / 2);
h = h.toString() + "px";
w = (w / 2) - (clientWidth / 2);
w = w.toString() + "px";
document.getElementById('center').style.top = h;
document.getElementById('center').style.left = w;

var clientHeight = document.getElementById('center-slider').clientHeight;
var clientWidth = document.getElementById('center-slider').clientWidth;
var h = $(window).height();
var w = $(window).width();
h = (h / 2) - (clientHeight / 2);
h = h.toString() + "px";
w = (w / 2) - (clientWidth / 2);
w = w.toString() + "px";
document.getElementById('center-slider').style.top = h;
document.getElementById('center-slider').style.left = w;

var clientHeight = document.getElementById('center-news').clientHeight;
var clientWidth = document.getElementById('center-news').clientWidth;
var h = $(window).height();
var w = $(window).width();
h = (h / 2) - (clientHeight / 2);
h = h.toString() + "px";
w = (w / 2) - (clientWidth / 2);
w = w.toString() + "px";
document.getElementById('center-news').style.top = h;
document.getElementById('center-news').style.left = w;

var clientHeight = document.getElementById('center-gxg').clientHeight;
var clientWidth = document.getElementById('center-gxg').clientWidth;
var h = $(window).height();
var w = $(window).width();
h = (h / 2) - (clientHeight / 2);
h = h.toString() + "px";
w = (w / 2) - (clientWidth / 2);
w = w.toString() + "px";
document.getElementById('center-gxg').style.top = h;
document.getElementById('center-gxg').style.left = w;


//hamburgher menu
function myFunction(x) {
    x.classList.toggle("change");
}