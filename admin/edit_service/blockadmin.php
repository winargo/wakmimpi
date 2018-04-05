<?php<?php

        if(!isset($_SESSION["adminname"]) || $_SESSION["adminname"]==""){
        header ("Location: ../../index.php");
        exit();
        }
        ?>