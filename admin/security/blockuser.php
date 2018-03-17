<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database ="flight";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if(!isset($_SESSION["username"]) || $_SESSION["username"]==""){
        header ("Location: login.php");
        exit();
        }
        ?>