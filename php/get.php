<?php 
    include("connection.php");

    function show(){
        if (isset($_GET['table']) && isset($_GET['id'])) {
            $conn = connection();
            $table = $_GET['table'];
            $id = $_GET['id'];
            
            if ($table == "evento") {
                $query = "SELECT t.titolo, t.contenuto, t.data_evento, i.nome FROM $table t, img i WHERE t.id = $id AND t.id_img = i.id";
            }else{
                $query = "SELECT t.titolo, t.contenuto, i.nome FROM $table t, img i WHERE t.id = $id AND t.id_img = i.id";
            }

            $result = $conn->query($query);

            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                if ($table == "evento") {
                    echo "
                        <div class='col-sm-12 col-md-6'>
                            <img src='../media/img/".$row['nome']."'>
                        </div>
                        <div class='col-sm-12 col-md-6'>
                            <h1>".$row['titolo']."</h1>
                            <h2>".$row['data_evento']."</h2>
                            <p>".$row['contenuto']."</p>
                        </div>
                    ";
                } else {
                    echo "
                        <div class='col-sm-12 col-md-6'>
                            <img src='../media/img/".$row['nome']."'>
                        </div>
                        <div class='col-sm-12 col-md-6'>
                            <h1>".$row['titolo']."</h1>
                            <p>".$row['contenuto']."</p>
                        </div>
                    ";
                }
                
            }
        }
    }

?>