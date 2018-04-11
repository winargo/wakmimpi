
<?php
    session_start();
    include("blockadmin.php");
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        include('db_connect.php');
        $sql="";
        $username=isset($_POST['username']) ? $_POST['username'] : '';
        echo $username;
        echo $password;
        $sql = "Select * from `gameplay` where judul='".$_POST['title']."' or steps='".$_POST['content']."'" ;
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        
        else{
            echo $sql;
            $row=mysqli_fetch_array($result);
            if($row['judul']==$_POST['title'] || $row['steps']==$_POST['content']){
                $_SESSION['error']="<b style='color: red;'>Duplicate Data registered Please Recheck</b>";
              header("Location: create_carabermain.php");
                exit;
            }
            else{
                //if($_POST['command']=="clear"){
             //   $sql="update `user` set password='' where username='".$_POST['username']."'";
            //}
                $sql="insert into `gameplay` (judul,steps,isactive,username) values('".$_POST['title']."','".$_POST['content']."',1,'".$_SESSION['adminname']."')";
            //else{
               // $sql="delete from `user` where username='".$_POST['username']."'";
            //}
            if(mysqli_query($conn, $sql)){
                header("Location: ..\account\cara_bermain.php");
                exit;
            }   
            else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };
        
        // Close connection
        mysqli_close($link);
            }
            
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