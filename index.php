<?php include "php/insert_newsHome.php" ?>
<?php include "php/insert_imgGlider.php" ?>


<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="css/style_index.css">
        <link rel="stylesheet" href="css/glider.css">
        <link rel="stylesheet" href="css/font.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Fondazione Edulife Onlus</title>
    </head>
    <body style="background-color: rgb(236, 236, 236)">
    <header class="parallax">
        <video autoplay muted loop id="myVideo">
            <source src="media/video/Walking.mp4" type="video/mp4">
        </video>
        <nav class="navbar fixed-top navbar-light navbar-expand-md bg-light justify-content-left">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="media/img/effe.png" alt="" class="logo">
                </a>
            </div>
            <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link abc" href="index.php">Home <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/news.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/progetti.php">Progetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/gxg.php">GXG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/inostrivalori.html">I nostri valori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/donazione.html">Donazioni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="pages/chisiamo.html">Chi siamo</a>
                    </div>
                    </li>
                </ul>
        </nav>

        </header>
        <div class="container-fluid" style="background-color: white;">
        <div class="container">
                <br>
                <br>
                <div class="glider-contain">
                    <h2 id="titoloGlider"> Ultimi video GxG </h2>
                    <hr>
                    <div class="glider">
                        <?=getAllImgGlider()?>
                    </div>     
                    <button class="glider-prev">&laquo;</button>
                    <button class="glider-next">&raquo;</button>
                </div>        
                <div id="dots"></div>
                <br>
                <br>
                <hr>
                <br>
                <br>
            </div>
            <div class="container">
                <div class="row">
                    <?= getAllNewsHome() ?> 
                </div>
            </div>
                <br>
                <br>
                <hr>
                <br>
                <br>
            <div class="container" style="padding-bottom:15px;">
            <div class="row">  
                <div class="col-md-6 col-xs-6 text-right" style="border: none;">
                    <img src="media/img/gxg.png">
                </div>
                <div class="col-md-6 col-xs-6">
                    <h2 id="titoloGxg">Giovani x Giovani</h2>
                    <p>                    
                        GxG è il portale di Fondazione Edulife che permette di condividere le storie e le passioni delle persone che compongono questa realtà.
                        Storie di giovani per giovani, storie di vita vissuta, storie che tutti avremmo potuto vivere.
                        Tutti noi abbiamo una storia da raccontare.
                    </p>
                </div>
            </div>
            </div>         
            
            </div>
               
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
        </div>

            
           
        
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/glider_index.js"></script>
        <script src="js/glider.js"></script>
        
    </body>
</html>