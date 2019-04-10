<?php include "php/insert_newsHome.php" ?>
<?php include "php/insert_gxg.php" ?>
<?php include "php/insert_progetti.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Fondazione Edulife</title>

      <!-- font -->
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

      <!-- bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


      <!-- stylesheet -->
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/loader.css">

      <!-- font-awesome -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- jquery -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="js/script.js"></script>

      <!-- greensock -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

      <!-- particles.js -->
      <script src="js/particles.min.js"></script>

      
</head>
<body>
      
      <div class="overlay">
            <div class="container-loader">
            <div class="circle"></div>
            </div>
      </div>

            <a href="index.php"><div class="logo"><img src="media/img/effe.png" id="imgLogo"></div></a>
            
            <div id="nav-toggle">
                  <div>
                        <span></span>
                        <span></span>
                        <span></span>
                  </div>
            </div>

            <div id="gloval-nav">
                  <nav>
                        <ul>
                              <li>
                                    <a href="pages/gxg.php">GxG</a>
                              </li>
                              <li>
                                    <a href="pages/donazioni.php">5x1000</a>
                              </li>
                        </ul>
                  </nav>
            </div><!-- /#gloval-nav -->
            
            <div class="social-media">
                  <ul>
                        <li>
                              <a href="https://www.facebook.com/FondazioneEdulife" target="_blank">
                                    <i class="fa fa-facebook social_home" aria-hidden="true" style="color: #e21212;"></i>
                              </a>
                        </li>
                        <li>
                              <a href="https://www.instagram.com/fondazione.edulife/?hl=it" target="_blank">
                                    <i class="fa fa-instagram social_home" aria-hidden="true" style="color: #e21212;"></i>
                              </a>
                        </li>
                        <li>
                              <a href="https://twitter.com/EdulifeOnlus" target="_blank">
                                    <i class="fa fa-twitter social_home" aria-hidden="true" style="color: #e21212;"></i>
                              </a>
                        </li>
                        <li>
                              <a href="https://www.google.it/maps/place/311+Verona/@45.4303778,10.9963367,17z/data=!3m1!4b1!4m5!3m4!1s0x477f5f3fd94d631f:0xb9a1156ee2f8c5e!8m2!3d45.4303741!4d10.9985254" target="_blank">
                                    <i class="fa fa-map-marker social_home" aria-hidden="true" style="color: #e21212;"></i>
                              </a>
                        </li>
                  </ul>
            </div>
      
            <div class="scritta" class="container">
                  <h3 class="scritte_home">Il sito ufficiale di Fondazione Edulife</h3>
            </div>


            <div class="container">
                  <div class=row>
                  <div class="header col-sm-12" id="anteprimaGXG">
                        <h1 class="scritte_home">Ultimo video caricato:</h1>
                        <div class=container>
                        <?= getGxgHome() ?>
                        </div>
                              
                  </div>
                  
                    
                        
                  </div>

            <div class="container">
                  <div class="header col-sm-12">
                  <div><img src="media/img/arrow-rossa.png" class="arrow"></div>
                  <div class="shadow"></div>
                  </div>
                        
                  </div>
                  <h1 class="scritte_home">Le ultime news</h1>

                  <div class="container bottom-bar" id="newsHome">
                        <div class="container">
                              <div class="row">
                                    <?= getAllNewsHome() ?>
                              </div>
                        </div>
                  </div>

                  <h1 class="scritte_home">I nostri progetti</h1>

                  <div class="container bottom-bar" id="newsHome">
                        <div class="container">
                              <div class="row">
                                    <?= getAllProgettiHome() ?>
                              </div>
                        </div>
                  </div>

                  <h1 class="scritte_home">Chi siamo</h1>

                  <div class="container bottom-bar" id="newsHome">
                        <div class="container">
                              <div class="row">
                                    <p>
                                          <b>Fondazione Edulife Onlus</b> nasce nell’ambito di una rete mondiale dedicata alla educazione dei giovani ed ha come finalità aiutare i giovani nella scoperta del proprio progetto di vita e promuovere gli adulti nel loro ruolo educativo.

                                          L’attività della <b>Fondazione</b> si sviluppa in tre ambiti: - <strong>Centro di ricerca per la innovazione didattica sviluppata con persone, enti, imprese ed istituzioni;</strong> - <strong>“Pensatoio” per la ideazione di progetti a favore della crescita umana e professionale dei giovani;</strong> - <strong>fondi per sostenere progetti educativi sempre destinati ai giovani.</strong>
                                          
                                          La <b>Fondazione</b> opera in stretta relazione con una rete di organizzazioni educative presenti in 131 Paesi, con oltre 4.000 opere educative e circa 2.000.000 di giovani destinatari.
                                    </p>
                              </div>
                        </div>
                  </div>
            </div>
            <canvas class="background"></canvas>

      <script type="text/javascript">

      TweenMax.to(".overlay h1", 2, {
            opacity: 0,
            y: -60,
            ease: Expo.easeInOut
      })

      TweenMax.to(".overlay", 2, {
            delay: 1,
            top: "-100%",
            ease: Expo.easeInOut
      })

      TweenMax.from(".logo", 1, {
            delay: 2.4,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.staggerFrom(".nav ul li", 1, {
            delay: 2.4, opacity: 0, y: 20, ease: Expo.easeInOut
      }, 0.2)

      TweenMax.staggerFrom(".social-media ul li", 1, {
            delay: 2.4, opacity: 0, y: 20, ease: Expo.easeInOut
      }, 0.2)

      TweenMax.from(".side-strip", 2, {
            delay: 2.4,
            opacity: 0,
            y: 40,
            ease: Expo.easeInOut
      })

      TweenMax.from(".row", 2, {
            delay: 2.4,
            opacity: 0,
            x: 40,
            ease: Expo.easeInOut
      })

      TweenMax.from(".row h6", 2, {
            delay: 3,
            opacity: 0,
            y: 40,
            ease: Expo.easeInOut
      })

      TweenMax.from(".row p", 2, {
            delay: 3.2,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.from(".header h1", 2, {
            delay: 3.2,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.from(".header p", 2, {
            delay: 3.2,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })

      TweenMax.from(".esagonale", 2, {
            delay: 3.4,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      })
      </script>
      <script>
            var particles = Particles.init({
                  selector: '.background',
                  color: 'white',
                  maxParticles: 300
            });
      </script>
</body>
</html>
