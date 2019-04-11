<?php

    function connection(){
        // Parametri per la connessione al database
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
        return $conn;
    }

    function progetti(){
        $conn = connection();
        $query = "SELECT * FROM progetto";
        $result = $conn->query($query);
        $array = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($array, $row);
            }
            // output data of each row

        } 
        return $array;
    }

    function eventi(){
        $conn = connection();
        $query = "SELECT * FROM evento";
        $result = $conn->query($query);
        $array = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($array, $row);
            }
            
        } 
        return $array;
    }

    function news(){
        $conn = connection();
        $query = "SELECT * FROM news";
        $result = $conn->query($query);
        $array = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($array, $row);
            }

        } 
        return $array;
    }

    function gxg(){
        $conn = connection();
        $query = "SELECT * FROM gxg";
        $result = $conn->query($query);
        $array = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($array, $row);
            }

        } 
        return $array;
    }

    function get_file(){
        $conn = connection();
        $query = "SELECT * FROM file";
        $result = $conn->query($query);
        $array = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($array, $row);
            }

        } 
        return $array;
    }

    function delete($table, $id){
        $conn = connection();
        echo "$table , $id";
        $sql = "DELETE FROM $table WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            header("Location: gestione.php");
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    }


    if (isset($_POST['table'])) {
        delete($_POST['table'], $_POST['id']);
    }
    
    
    
?>