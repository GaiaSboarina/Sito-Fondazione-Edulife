<?php
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

    function getAllNewsHome(){
        $connection = mysqli_connect("localhost", "root", "", "edulife");
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $connection->query("SET NAMES 'utf8'");
        $rsNewsHome = mysqli_query($connection, "SELECT * FROM news ORDER BY id DESC LIMIT 2");
        $newsHome = mysqli_fetch_all($rsNewsHome, MYSQLI_ASSOC);
        mysqli_close($connection);

        $limiteCaratteriTitolo = 30;
        $limiteCaratteriContenuto = 255;

        for($i = 0; $i < count($newsHome); $i++) {
            echo "
                <div class='col-sm-6'>
                    <h2>" . shorter($newsHome[$i]['titolo'], $limiteCaratteriTitolo) . "
                    </h2>
                    <p>" . shorter($newsHome[$i]['contenuto'], $limiteCaratteriContenuto) . "
                    </p>
                </div>
            ";
        }
    }
?>