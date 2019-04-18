<?php 
include "../php/insert_gxg.php";
$array = getGxg();
?>
<?php include "../php/get_file.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>GxG</title>

      <link rel="icon" href="../media/img/gxg_icon.png" type="image/png">

      <!-- font -->
      <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

      <!-- bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


      <!-- stylesheet -->
      <link rel="stylesheet" href="../css/mainGXG.css">
      <link rel="stylesheet" href="../css/loaderGXG.css">
      <link rel="stylesheet" href="../css/gxg.scss">
      

      <!-- font-awesome -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- jquery -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="../js/script.js"></script>

      <!-- greensock -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

      <!-- particles.js -->
      <script src="../js/particles.min.js"></script>

</head>
<body>
      
      <div class="overlay">
            <div class="container-loader">
                  <div class="circle"></div>
            </div>
      </div>
      
            <a href="../pages/gxg.php"><div class="logo"><img src="../media/img/gxg_gialla.png" id="imgLogo"></div></a>
            
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
                                    <a href="../index.php">Home</a>
                              </li>
                              <li>
                                    <a href="../pages/news.php">News</a>
                              </li>
                              <li>
                                    <a href="../pages/donazioni.php">5x1000</a>
                              </li>
                              <li>
                                    <?=getFile()?>
                              </li>
                        </ul>
                  </nav>
                  <nav>
                        <p class="socialMobile" style="color: #e6da31;">
                              <a href="https://www.facebook.com/FondazioneEdulife" target="_blank">
                                    <i class="fa fa-facebook social_home" aria-hidden="true" style="color:#E6DA31;"></i>
                              </a>
                              <a href="https://www.instagram.com/fondazione.edulife/?hl=it" target="_blank">
                                    <i class="fa fa-instagram social_home" aria-hidden="true" style="color:#E6DA31;"></i>
                              </a>
                              <a href="https://twitter.com/EdulifeOnlus" target="_blank">
                                    <i class="fa fa-twitter social_home" aria-hidden="true" style="color:#E6DA31;"></i>
                              </a>
                              <a href="https://www.google.it/maps/place/311+Verona/@45.4303778,10.9963367,17z/data=!3m1!4b1!4m5!3m4!1s0x477f5f3fd94d631f:0xb9a1156ee2f8c5e!8m2!3d45.4303741!4d10.9985254" target="_blank">
                                    <i class="fa fa-map-marker social_home" aria-hidden="true" style="color:#E6DA31;"></i>
                              </a>
                              <a href="#" target="_blank">
                                    <i class="fa fa-youtube social_home" aria-hidden="true" style="color:#E6DA31;"></i>
                              </a>
                              
				</p>
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
                              <a href="https://www.instagram.com/fondazione.edulife/?hl=it" target="_blank">
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
                        <li>
                              <a href="#" target="_blank">
                              <i class="fa fa-youtube social_home" aria-hidden="true" style="color: #e6da31;"></i>
                              </a>
                        </li>       
                  </ul>
            </div>
      
            <div class="scritta" class="container">
                  <h3 class="scritte_home">Giovani per Giovani</h3>
            </div>
            <div class="space"></div>
                  <?php for($i = 0; $i < count($array); $i++){ ?>
                        <section>
                              <div class="container py-3">
                                    <div class="card">
                                          <div class="row">
                                                <div class="col-md-4">
                                                      <img src="../media/img/<?= $array[$i]['nome'] ?>" class="w-100">
                                                </div>
                                                <div class="col-md-8 px-3">
                                                      <div class="card-block px-3">
                                                            <h4 class="card-title"><?= $array[$i]['titolo'] ?></h4>
                                                            <p class="card-text"><?= $array[$i]['contenuto'] ?></p>
                                                            <div class="line-wrap">
                                                                  <div class="line line-yellow line-fx" style="transform: translate3d(0%, 0px, 0px);"></div>
                                                            </div>
                                                            <p class="card-text">Guarda i video su YouTube: </p>
                                                            <a href="https://www.youtube.com/watch?v=<?= $array[$i]['link'] ?>" target="_blank" class="btn btn-primary">TRAILER</a>
                                                            <a href="https://www.youtube.com/watch?v=<?= $array[$i]['link2'] ?>" target="_blank" class="btn btn-primary">INTERVISTA</a>
                                                      </div>
                                                </div>

                                          </div>
                                    </div>
                              </div>
                        
                        </section>
                  
                  <?php ;} ?>
                  
            

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
                  color: 'yellow',
                  maxParticles: 200
            });
      </script>
</body>
</html>
