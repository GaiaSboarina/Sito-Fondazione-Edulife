<?php
include_once("connection.php");
    function getNews(){
        
        // Creazione della connessione
        $conn = connection();
       
        $query = "SELECT * FROM news n, img i WHERE n.id_img = i.id";
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
?>