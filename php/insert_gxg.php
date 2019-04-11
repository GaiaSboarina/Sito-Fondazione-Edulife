<?php

    function getGxg(){
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

        $query = "SELECT * FROM gxg g, img i WHERE g.id_img = i.id";
        $result = $conn->query($query);
        $array = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($array, $row);
            }

        } 
        mysqli_close($conn);
        return $array;
        
        
    }

    function getGxgHome(){
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
        $rsGxg = mysqli_query($connection, "SELECT g.link, i.nome FROM gxg g, img i WHERE g.id_img = i.id ORDER BY g.id DESC LIMIT 1");
        $gxg = mysqli_fetch_all($rsGxg, MYSQLI_ASSOC);
        mysqli_close($connection);
        for($i=0; $i < count($gxg); $i++){ //Qui al posto del link dell'immagine, ci andrà il link al video.
            echo "
               
                <iframe src='https://www.youtube.com/embed/".$gxg[$i]['link']."?rel=0&amp;autoplay=1&mute=1&loop=1&&playlist=".$gxg[$i]['link']."&showinfo=0&iv_load_policy=3&controls=0' frameborder='0' allowfullscreen></iframe>
                
                ";
            }
        }
?>