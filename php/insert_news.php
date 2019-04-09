<?php
    include("connection.php");
    function getAllNews(){

        // Creazione della connessione
        $conn = connection();
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $conn->query("SET NAMES 'utf8'");
        $query = "SELECT n.titolo, n.contenuto, i.nome FROM news n, img i WHERE n.id_img = i.id";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                    echo "
                            <div class='container'>
                            <h1 class='my-4'>".$row['titolo']."
                            </h1>
                            <div class='row'>
                                <div class='col-md-8'>
                                    <div><img border='0' src='../media/img/".$row['nome']."'></div>
                                </div>
                                <div class='col-md-4'>
                                    <p>".$row['contenuto']."</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    ";
                }
            }
    mysqli_close($conn);
}
?>