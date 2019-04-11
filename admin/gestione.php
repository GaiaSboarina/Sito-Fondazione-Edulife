<?php 


include("select.php"); 
    $array_progetti=progetti();
    $array_eventi=eventi();
    $array_news=news();
    $array_gxg=gxg();
    $array_file=get_file();
?>
<!DOCTYPE html>
<html lang="en">
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
                        </ul>
                    </div>
                </nav>
        </header>   

        <div class="container">
            <h1>Progetti</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Contenuto</th>
                    <th scope="col">Img</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php 
                    for ($i=0; $i < count($array_progetti); $i++) { 
                        echo "<tr>";
                        foreach ($array_progetti[$i] as $key => $value) {
                            echo "<td>$value</td>";
                        }
                        $id = $array_progetti[$i]['id'];
                        echo '
                        <form action="select.php" method="post">
                            <input type="hidden" name="table" value="progetto">
                            <input type="hidden" name="id" value="'.$id.'">
                            <td><button class="btn btn-danger" onclick="validate(event);" type="submit">Elimina</button></td>
                        </form>';
  
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>

            <br>
            <h1>Eventi</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Contenuto</th>
                    <th scope="col">Data Evento</th>
                    <th scope="col">Data Inserimento</th>
                    <th scope="col">Img</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php 
                    for ($i=0; $i < count($array_eventi); $i++) { 
                        echo "<tr>";
                        foreach ($array_eventi[$i] as $key => $value) {
                            echo "<td>$value</td>";
                        }
                        $id = $array_eventi[$i]['id'];
                        echo '
                        <form action="select.php" method="post">
                            <input type="hidden" name="table" value="evento">
                            <input type="hidden" name="id" value="'.$id.'">
                            <td><button class="btn btn-danger" onclick="validate(event);" type="submit">Elimina</button></td>
                        </form>';
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>

            <br>
            <h1>News</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Contenuto</th>
                    <th scope="col">Data Inserimento</th>
                    <th scope="col">Img</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php 
                    for ($i=0; $i < count($array_news); $i++) { 
                        echo "<tr>";
                        foreach ($array_news[$i] as $key => $value) {
                            echo "<td>$value</td>";
                        }
                        $id = $array_news[$i]['id'];
                        echo '
                        <form action="select.php" method="post">
                            <input type="hidden" name="table" value="news">
                            <input type="hidden" name="id" value="'.$id.'">
                            <td><button class="btn btn-danger" onclick="validate(event);" type="submit">Elimina</button></td>
                        </form>';
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>

            <br>
            <h1>Video</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Link</th>
                    <th scope="col">Link2</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Contenuto</th>
                    <th scope="col">Img</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php 
                    for ($i=0; $i < count($array_gxg); $i++) { 
                        echo "<tr>";
                        foreach ($array_gxg[$i] as $key => $value) {
                            echo "<td>$value</td>";
                        }
                        $id = $array_gxg[$i]['id'];
                        echo '
                        <form action="select.php" method="post">
                            <input type="hidden" name="table" value="news">
                            <input type="hidden" name="id" value="'.$id.'">
                            <td><button class="btn btn-danger" onclick="validate(event);" type="submit">Elimina</button></td>
                        </form>';
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>

            <br>
            <h1>File</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php 
                    for ($i=0; $i < count($array_file); $i++) { 
                        echo "<tr>";
                        foreach ($array_file[$i] as $key => $value) {
                            echo "<td>$value</td>";
                        }
                        $id = $array_file[$i]['id'];
                        echo '
                        <form action="select.php" method="post">
                            <input type="hidden" name="table" value="news">
                            <input type="hidden" name="id" value="'.$id.'">
                            <td><button class="btn btn-danger" onclick="validate(event);" type="submit">Elimina</button></td>
                        </form>';
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>

        </div>

    
    </body>
</html>