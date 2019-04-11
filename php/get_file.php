<?php
function getFile(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "edulife";

        $connection = new mysqli($servername, $username, $password, $dbname);
        $connection->query("SET NAMES 'utf8'");
    
        // Controllo della connessione
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        $rsFile = mysqli_query($connection, "SELECT * FROM file order by id DESC LIMIT 1");
        $file = mysqli_fetch_all($rsFile, MYSQLI_ASSOC);
        mysqli_close($connection);
        for($i=0; $i < count($file); $i++){ //Qui al posto del link dell'immagine, ci andrà il link al video.
            echo "
                <a href='../media/pdf/".$file[$i]['nome']."'>Bilancio Sociale</a>
                
                ";
            }
        }

?>