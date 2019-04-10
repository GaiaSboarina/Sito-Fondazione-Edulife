<?php 
    include("connection.php");

    function show(){
        if (isset($_POST['table']) && isset($_POST['id'])) {
            $conn = connection();
            $table = $_POST['table'];
            $id = $_POST['id'];
            
            if ($table == "evento") {
                $query = "SELECT t.titolo, t.contenuto, t.data_evento, i.nome FROM $table t, img i WHERE t.id = ? AND t.id_img = i.id";
            }else{
                $query = "SELECT t.titolo, t.contenuto, i.nome FROM $table t, img i WHERE t.id = ? AND t.id_img = i.id";
            }

            $stmt = $conn->prepare($query);
            $stmt->bind_param('s', $id);
            $stmt->execute();
            $result = $stmt->get_result();

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