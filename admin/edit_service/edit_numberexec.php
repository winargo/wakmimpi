
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
        $sql = "Select * from `togel` where type='".$_POST['pool_type']."' and result='".$_POST['number_out']."'" ;
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        
        else{
            $row=mysqli_fetch_array($result);
            if($row['type']==$_POST['pool_type'] && $row['result']==$_POST['number_out']){
                $_SESSION['error']="<b style='color: red;'>Duplicate Data registered Please Recheck</b>";
                header("Location: ..\account\history_nomor.php");
                exit;
            }
            else{
                //if($_POST['command']=="clear"){
             //   $sql="update `user` set password='' where username='".$_POST['username']."'";
            //}
                $sql="update `togel` set type='".$_POST['pool_type']."',result='".$_POST['number_out']."',username='".$_SESSION['adminname']."' where type='".$_POST['poolold']."' and result='".$_POST['numberold']."'";
            //else{
               // $sql="delete from `user` where username='".$_POST['username']."'";
            //}
            if(mysqli_query($conn, $sql)){
                header("Location: ..\account\history_nomor.php");
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