<?php
    function getAllNews(){
        $connection = mysqli_connect("localhost", "root", "", "edulife");
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $connection->query("SET NAMES 'utf8'");
        $rsNews = mysqli_query($connection, "SELECT * FROM news");
        $news = mysqli_fetch_all($rsNews, MYSQLI_ASSOC);
        mysqli_close($connection);
        for($i=0; $i < count($news); $i++){
            echo "
                <div class='container'>
                    <h1 class='my-4'>".$news[$i]['titolo']."
                    </h1>
                    <div class='row'>
                        <div class='col-md-8'>
                            <img class='img-fluid' src=".$news[$i]['id_img']." alt=''>
                        </div>
                        <div class='col-md-4'>
                            <p>".$news[$i]['contenuto']."</p>
                        </div>
                    </div>
                </div>
                <br>
            ";
        }
    }
?>