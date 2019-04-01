<?php
    function getAllProjects(){
        $connection = mysqli_connect("localhost", "root", "", "edulife");
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $connection->query("SET NAMES 'utf8'");
        $rsProgetto = mysqli_query($connection, "SELECT * FROM progetto");
        $progetto = mysqli_fetch_all($rsProgetto, MYSQLI_ASSOC);
        mysqli_close($connection);
        for($i=0; $i < count($progetto); $i++){
            echo "
                <div class='container'>
                    <h1 class='my-4'>".$progetto[$i]['titolo']."
                    </h1>
                    <div class='row'>
                        <div class='col-md-8'>
                            <img class='img-fluid' src='".$progetto[$i]['titolo']."' alt=''>
                        </div>
                        <div class='col-md-4'>
                            <h3 class='my-3'>Descrizione progetto</h3>
                            <p>".$progetto[$i]['contenuto']."</p>
                        </div>
                    </div>
                </div>
                <br>
            ";
        }
    }
?>