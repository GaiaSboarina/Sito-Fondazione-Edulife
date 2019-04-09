<?php
    function getAllProjects(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "edulife";

        // Creazione della connessione
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Controllo della connessione
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $conn->query("SET NAMES 'utf8'");
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
    $connection = mysqli_connect("localhost", "root", "", "edulife");
    //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
    $connection->query("SET NAMES 'utf8'");
    $rsProgetti = mysqli_query($connection, "SELECT * FROM progetto ORDER BY id DESC LIMIT 3");
    $progetti = mysqli_fetch_all($rsProgetti, MYSQLI_ASSOC);
    mysqli_close($connection);

    $limiteCaratteriTitolo = 30;
    $limiteCaratteriContenuto = 255;

    for($i = 0; $i < count($progetti); $i++) {
        echo "
            <div class='col-sm-12 col-md-4'>
                <h6 class='scritte_home'>" . corto($progetti[$i]['titolo'], $limiteCaratteriTitolo) . "
                </h6>
                <p>" . corto($progetti[$i]['contenuto'], $limiteCaratteriContenuto) . "
                </p>
            </div>
        ";
    }
}
?>