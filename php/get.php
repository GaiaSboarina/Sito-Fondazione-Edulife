<?php 
    include_once("connection.php");

    function show(){
        if (isset($_POST['table']) && isset($_POST['id'])) {
            $conn = connection();
            $table = $_POST['table'];
            $id = $_POST['id'];
            
            $query = "SELECT t.titolo, t.contenuto, i.nome FROM $table t, img i WHERE t.id = $id AND t.id_img = i.id";
           

            $result = $conn->query($query);

            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                
                echo "
                    <div class='col-sm-12 col-md-6' id='immagineNews'>
                        <img class='avatar' src='../media/img/".$row['nome']."'>
                    </div>
                    <div class='col-sm-12 col-md-6'>
                        <h3 class='title'>".$row['titolo']."</h3>
                        <p>".$row['contenuto']."</p>
                    </div>
                ";           
            }
        }
    }

?>