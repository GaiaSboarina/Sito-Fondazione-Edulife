<?php include "php/insert_newsHome.php" ?>
<?php include "php/insert_gxg.php" ?>

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
<body class="index2">
      
      <div class="overlay">
            <h1>Caricamento...</h1>
      </div>
      
            <div class="logo"><img src="media/img/effe.png" id="imgLogo"></div>
            
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
                                    <a href="pages/news.php">News</a>
                              </li>
                              <li>
                                    <a href="pages/progetti.php">Progetti</a>
                              </li>
                              <li>
                                    <a href="pages/gxg.php">GxG</a>
                              </li>
                              <li>
                                    <a href="pages/donazione.html">5x1000</a>
                              </li>
                              <li>
                                    <a href="pages/chisiamo.html">Chi siamo</a>
                              </li>
                        </ul>
                  </nav>
            </div><!-- /#gloval-nav -->
            
            <div class="social-media">
                  <ul>
                        <li>
                              <a href="https://www.facebook.com/FondazioneEdulife" target="_blank">
                                    <i class="fa fa-facebook social_gxg" style="color:#E6DA31" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#" target="_blank">
                                    <i class="fa fa-instagram social_gxg" style="color:#E6DA31" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="https://twitter.com/EdulifeOnlus" target="_blank">
                                    <i class="fa fa-twitter social_gxg" style="color:#E6DA31" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="https://www.google.it/maps/place/311+Verona/@45.4303778,10.9963367,17z/data=!3m1!4b1!4m5!3m4!1s0x477f5f3fd94d631f:0xb9a1156ee2f8c5e!8m2!3d45.4303741!4d10.9985254" target="_blank">
                                    <i class="fa fa-map-marker social_gxg" style="color:#E6DA31" aria-hidden="true"></i>
                              </a>
                        </li>
                  </ul>
            </div>
      
            <div class="scritta" class="container">
                  <h3 class="scritte_gxg">GxG, una piattaforma fatta dai giovani per i giovani</h3>
            </div>

            <div class="container">
                  <div class="header col-sm-12" id="anteprimaGXG">
                        <h1 class="scritte_gxg">Ultimo video caricato:</h1>
                        <div class="esagonale">
                        <?= getGxgHome() ?>
                        </div>
                        
                  </div>
                  <div class="container bottom-bar" id="newsHome">
                        <div class="container">
                              <div class="row">
                                    <?= getAllNewsHome() ?>
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
                  maxParticles: 200
            });
      </script>
</body>
</html>