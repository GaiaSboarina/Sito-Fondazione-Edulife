<?php

    function connection(){
        $connection = mysqli_connect("localhost", "root", "", "edulife");
        return $connection;
    }

    if(isset($_POST['titolo']) && isset($_POST['text']) && isset($_POST['file']) && isset($_POST['tipo'])){

        $titolo = $_POST['titolo'];
        $text = $_POST['text'];
        $file = $_POST['file'];
        $tipo = $_POST['tipo'];
        $table = "progetti";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "edulife";

        switch ($tipo) {
            case 'progetto':
                $table = 'progetti';
                break;
            case 'news':
                $table = 'news';
                break;
            case 'evento':
                $table = 'eventi';
                break;
            default:
                # code...
                break;
        }

        echo $table;

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 


        if ($table == "news"){
            $data = date('Y-m-d H:i:s');

            $sql = "INSERT INTO $table (data, titolo, contenuto)
            VALUES ('$data', '$titolo', '$text')";
    
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }else {
            $sql = "INSERT INTO $table (titolo, contenuto)
            VALUES ('$titolo', '$text')";
    
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    
        }

        
       

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

        $sql = "INSERT INTO img (nome, id_".$table.")
        VALUES ('$file', '$id')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        

        }

?>