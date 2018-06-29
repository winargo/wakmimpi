<?php
            include('db_connect.php');
                $sql="delete from `carousel` where order_number='".$_POST['no']."'";
            if(mysqli_query($conn, $sql)){
                header("Location: ..\account\daftar_banner.php");
                exit;
            }   
            else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };
        
        // Close connection
        mysqli_close($link);
            
?>