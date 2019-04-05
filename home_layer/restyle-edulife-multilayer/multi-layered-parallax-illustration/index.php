<?php include "../../../php/insert_newsHome.php" ?>
<?php include "../../../php/insert_imgGlider.php" ?>

<!DOCTYPE html>
<html lang="en" class="animated fadeIn">

  <head>
    <meta charset="UTF-8">
    <title>Multi-layered Parallax Illustration </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../pages_demo/main.css">
        <link rel="stylesheet" href="../../../css/style_index.css">
        <link rel="stylesheet" href="../../../css/glider.css">

        <link rel="stylesheet" href="../../../aos-master/dist/aos.css">
        <script src="../../../aos-master/dist/aos.js"></script>
    
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
  </div>

  <div id='hero-mobile'></div>

  <div id='content'>
    <div class='container'>
      <div id="center-home">
        <img src="media/img/temp_mid3.jpg" alt="">
    </div>

        <div data-aos="fade-right" data-aos-duration="2000" class="container" id="center-slider">
            <div class="glider-contain">
                <h2 id="titoloGlider"> Ultimi video GxG </h2>
                <hr>
                <div class="glider">
                    <?=getAllImgGlider()?>
                </div>     
                <button class="glider-prev">&laquo;</button>
                <button class="glider-next">&raquo;</button>
            </div>
        </div>
        <hr>
        <div data-aos="fade-left" data-aos-duration="2000" class="container" id="center-news">
            <div class="row">
                <?= getAllNewsHome() ?> 
            </div>
            <hr>
        </div>
<!-- fine libreria -->


<!-- inizio gxg in home -->
        <div data-aos="fade-right" data-aos-duration="2000" class="container" id="center-gxg">
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
<!-- fine gxg in home -->


<!-- inizio i nostri valori -->
    <hr>
        <div data-aos="fade-left" data-aos-duration="2000" class="container" id="containerNostriValori">
            <div class="row">
                <div class="box">
                    <div class = "icon">
                        <i class="far fa-hand-spock" aria-hidden="true"></i>
                    </div>
                    <div class="content" >
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Libertà di scelta, nella ricerca della propria vocazione e del proprio progetto di vita. La persona opera affinchè la libertà rappresenti il principio su cui si fonda la propria azione.">
                        <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLIBERTÁ</h3>
                    </span>
                </div>

                </div>

                <div class="box">
                    <div class = "icon">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Esercizio della sincerità. La persona si rapporta con questo, rifiutando qualsiasi tipo di falsità o interpretazione interessata.">
                            <h3>&nbsp&nbsp&nbsp&nbsp&nbspSINCERITÁ</h3>
                        </span>
                    </div>
                </div>

                <div class="box">
                    <div class = "icon">
                        <i class="fa fa-anchor" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Fiducia reciproca. La persona coglie ogni sfida come opportunità per creare un ambiente di collaborazione e crescita professionale.">
                            <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFIDUCIA</h3>
                        </span>
                    </div>
                </div>

                <div class="box">
                    <div class = "icon">
                        <i class="far fa-handshake" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Rispetto della collettività. La persona ha cura dell'esperienza e del know-how che viene a lei offerta.">
                            <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRISPETTO</h3>
                        </span>
                    </div>
                </div>

                <div class="box">
                    <div class = "icon">
                        <i class="fa fa-fire" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Valore del coraggio. La persona unisce al senso di responsabilità, il gusto di affrontare situazioni difficili, a volte temerarie, nell'interesse della collettività.">
                            <h3>&nbsp&nbsp&nbsp&nbsp&nbspCORAGGIO</h3>
                        </span>
                    </div>
                </div>

                <div class="box">
                    <div class = "icon">
                        <i class="fa fa-tint" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Onestà. La persona la promuove, ricercando in ogni occasione il rispetto dei doveri e dei diritti verso i propri colleghi, partner e clienti." id="prova">
                            <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspONESTÀ</h3>
                        </span>
                    </div>
                </div>

                <div class="box">
                    <div class = "icon">
                        <i class="fa fa-gavel" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Giustizia. La persona la opera rifiutando lo spreco di risorse, egoismi personali e prevaricazioni di ogni genere.">
                            <h3>&nbsp&nbsp&nbsp&nbsp&nbspGIUSTIZIA</h3>
                        </span>
                    </div>
                
                </div>

                <div class="box">
                    <div class = "icon">
                        <i class="fa fa-filter" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Umiltà. La persona promuove l'ascolto, il confronto e la capacità di porsi come presenza significativa.">
                            <h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUMILTÀ</h3>
                        </span>
                    </div>
                </div>

                <div class="box">
                    <div class = "icon">
                        <i class="far fa-hand-peace" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Generosità. La persona la riconosce come primo passo per la costruzione di valore.">
                            <h3>&nbsp&nbsp&nbspGENEROSITÀ</h3>
                        </span>
                    </div>
                </div>

                <div class="box">
                    <div class = "icon">
                        <i class="far fa-gem" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Bellezza. La persona la ricerca, la sviluppa e la promuove nei rapporti umani e nella creazione di nuove soluzioni.">
                            <h6>RICERCA DELLA BELLEZZA</h6>
                        </span>
                    </div>
                </div>
            </div>
        </div>
<!-- fine i nostri valori -->



    </div>
    <!-- inizio footer -->
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
    
    

      <script  src="js/index.js"></script>
      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/script.js"></script>
      <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }
        
        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
    <script>
            AOS.init();
        </script> 
  </body>

</html>
