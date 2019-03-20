<?php
    function getAllProjects(){
        $connection = mysqli_connect("localhost", "root", "", "edulife");
        $connection->query("SET NAMES 'utf8'");
        $rsProjects = mysqli_query($connection, "SELECT * FROM progetti");
        $projects = mysqli_fetch_all($rsProjects, MYSQLI_ASSOC);
        mysqli_close($connection);
        for($i=0; $i < count($projects); $i++){
            echo "
                <div class='container'>
                    <h1 class='my-4'>".$projects[$i]['titolo']."
                    </h1>
                    <div class='row'>
                        <div class='col-md-8'>
                            <img class='img-fluid' src='http://placehold.it/750x500' alt=''>
                        </div>
                        <div class='col-md-4'>
                            <h3 class='my-3'>Descrizione progetto</h3>
                            <p>".$projects[$i]['contenuto']."</p>
                        </div>
                    </div>
                </div>
                <br>
            ";
        }
    }
?>