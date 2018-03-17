<?php
        session_start();
        include("db_connect.php");
        $username=isset($_POST['username']) ? $_POST['username'] : '';
        $password=isset($_POST['password']) ? $_POST['password'] : '';
        echo $username;
        echo $password;
        $online=$_SESSION['online'];
        $user=$_SESSION['username'];
        $sql = "update `user` set online='0' where username='$user' ";
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else
        {
            $_SESSION["adminname"]="";
            $_SESSION["username"]="";
        header ("Location: Home.php");
          exit();
      }
?>