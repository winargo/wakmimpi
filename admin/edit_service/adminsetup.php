<?php
    session_start();
?>
   <html>
    <head>
        <title>Succesfully added</title>
    </head>
    <body>
      
       <?php
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        include('db_connect.php');
        $sql="";
        $username=isset($_POST['username']) ? $_POST['username'] : '';
        echo $username;
        echo $password;
        $sql = "Select username,isadmin from `xuser` where username='$username'" ;
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else
        $row = mysqli_fetch_array($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		echo $row[0];
      if(($username==$row[0])/*===true*/) {
          $_SESSION['error']="<b style='color: red;'>Username Is already Registered</b>";
              header("Location: register_admin.php");
            exit;
      }else{
            if($_POST['password']!=$_POST['repassword']){
                $_SESSION['error']="<b style='color: red;'>Password Retype Doesn't Match</b>";
                    header("Location: register_admin.php");
                    exit;
            }
            //if($_POST['command']=="clear"){
             //   $sql="update `user` set password='' where username='".$_POST['username']."'";
            //}
                $sql="insert into `xuser` (username,password,isadmin,status,tgl_gabung,online) values('".$_POST['username']."',md5('".$_POST['password']."'),1,'".$_POST['status']."',now(),0)";
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