<?php
    function getAllProjects(){
        $connection = mysqli_connect("serverName", "User", "", "psw");
        $rsProjects = mysqli_query($connection, "SELECT * FROM projects");
        $projects = mysqli_fetch_all($rsProjects, MYSQLI_ASSOC);
        mysqli_close($connection);
        return $projects;
    }
?>