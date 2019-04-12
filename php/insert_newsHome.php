<?php
include_once("connection.php");
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

        $connection = connection();
        
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $query = "SELECT n.id, i.nome, n.titolo, n.contenuto FROM news n, img i WHERE n.id_img = i.id ORDER BY n.id DESC LIMIT 3";
        $result = $connection->query($query);
        $array = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($array, $row);
            }

        } 
        mysqli_close($connection);
        return $array;
        

    }
?>