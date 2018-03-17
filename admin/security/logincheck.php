<?php
        session_start();
        include("db_connect.php");
        $username=isset($_POST['username']) ? $_POST['username'] : '';
        $password=isset($_POST['password']) ? $_POST['password'] : '';
        echo $username;
        echo $password;
        $sql = "Select password,admin from `user` where username='$username'" ;
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else
        $row = mysqli_fetch_array($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		echo $row[0];
      if(($password==$row[0])/*===true*/) {
          $sql = "update `user` set online=1 where username='$username'";
            $result = mysqli_query($conn,$sql);
            if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
           }
          $_SESSION["username"] = $username;
          $_SESSION["online"] = "1";
          if($row['admin']==1){
              $_SESSION["adminname"] = $username;
              header ("Location: admin.php");
          }
          else{
          header ("Location: home.php");
          }
          exit();
      }
     else {
         $_SESSION["error"] = "<b style='color: red;'>Your Login Name or Password is invalid</b>";
          header ("Location: index.php");
         
      }
?>