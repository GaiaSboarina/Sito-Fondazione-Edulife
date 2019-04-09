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
        $connection = mysqli_connect("localhost", "root", "", "edulife");
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $connection->query("SET NAMES 'utf8'");
        $rsNewsHome = mysqli_query($connection, "SELECT * FROM news ORDER BY id DESC LIMIT 3");
        $newsHome = mysqli_fetch_all($rsNewsHome, MYSQLI_ASSOC);
        mysqli_close($connection);

        $limiteCaratteriTitolo = 30;
        $limiteCaratteriContenuto = 255;

        for($i = 0; $i < count($newsHome); $i++) {
            echo "
                <div class='col-sm-12 col-md-4'>
                    <h6 class='scritte_home'>" . shorter($newsHome[$i]['titolo'], $limiteCaratteriTitolo) . "
                    </h6>
                    <p style='color:#000'>" . shorter($newsHome[$i]['contenuto'], $limiteCaratteriContenuto) . "
                    </p>
                </div>
            ";
        }
    }
?>