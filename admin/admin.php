<?php
// Always start this first
session_start();

function verify($password, $input_password, $con){
    if (md5($password) == $input_password) {
        return true;
    }else {
        return false;
    }

    
}

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "edulife";
        // Getting submitted user data from database
        $con = new mysqli($db_host, $db_user, $db_pass, $db_name);
        $stmt = $con->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();
            		
    	// Verify user password and set $_SESSION
    	if ( verify( $_POST['password'], $user->password, $con ) ) {
            $_SESSION['user_id'] = $user->ID;
            header("Location: upload.php");
    	}else {
            echo "password non verificata";
        }
    }
}
?>