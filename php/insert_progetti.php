<?php
    include_once("connection.php");
    function getAllProjects(){
        

        // Creazione della connessione
        $conn = connection();
        
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $query = "SELECT p.titolo, p.contenuto, i.nome FROM progetto p, img i WHERE p.id_img = i.id";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                    echo "
                            <div class='container'>
                            <h1 class='my-4'>".$row['titolo']."
                            </h1>
                            <div class='row'>
                                <div class='col-md-8'>
                                    <div><img border='0' src='../media/img/".$row['nome']."'></div>
                                </div>
                                <div class='col-md-4'>
                                    <p>".$row['contenuto']."</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    ";
                }
            }
    mysqli_close($conn);
}

function corto($testo, $limiteCaratteri) {
    if (strlen($testo) > $limiteCaratteri) {
        $nuovo_testo = substr($testo, 0, $limiteCaratteri);
        $nuovo_testo = trim($nuovo_testo);
        return $nuovo_testo . "...";
    } else {
    return $testo;
    }
}

function getAllProgettiHome(){

    $connection = connection();
    
    //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
    $query = "SELECT p.id, i.nome, p.titolo, p.contenuto FROM progetto p, img i WHERE p.id_img = i.id ORDER BY p.id DESC LIMIT 3";

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