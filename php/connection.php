<?php 

    function connection(){
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
        } else {
            return $conn;
        }
    }

    
    

?>