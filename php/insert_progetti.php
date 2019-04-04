<?php
    function getAllProjects(){
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
        //query necessaria per evitare che i caratteri non inglesi (tipo le lettere accentate) non vengano visualizzati
        $conn->query("SET NAMES 'utf8'");
        $query = "SELECT p.titolo, p.contenuto, i.nome FROM progetto p, img i WHERE p.id_img = i.id";
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