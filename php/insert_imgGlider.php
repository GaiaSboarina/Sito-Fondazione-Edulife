<?php

function getAllImgGlider(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "edulife";

    // Creazione della connessione
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->query("SET NAMES 'utf8'");
    // Controllo della connessione
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
 
    $query = "SELECT i.id, i.nome, g.link FROM img i, gxg g WHERE g.id_img = i.id ORDER BY id DESC LIMIT 10";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "
            <a href='../pages/gxg.php?link=".$row['link']."'><div><img height='100px' border='0' src='media/img/".$row['nome']."'></div></a>
        ";
        }
    
    }
    mysqli_close($conn);
}

?>