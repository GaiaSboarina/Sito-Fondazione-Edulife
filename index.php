<?php include "php/insert_newsHome.php" ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/glider.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <title>Fondazione Edulife Onlus</title>
</head>
    <body style="background-color: rgb(236, 236, 236)">
        <header class="parallax">
            <nav class="navbar fixed-top navbar-light navbar-expand-md bg-light justify-content-left">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between align-items-left w-100" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link abc" href="#">Home <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="//codeply.com">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="//codeply.com">Progetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link abc" href="//codeply.com">Donazioni</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link abc" href="//codeply.com" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contattaci
                        </a>
                        <div class="nav-item dropdown-menu" href="//codeply.com" aria-labelledby="navbarDropdown">
                            <a class="nav-link dropdown-item abc" href="//codeply.com">Chi siamo</a>
                            <a class="nav-link dropdown-item abc" href="//codeply.com">Contatti</a>
                        </div>
                    </li>
                </ul>
                </div>
            </nav>
            
            <svg>
                <!-- Symbol-->
                <symbol id="s-text">
                    <text id="effect" text-anchor="middle" x="50%" y="40%" dy=".55em">
                        GxG
                    </text>
                </symbol>
                <!-- Duplicate symbols-->
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
                <use class="text" xlink:href="#s-text"></use>
            </svg>

            <div class="content">
                <h3>Giovani per Giovani</h3>
            </div>
        </header>
        <div class="container">
            <br>
            <div class="glider-contain">
                    <div class="glider">
                        <div><img alt="Test" src="media/img/eofw.webp"></div>
                        <div><img alt="Test" src="media/img/cdp.webp"></div>
                        <div><img alt="Test" src="media/img/ldr.webp"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=4"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=5"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=6"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=7"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=8"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=9"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=10"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=11"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=12"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=13"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=14"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=15"></div>
                        <div><img alt="Test" src="http://placehold.it/300x300?text=16"></div>
                    </div>
                    
                    <button class="glider-prev">&laquo;</button>
                    <button class="glider-next">&raquo;</button>
                    
                    <div id="dots"></div>
                    
                    <br>
            </div>
                    <div class="container">
                    <div class="row">
                        <?= getAllNewsHome() ?> 
                    </div>
                    </div>            
           
        </div>
        
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/glider_index.js"></script>
        <script src="js/glider.js"></script>
    </body>
</html>