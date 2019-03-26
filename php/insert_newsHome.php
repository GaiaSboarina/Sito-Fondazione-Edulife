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

    function getAllNewsHome(){
        $connection = mysqli_connect("localhost", "root", "", "edulife");
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $connection->query("SET NAMES 'utf8'");
        $rsNewsHome = mysqli_query($connection, "SELECT * FROM news ORDER BY id DESC LIMIT 2");
        $newsHome = mysqli_fetch_all($rsNewsHome, MYSQLI_ASSOC);
        mysqli_close($connection);

        $limiteCaratteriTitolo = 15;
        $limiteCaratteriContenuto = 50;

        for($i = 0; $i < count($newsHome); $i++) {
            echo "
                    <div class='container'>
                        <div class='row'>
                            <div class='col-xs-6'>
                                <h3>" . shorter($newsHome[$i]['titolo'], $limiteCaratteriTitolo) . "
                                </h3>
                                <p>" . shorter($newsHome[$i]['contenuto'], $limiteCaratteriContenuto) . "
                                </p>
                            </div>
                            <div class='col-xs-6' id='divider'></div>
                        ";
                $i++;
            echo "
                    <div class='col-xs-6'>";
                        if(array_key_exists($i, $newsHome)) {
                            echo "<h3>" . shorter($newsHome[$i]['titolo'], $limiteCaratteriTitolo) . "
                                </h3>
                                <p>" . shorter($newsHome[$i]['contenuto'], $limiteCaratteriContenuto) . "
                                </p>";
                                }                   
                                echo "
                            </div>
                        </div>
                    </div>
                ";
        }
    }
?>