<?php include "../php/get_file.php" ?>


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
      <link rel="stylesheet" href="../css/main.css">
      <link rel="stylesheet" href="../css/loader.css">

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

            <a href="../index.php"><div class="logo"><img src="../media/img/effe.png" id="imgLogo"></div></a>
            
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
                                    <a href="../pages/gxg.php">GxG</a>
                              </li>
                              <li>
                                    <?=getFile()?>
                              </li>
                        </ul>
                  </nav>
                  <nav>
				<p class="socialMobile" style="color: #e21212;">
                              <a href="https://www.facebook.com/FondazioneEdulife" target="_blank">
                                    <i class="fa fa-facebook social_home" aria-hidden="true" style="color: #e21212;"></i>
                              </a>
                              <a href="https://www.instagram.com/fondazione.edulife/?hl=it" target="_blank">
                                    <i class="fa fa-instagram social_home" aria-hidden="true" style="color: #e21212;"></i>
                              </a>
                              <a href="https://twitter.com/EdulifeOnlus" target="_blank">
                                    <i class="fa fa-twitter social_home" aria-hidden="true" style="color: #e21212;"></i>
                              </a>
                              <a href="https://www.google.it/maps/place/311+Verona/@45.4303778,10.9963367,17z/data=!3m1!4b1!4m5!3m4!1s0x477f5f3fd94d631f:0xb9a1156ee2f8c5e!8m2!3d45.4303741!4d10.9985254" target="_blank">
                                    <i class="fa fa-map-marker social_home" aria-hidden="true" style="color: #e21212;"></i>
                              </a>
                              <a href="#" target="_blank">
                                    <i class="fa fa-youtube social_home" aria-hidden="true" style="color: #e21212;"></i>
                              </a>
                              
				</p>
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
                        <li>
                              <a href="#" target="_blank">
                              <i class="fa fa-youtube social_home" aria-hidden="true" style="color: #e21212;"></i>
                              </a>
                        </li>       
                  </ul>
            </div>
                <div class="container" id="impaginazioneNews">
                      <div class="scrittaDonazioni" class="container">
                  <h3 class="scritte_home">Dona il tuo 5x1000</h3>
            </div>
                        <div class="backgroundNews">
                              <div class="row" id="testoDonazioni">
                                    <h6>
                                          Destina il tuo cinque per mille alla Fondazione Edulife Onlus per sostenere la ricerca educativa e promuovere progetti rivolti allo sviluppo umano e professionale dei <strong>giovani</strong>.<br> Grazie al tuo contributo proseguiremo a cofinanziare il progetto “Oratorio Learning Center” (vedi sezione progetti), per la creazione a Verona di uno spazio di animazione permanente per bambini, ragazzi, animatori, genitori e sacerdoti.., e metteremo a disposizione nuove borse di studio per i giovani che vogliano partecipare in percorsi professionalizzanti in Cina (progetto ETE).
                                          <br>
                                          <br>
                                          Infine continueremo a lavorare sempre e di più per promuovere un modello educativo centrato nella persona, in cui la formazione è intesa come un bene pubblico sociale per l’espressione del potenziale umano.<br>
                                          <br>
                                          La Fondazione Edulife ha una struttura di costi molto leggera (grazie al contributo di Edulife Spa) e quindi 
                                          <strong>tutto quanto donerai sarà dedicato a sostenere progetti che aiuteranno i giovani a scoprire i propri talenti ed il proprio progetto di vita.</strong>
                                          <br>
                                          <br>
                                          <strong>Come fare per donare il tuo 5 per mille a Fondazione Edulife:</strong>
                                          <br>
                                          <br>
                                          <u>Se presenti il Modello 730 o Unico:</u>
                                          <br>
                                          <br>
                                          <ol>
                                                <li>
                                                Compila la scheda sul modello 730 o Unico;
                                                </li><br>
                                                <li>
                                                Firma nel riquadro indicato come <strong>"Finanziamento della ricerca scientifica..."</strong>;
                                                </li><br>
                                                <li>
                                                Indica nel riquadro il codice fiscale di Fondazione Edulife: <strong>932 232 902 35</strong>.
                                                </li>
                                          </ol>
                                          <u>Se non sei tenuto a presentare la dichiarazione dei redditi:</u>
                                          <br>
                                          <br>
                                          Anche se non devi presentare la dichiarazione dei redditi puoi donare a Fondazione Edulife il tuo 5 per mille;
                                          <br>
                                          <br>
                                          <ol>
                                                <li>
                                                Compila la scheda fornita insieme al CUD dal tuo datore di lavoro o dall'ente erogatore della pensione, firmando nel riquadro indicato come <strong>"Finanziamento della ricerca scientifica..."</strong> e indicando il codice fiscale di Fondazione Edulife: <strong>932 232 902 35</strong>;
                                                </li><br>
                                                <li>
                                                Inserisci la scheda in una busta chiusa;
                                                </li><br>
                                                <li>
                                                Scrivi sulla busta <strong>"DESTINAZIONE CINQUE PER MILLE IRPEF"</strong> e indica il tuo cognome, nome e codice fiscale;
                                                </li><br>
                                                <li>
                                                Consegnala a un ufficio postale, a uno sportello bancario - che le ricevono gratuitamente - o a un intermediario abilitato alla trasmissione telematica (CAF, commercialisti...).
                                                </li>
                                          </ol>
                                    </h6>
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
