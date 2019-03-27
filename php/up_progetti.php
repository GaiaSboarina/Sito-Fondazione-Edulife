<?php

    function connection($table, $titolo, $text){

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

        $errore = false;
        //Controllo della tabella in cui inserire i dati con relativo inserimento
        if ($table == "News"){
            $data = date('Y-m-d H:i:s');
            $sql = "INSERT INTO $table (data, titolo, contenuto)
            VALUES ('$data', '$titolo', '$text')";
    
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                $errore = true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }elseif ($table == "Evento"){
            $data = date('Y-m-d H:i:s');

            $sql = "INSERT INTO $table (titolo, contenuto, data)
            VALUES ('$titolo', '$text', '$data')";
    
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                $errore = true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }elseif ($table == "Progetto"){
            $sql = "INSERT INTO $table (titolo, contenuto)
            VALUES ('$titolo', '$text')";
    
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                $errore = true;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    
        }else{
            echo $table;
        }

        //Recupero dell'id del nuovo progetto/news/evento
        if ($errore == true) {
            $query = "SELECT * FROM $table";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                echo $id;
            }
        } else {
            echo "0 results";
        }
       
        $id = (int)$id;
        $file = $_FILES["fileToUpload"]["name"];
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

        $target_dir = "../media/img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        }
        

    }
    
    session_start();

    if ( isset( $_SESSION['user_id'] ) ) {
       //Controllo dei dati passati
       
        if(isset($_POST['titolo']) && isset($_POST['text']) && isset($_POST['tipo'])){
          
            //Parametri passati
            $titolo = $_POST['titolo'];
            $text = $_POST['text'];
            $tipo = $_POST['tipo'];
            
            $table = $tipo;

            //Richiamo della funzione connection
            connection($table, $titolo, $text);
        
        } 

    }else {
        // Redirect them to the login page
            header("Location: http://www.yourdomain.com/login.php");
        }

?>