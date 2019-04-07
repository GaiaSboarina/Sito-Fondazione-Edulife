
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="../js/script.js"></script>

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
                            <a class="nav-link ncol" href="../index.php">Home <span class="sr-only">Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ncol" href="upload.php">Inserisci</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link ncol" href="choose.php">Gestione</a>
                        </li>
                        
                        </li>
                    </ul>
                </div>
            </nav>
    </header>    
    <br>
    <br>
    <div class="container">
        <button class="btn btn-primary" onclick="inserisci();"> Inserisci </button>
        <button class="btn btn-primary" onclick="gestione();"> Gestisci </button>
    </div>
</body>
<script>
    function inserisci() {
        window.location.href = "upload.php";
    }

    function gestione() {
        window.location.href = "gestione.php";
    }
</script>
</html>