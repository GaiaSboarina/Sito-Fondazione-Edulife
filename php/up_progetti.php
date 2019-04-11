<?php   
    
    function connection($table){

        if (!$table == "File") {
            $titolo = $_POST['titolo'];
            $text = $_POST['text'];
        }

        // Parametri per la connessione al database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "edulife";

        // Creazione della connessione
        $conn =  new mysqli($servername, $username, $password, $dbname);
        $conn->query("SET NAMES 'utf8'");

        // Controllo della connessione
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
            //inserimento dell'immagine nella tabella img
            $file = $_FILES["fileToUpload"]["name"];
            
            if ($table == "File") {
                $sql = "INSERT INTO file (nome)
                VALUES ('$file')";

                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully <br>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

            }else {
                $sql = "INSERT INTO img (nome)
                VALUES ('$file')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully <br>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
    
                //Recupero dell'id della nuova img
                
                $query = "SELECT * FROM img";          
                $result = $conn->query($query);
                echo var_dump($result); 
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        $id = (int)$id;
                    }
                        
                }else {
                    echo "errore";
                }
            }

            
        
            

            //Controllo della tabella in cui inserire i dati con relativo inserimento
            if ($table == "News"){
                $data = date('Y-m-d H:i:s');
                $sql = "INSERT INTO $table (titolo, contenuto, data, id_img)
                VALUES ('$titolo', '$text', '$data', '$id')";
        
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }elseif ($table == "Evento"){
                $data = date('Y-m-d H:i:s');
                $data_evento = $_POST['data_evento'];

                $sql = "INSERT INTO $table (titolo, contenuto, data_evento, data, id_img)
                VALUES ('$titolo', '$text', '$data_evento', '$data', '$id')";
        
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }elseif ($table == "Progetto"){
                $sql = "INSERT INTO $table (titolo, contenuto, id_img)
                VALUES ('$titolo', '$text', '$id')";
        
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        
            }elseif ($table == "Video"){
                $link = $_POST['link'];
                $table = "gxg";
                $data = date('Y-m-d H:i:s');
                echo "<br>$link, $titolo, $text, $data <br>";
                $sql = "INSERT INTO $table (link, titolo, contenuto, data, id_img)
                VALUES ('$link', '$titolo', '$text', '$data', '$id')";
        
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        
            }else{
                echo $table;
            }

            // Chiusura della connessione
            $conn->close();
            header("Location: ../admin/choose.php");
        

        

    }
    
    session_start();

    if ( isset( $_SESSION['user_id'] ) ) {
       //Controllo dei dati passati
       
        if(isset($_POST['tipo'])){
          
            //Parametri passati
            $tipo = $_POST['tipo'];
            
            
            $table = $tipo;
            if ($table == "File") {
                $uploaddir = '../media/pdf/';
                $uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
                
                echo '<pre>';
                if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
                    echo "File is valid, and was successfully uploaded.\n";
                    connection($table);
                } else {
                    echo "Possible file upload attack!\n";
                    connection($table);
                }
            }
                
            }else{
                $target_dir = "../media/img/";
            
            
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image
                
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" && $imageFileType != "pdf") {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
                
                $titolo = $_POST['titolo'];
                $text = $_POST['text'];
                //Richiamo della funzione connection
                connection($table);
            
            }
        }
    else {
        // Redirect them to the login page
            header("Location: ../admin/choose.php");
        }
    
    

?>