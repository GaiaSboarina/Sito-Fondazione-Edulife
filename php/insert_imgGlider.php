<?php

function getAllImgGlider(){
    $connection = mysqli_connect("localhost", "root", "", "edulife");
    //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
    $connection->query("SET NAMES 'utf8'");
    $rsGxg = mysqli_query($connection, "SELECT * FROM img WHERE id = (SELECT id_img FROM gxg ORDER BY id DESC LIMIT 10)");
    $gxg = mysqli_fetch_all($rsGxg, MYSQLI_ASSOC);
    mysqli_close($connection);
    for($i=0; $i < count($gxg); $i++){
        echo "
        <div><img src='media/img/".$gxg[$i]['nome']."'></div>
        ";
    }
}

?>