<?php
include("connection.php");
function getAllImgGlider(){

    // Creazione della connessione
    $conn = connection();

    //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
 
    $query = "SELECT i.id, i.nome, g.link FROM img i, gxg g WHERE g.id_img = i.id ORDER BY id DESC LIMIT 10";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "
            <a href='../pages/gxg.php?link=".$row['link']."'><div><img border='0' src='media/img/".$row['nome']."'></div></a>
        ";
        }
    
    }
    mysqli_close($conn);
}

?>