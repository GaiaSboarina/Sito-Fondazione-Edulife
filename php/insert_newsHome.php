<?php
function shorter($testo, $limiteCaratteri) {
    if (strlen($testo) > $limiteCaratteri) {
        $nuovo_testo = substr($testo, 0, $limiteCaratteri);
        $nuovo_testo = trim($nuovo_testo);
        return $nuovo_testo . "...";
    } else {
    return $testo;
    }
}

/*
    function shorter($testo, $limiteCaratteri) {
        $parole = explode(" ", $testo);

        $testoFinale = "";
        $index = 0;

        while(strlen($testoFinale) <= $limiteCaratteri) {
            $testoFinale = $testoFinale . " " . $parole[$index];
            $index++;
        }

        $testoFinale = $testoFinale . " [...]";

        return $testoFinale;
    }
*/

    function getAllNewsHome(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "edulife";

        $connection = new mysqli($servername, $username, $password, $dbname);
        $connection->query("SET NAMES 'utf8'");

        // Controllo della connessione
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $rsNewsHome = mysqli_query($connection, "SELECT * FROM news ORDER BY id DESC LIMIT 3");
        $newsHome = mysqli_fetch_all($rsNewsHome, MYSQLI_ASSOC);
        mysqli_close($connection);

        $limiteCaratteriTitolo = 30;
        $limiteCaratteriContenuto = 255;

        for($i = 0; $i < count($newsHome); $i++) {
            echo "
            <form class='col-sm-12 col-md-4' action='pages/show.php' method='post'>

            <input type='hidden' name='table' value='news' />
            <input type='hidden' name='id' value='".$newsHome[$i]['id']."' />

                <button type='submit' style='button:hover{border: 1px; red;}'>
                    <div class='card' style='background-color: rgba(255, 255, 255, 0.5) !important; width: 18rem;'>
                        <img class='card-img-top' src='../media/img/img_top.jpg' alt=' Card image cap'>
                        <div class='card-body'>
                            <h6 class='scritte_home'>" . shorter($newsHome[$i]['titolo'], $limiteCaratteriTitolo) . "
                            </h6>
                            <p class='card-text'style='color:#000; font-size: 10px'>" . shorter($newsHome[$i]['contenuto'], $limiteCaratteriContenuto) . "
                            </p>
                        </div>
                    </div>
                </button>    
            </form>
            ";
        }

    }

    

?>