<?php
    function getAllNewsHome(){
        $connection = mysqli_connect("localhost", "root", "", "edulife");
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $connection->query("SET NAMES 'utf8'");
        $rsNewsHome = mysqli_query($connection, "SELECT * FROM news ORDER BY id DESC LIMIT 2");
        $newsHome = mysqli_fetch_all($rsNewsHome, MYSQLI_ASSOC);
        mysqli_close($connection);
        for($i=0; $i < count($newsHome); $i += 2){
            echo "
                <div class='container'>
                    <div class='row'>
                        <div class='col-xs-6'>
                            <h1>".$newsHome[$i]['titolo']."
                            </h1>
                            <p>".$newsHome[$i]['contenuto']."
                        </div>
                        <div class='col-xs-6'>
                            <h1>".$newsHome[$i]['titolo']."
                            </h1>
                            <p>".$newsHome[$i]['contenuto']."
                        </div>
                    </div>
                </div>
            ";
            var_dump($newsHome);
        }
    }
?>