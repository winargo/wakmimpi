<?php
            include('db_connect.php');
                $sql="delete from `togel` where fulldate='".$_POST['tanggal']."' and result='".$_POST['nomor']."' and type='".$_POST['type']."'";
            if(mysqli_query($conn, $sql)){
                header("Location: ..\account\history_nomor.php");
                exit;
            }   
            else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };
        
        // Close connection
        mysqli_close($link);
            
?>