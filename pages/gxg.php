<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <title>GXG</title>
    <h1>GxG</h1>
</head>
<body>
<style>
p, h1 
{
    padding-top: 1%;
}
#footer
{
    background: #eee;
    padding: 0 0 30px 0;
    color: #000000;
    font-size: 14px;
}

#footer .footer-top 
{
    background: #eee;
    padding: 30px 0px 15px 0px;
}

#footer .footer-top .footer-info
{
    margin-bottom: 15px;
}

#footer .footer-top .footer-links ul a 
{
    color: #e21212;
}

#footer .footer-top .footer-links ul a:hover 
{
    color : #a30b0b;
}

#footer .footer-top .footer-contact 
{
    margin-bottom: 15px;
}

#footer .footer-top .footer-contact 
{
    line-height: 15px;
}

#footer .footer-top .footer-newsletter 
{
    margin-bottom: 15px;
}

#footer .footer-top .footer-newsletter input[type = "email"] 
{
    border : 0;
    padding: 3px 4px;
    width: 65%;
}

#footer .footer-top .footer-newsletter input[type= "submit"] 
{
    background: #e21212;
    border: 0;
    width: 35%;
    padding: 3px 0;
    text-align: center;
    color: #fff;
    transition: 0.3s;
    cursor: pointer;
}

#footer .footer-top .footer-newsletter input[type="submit"]:hover
{
    background: #13a456;
}

#footer .copyright
{
    text-align: center;
    padding-top: 15px;
}

#footer .credits 
{
    text-align: center;
    font-size: 13px;
    color: #ddd;
}

.footer-contact 
{
    font-size: 35px; 
}

#img 
{
    border-bottom: #e21212 solid 3px;
    padding-bottom: 5px;
    margin-left: 60px;
    width: 100px;
   
}

#testo
{
    padding-top: 10px;
}

.fab 
{
    color: #e21212;
}

.fab:hover 
{
    color: #a30b0b;
}

@font-face 
{
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    src: local('Open Sans'), local('OpenSans'), url('../script/woff.woff') format('woff');
}

h1, h2, h3, h4, blockquote, q, .maia-nav ul 
{
    font-family: 'open sans',arial,sans-serif;
}
h1
{
    color: red;
    text-align: center;
}
h2 
{
    color:firebrick;
}
#video
{
    height: 120px;
    width: 10%;
    background-color: lightgrey;
    float:left;
    border: 2px solid white;
}
#video1 
{
    padding-top:2%;
}
</style>
    <div class="container">
        <div class="row">        
            <div class="col-md-6 col-xs-6 text-right" style="border: none;">
                <div id="video">IMMAGINE</div>
            </div>
            <div class="col-md-6 col-xs-6">
                <h2>GIOVANI x GIOVANI</h2>
                <p>                    
                    GxG è il portale di Fondazione Edulife che permette di condividere le storie e le passioni delle persone che compongono questa realtà.
                    
                    Storie di giovani per giovani, storie di vita vissuta, storie che tutti avremmo potuto vivere.
                    
                    Tutti noi abbiamo una storia da raccontare.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-6 text-right" id="video1">
                <div id="video">VIDEO</div>
            </div>
            <div class="col-md-6 col-xs-6">
                <h2>CRISTIAN ZENI</h2>
                <p>
                    Facilitatore tecnologico di Edulife spa, Cristian Zeni è appassionato di programmazione, con tutte le sue sfacettature.
                    Fin da subito ha messo mani sulle tastiere, studiando, riflettendo sui codici per riuscire a portare la sua esperienza in aziende come Edulife spa.
                    Scopri subito la sua esperienza, clicca sul video per entrare nel suo mondo.
                </p>
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
                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>I nostri social</h4>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.facebook.com/FondazioneEdulife" class="facebook"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://twitter.com/EdulifeOnlus" class="twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-newsletter">
                            <h4>Dove siamo</h4>
                            <div class="mappa">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d2799.943064754773!2d10.99683911507071!3d45.43064904370334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x477f5f3fd94d631f%3A0xb9a1156ee2f8c5e!2s311+Verona%2C+Lungadige+Galtarossa%2C+21%2C+37133+Verona+VR!3m2!1d45.430374099999995!2d10.9985254!5e0!3m2!1sit!2sit!4v1553077721735" width="320" height="200" frameborder="0" style="border:0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="copyright text-muted">Copyright &copy;Edulife 2019</p>
        </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    </body>
    </html>