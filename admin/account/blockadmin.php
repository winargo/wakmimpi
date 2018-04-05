<?php<?php

        if(!isset($_SESSION["adminname"]) || $_SESSION["adminname"]==""){
        header ("Location: login.php");
        exit();
        }
        ?>