<?php
    function getAllGxg(){
        $connection = mysqli_connect("localhost", "root", "", "edulife");
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $connection->query("SET NAMES 'utf8'");
        $rsGxg = mysqli_query($connection, "SELECT * FROM gxg");
        $gxg = mysqli_fetch_all($rsGxg, MYSQLI_ASSOC);
        mysqli_close($connection);
        for($i=0; $i < count($gxg); $i++){ //Qui al posto del link dell'immagine, ci andrà il link al video.
            echo "
                <div class='container'>
                    <h1 class='my-4'>".$gxg[$i]['titolo']."
                    </h1>
                    <div class='row'>
                        <div class='col-md-8'>
                            <iframe width='420' height='315'
                                src='https://www.youtube.com/embed/".$gxg[$i]['link']."'>
                            </iframe>
                        </div>
                        <div class='col-md-4'>
                            <h3 class='my-3'>Descrizione utente</h3>
                            <p>".$gxg[$i]['contenuto']."</p>
                        </div>
                    </div>
                </div>
                <br>
            ";
        }
    }

    function getGxg($link){
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
        $query = "SELECT * FROM gxg";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                if ($row['link']==$link) {
                    echo "
                    <div class='container'>
                        <h1 class='my-4'>".$row['titolo']."
                        </h1>
                        <div class='row'>
                            <div class='col-md-8'>
                                <iframe width='420' height='315'
                                    src='https://www.youtube.com/embed/".$row['link']."'>
                                </iframe>
                            </div>
                            <div class='col-md-4'>
                                <h3 class='my-3'>Descrizione utente</h3>
                                <p>".$row['contenuto']."</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    ";
                }
            } 
                
        
        }
        mysqli_close($conn);
    }

    function getGxgHome(){
        $connection = mysqli_connect("localhost", "root", "", "edulife");
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $connection->query("SET NAMES 'utf8'");
        $rsGxg = mysqli_query($connection, "SELECT * FROM gxg ORDER BY id DESC LIMIT 1");
        $gxg = mysqli_fetch_all($rsGxg, MYSQLI_ASSOC);
        mysqli_close($connection);
        for($i=0; $i < count($gxg); $i++){ //Qui al posto del link dell'immagine, ci andrà il link al video.
            echo "
                    <iframe width='420' height='315'
                        src='https://www.youtube.com/embed/".$gxg[$i]['link']."'>
                    </iframe>
                ";
            }
        }
?>