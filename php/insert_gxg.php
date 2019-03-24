<?php
    function getAllGxg(){
        $connection = mysqli_connect("localhost", "root", "", "edulife");
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $connection->query("SET NAMES 'utf8'");
        $rsGxg = mysqli_query($connection, "SELECT * FROM gxg");
        $news = mysqli_fetch_all($rsGxg, MYSQLI_ASSOC);
        mysqli_close($connection);
        for($i=0; $i < count($gxg); $i++){
            echo "
                <div class='container'>
                    <h1 class='my-4'>".$gxg[$i]['titolo']."
                    </h1>
                    <div class='row'>
                        <div class='col-md-8'>
                            <img class='img-fluid' src='http://placehold.it/500x300' alt=''>
                        </div>
                        <div class='col-md-4'>
                            <h3 class='my-3'>Descrizione progetto</h3>
                            <p>".$gxg[$i]['contenuto']."</p>
                        </div>
                    </div>
                </div>
                <br>
            ";
        }
    }
?>