    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>

    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-light navbar-expand-md bg-light justify-content-center">
    <a href="/" class="navbar-brand mr-0">Brand</a> 
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="//codeply.com">News e Eventi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Chi siamo</a> 
            </li>
        </ul>
        <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">
            <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-facebook mr-1"></i></a> </li>
            <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-twitter"></i></a> </li>
        </ul>
    </div>
</nav>
    </header>    

    <form action="../php/up_progetti.php" method="POST">
        <div class="container">
            <div class="form-group">
                <label for="titolo">Titolo</label>
                <input type="text" class="form-control" id="titolo" placeholder="Titolo" name="titolo">
            </div>
        
            <div class="form-group">
                <label for="text">Example textarea</label>
                <textarea class="form-control" id="text" rows="3" name="text"></textarea>
            </div>

            <div class="form-group">
                <label for="file">Example file input</label>
                <input type="file" class="form-control-file" id="file" name="file">
            </div>
            <div class="form-group">
                <label for="tipo">Example select</label>
                <select class="form-control" id="tipo" name="tipo">
                    <option>Progetto</option>
                    <option>Evento</option>
                    <option>News</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        
    </form>


</body>
</html>