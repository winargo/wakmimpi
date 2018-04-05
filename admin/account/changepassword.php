<?php
    
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        include('db_connect.php');
        session_start();
        $sql="";
        $username=isset($_POST['oldusername']) ? $_POST['oldusername'] : '';
        $newusername = isset($_POST['username']) ? $_POST['username'] : '';
        $password=isset($_POST['password']) ? $_POST['password'] : '';
        $status=isset($_POST['status_admin']) ? $_POST['status_admin'] : '';
        echo $username;
        echo $newusername;
        echo $password;
        $sql = "Select * from `xuser` where username='$newusername'" ;
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else
        $row = mysqli_fetch_array($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		echo $row[0];
      if(($newusername==$row[0])/*===true*/) {
          $_SESSION['error']="<b style='color: red;'>Username Is already Used</b>";
          echo 'username';
           header("Location: edit_account.php");
           exit;
      }else{
            if(md5($_POST['password'])!=$row['password']){
                $_SESSION['error']="<b style='color: red;'>Password Doesn't Match</b>";
                echo 'pasword';
                  header("Location: edit_account.php");
                  exit;
            }
            //if($_POST['command']=="clear"){
             //   $sql="update `user` set password='' where username='".$_POST['username']."'";
            //}
                $sql="update `xuser` set username='".$_POST['username']."',status=".$_POST['status_admin']." where username='$username'";
            //else{
               // $sql="delete from `user` where username='".$_POST['username']."'";
            //}
            if(mysqli_query($conn, $sql)){
                header("Location: ..\account\list_accounts.php");
                exit;
            }   
            else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };
        
        // Close connection
        mysqli_close($link);
        }
        ?>
        <!--while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['employee_id'\]}</td>
              <td>{$row\['employee_name'\]}</td>
              <td>{$row\['employee_dob'\]}</td>
              <td>{$row\['employee_addr'\]}</td>
              <td>{$row\['employee_dept'\]}</td>
              <td>{$row\['employee_sal'\]}</td> 
            </tr>\n";
          }-->
    </body>
</html>