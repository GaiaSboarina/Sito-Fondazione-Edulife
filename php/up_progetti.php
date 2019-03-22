<?php

    function connection($table, $titolo, $text, $file){

        // Parametri per la connessione al database
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

        //Controllo della tabella in cui inserire i dati con relativo inserimento
        if ($table == "news"){
            $data = date('Y-m-d H:i:s');

            $sql = "INSERT INTO $table (data, titolo, contenuto)
            VALUES ('$data', '$titolo', '$text')";
    
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else if ($table == "evento"){
            $data = date('Y-m-d H:i:s');

            $sql = "INSERT INTO $table (titolo, contenuto, data)
            VALUES ('$titolo', '$text', '$data')";
    
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }else if ($table == "progetto"){
            $sql = "INSERT INTO $table (titolo, contenuto)
            VALUES ('$titolo', '$text')";
    
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    
        }

        //Recupero dell'id del nuovo progetto/news/evento
        $query = "SELECT * FROM $table";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
            }
        } else {
            echo "0 results";
        }
       
        $id = (int)$id;

        //inserimento dell'immagine nella tabella img
        $sql = "INSERT INTO img (nome, id_".$table.")
        VALUES ('$file', '$id')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Chiusura della connessione
        $conn->close();

    }

    //Controllo dei dati passati
    if(isset($_POST['titolo']) && isset($_POST['text']) && isset($_POST['file']) && isset($_POST['tipo'])){

        //Parametri passati
        $titolo = $_POST['titolo'];
        $text = $_POST['text'];
        $file = $_POST['file'];
        $tipo = $_POST['tipo'];
        
        $table = $tipo;

        //Richiamo della funzione connection
        connection($table, $titolo, $text, $file);

    }

?>