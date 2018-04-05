<?php
        session_start();
        include("db_connect.php");
        $username=isset($_POST['username']) ? $_POST['username'] : '';
        $password=isset($_POST['password']) ? $_POST['password'] : '';
        echo $username;
        echo $password;
        $sql = "Select password,isadmin from `xuser` where username='$username'" ;
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else
        $row = mysqli_fetch_array($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		echo $row[0];
      if((md5($password)==$row[0])/*===true*/) {
          if($row['isadmin']==1){
              $sql = "update `xuser` set online=1 where username='$username'";
            $result = mysqli_query($conn,$sql);
            if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            }
              $_SESSION["adminname"] = $username;
              header ("Location: list_accounts.php");
          }
          else{
              $sql = "update `xuser` set online=1 where username='$username'";
            $result = mysqli_query($conn,$sql);
            if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
           }
          $_SESSION["username"] = $username;
          $_SESSION["online"] = "1";
            header ("Location: ..\..\index.php");
          }
          exit();
      }
     else {
         $_SESSION["error"] = "<b style='color: red;'>Your Login Name or Password is invalid</b>";
          header ("Location: login.php");
         
      }
?>