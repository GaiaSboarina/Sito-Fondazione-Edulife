<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="../js/script.js"></script>

    <title>Upload</title>
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-light navbar-expand-md bg-light justify-content-left">
                <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link ncol" href="#">Home <span class="sr-only">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ncol" href="//codeply.com">News e Eventi</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link ncol" href="//codeply.com">Progetti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ncol" href="#">Chi siamo</a> 
                        </li>
                        <li class="nav-item">
                                <a class="nav-link ncol" href="#">Contatti</a> 
                        </li>
                    </ul>
                </div>
            </nav>
    </header>    

    <form action="../php/up_progetti.php" method="POST" enctype="multipart/form-data">


        

        <div class="container">

            <div class="form-group">
                <label for="tipo">Progetto - Evento - News</label>
                <select class="form-control" id="tipo" name="tipo">
                    <option></option>
                    <option value="Progetto">Progetto</option>
                    <option value="Evento">Evento</option>
                    <option value="News">News</option>
                    <option value="Video">Video</option>
                </select>
            </div>

            <div id="showLink" class="form-group myDiv">
                <label for="link">Titolo</label>
                <input type="text" class="form-control" id="link" placeholder="Link" name="link">
            </div>

            <div id="showTitle" class="form-group myDiv">
                <label for="titolo">Titolo</label>
                <input type="text" class="form-control" id="titolo" placeholder="Titolo" name="titolo">
            </div>
        
            <div id="showContent" class="form-group myDiv">
                <label for="text">Contenuto</label>
                <textarea class="form-control" id="text" rows="3" name="text"></textarea>
            </div>

            <div id="showImg" class="form-group myDiv">
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>

            <div id="showDate" class="form-group myDiv">
                <label for="example-date-input" class="col-2 col-form-label">Date</label>
                <div class="col-10">
                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="data_evento">
                </div>
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        
    </form>

   

</body>
</html>