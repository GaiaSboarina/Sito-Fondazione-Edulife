<?php include "../../../php/insert_newsHome.php" ?>
<?php include "../../../php/insert_imgGlider.php" ?>


<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../../../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="css/style_index.css">
        <link rel="stylesheet" href="../../../css/glider.css">
        <link rel="stylesheet" href="../../../pages_demo/main.css">
        <link rel="stylesheet" href="../../../css/font.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Fondazione Edulife Onlus</title>

      
    </head>
    <body>
    <header class="navbar justify-content-left">
     
     <a class="align-middle float-left" href="index.php">
         <img src="../../../media/img/effe.png" alt="" class="logo">
     </a>

     <span class="align-middle float-right fas fa-ellipsis-h" style="font-size:40px;cursor:pointer;color:white;" onclick="openNav()"></span>

     

     <div id="myNav" class="overlay">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <div class="overlay-content">
             <a href="#">About</a>
             <a href="#">Services</a>
             <a href="#">Clients</a>
             <a href="#">Contact</a>
         </div>
     </div>
             
 </header>

        <div id='hero'>
            <div class='layer-bg layer' data-depth='0.10' data-type='parallax'></div>
            <div class='layer-1 layer' data-depth='0.20' data-type='parallax'></div>
            <div class='layer-2 layer' data-depth='0.50' data-type='parallax'></div>
            <div class='layer-3 layer' data-depth='0.80' data-type='parallax'></div>
            <div class='layer-overlay layer' data-depth='0.85' data-type='parallax'></div>
            <div class='layer-4 layer' data-depth='1.00' data-type='parallax'></div>
        </div>
        <div id='hero-mobile'></div>

        <footer id = "footer">  
                <div class = "footer-top">
                <div class = "container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <div id = "imgFooter"><img src="../media/img/effe.png" alt="" class = "img-responsive"></div>
                        <div id = "testoFooter"> 
                            Fondazione Edulife Onlus nasce nell’ambito di una rete mondiale dedicata alla educazione dei giovani.
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Contatti</h4>
                        <p>Fondazione Edulife
                        <br>
                        Lungadige Galtarossa, 21
                        <br>
                        37133 Verona
                        <br>
                        Tel. +39 045 9696300
                        <br>
                        Fax +39 045 9696301
                        <br>
                        info@edulife.it</p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact middle">
                        <h4>I nostri social</h4>
                        <a class = "btn" href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a class = "btn" href="https://www.facebook.com/FondazioneEdulife" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class = "btn" href="https://twitter.com/EdulifeOnlus" class="twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Dove siamo</h4>
                        <div class="mappa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2799.943064754773!2d10.99683911507071!3d45.43064904370334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x477f5f3fd94d631f%3A0xb9a1156ee2f8c5e!2s311+Verona%2C+Lungadige+Galtarossa%2C+21%2C+37133+Verona+VR!3m2!1d45.430374099999995!2d10.9985254!5e0!3m2!1sit!2sit!4v1553077721735" width="320" height="200" frameborder="0" style="border:0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
                    <p class="copyright text-muted">Copyright &copy;Edulife 2019</p>
                </div>
                </div>
            </footer>
     
            
           
               
            
        
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/index.js"></script>
        <script src="js/glider_index.js"></script>
        <script src="js/glider.js"></script>
        <script type="text/javascript" src="janpaepke-ScrollMagic-3b8397d/assets/js/tracking.js"></script>
                                
        <script>
            $(function () { // wait for document ready
                
                // init
                var controller = new ScrollMagic.Controller();

                // define movement of panels
                var wipeAnimation = new TimelineMax()
                    .fromTo("section.panel.slider", 1, {x: "-100%"}, {x: "0%", ease: Linear.easeNone})  // in from left
                    .fromTo("section.panel.news",    1, {x:  "100%"}, {x: "0%", ease: Linear.easeNone})  // in from right
                    .fromTo("section.panel.gxg",    1, {y:  "-100%"}, {y: "0%", ease: Linear.easeNone})  // in from top
                // create scene to pin and link animation
                new ScrollMagic.Scene({
                        triggerElement: "#pinContainer",
                        triggerHook: "onLeave",
                        duration: "300%"
                    })
                    .setPin("#pinContainer")
                    .setTween(wipeAnimation)
                    .addIndicators() // add indicators (requires plugin)
                    .addTo(controller);
            });
        </script>
        <script>
            function openNav() {
                document.getElementById("myNav").style.width = "100%";
            }
            
            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script>
    </body>
</html>