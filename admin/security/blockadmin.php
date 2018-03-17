<?php
        include ('db_connect.php');
        if(!isset($_SESSION["adminname"]) || $_SESSION["adminname"]==""){
        header ("Location: home.php");
        exit();
        }
        ?>