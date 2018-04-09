
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
        $sql = "Select * from `customerservice` where type='".$_POST['sosmedbrand']."' and contact='".$_POST['sosmed']."'" ;
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        
        else{
            $row=mysqli_fetch_array($result);
            if($row['contact']==$_POST['sosmed']){
                $_SESSION['error']="<b style='color: red;'>Duplicate Data registered Please Recheck</b>";
              header("Location: cs_create.php");
                exit;
            }
            else{
                //if($_POST['command']=="clear"){
             //   $sql="update `user` set password='' where username='".$_POST['username']."'";
            //}
                $sql="insert into `customerservice` (imagedir,type,contact,username) values('','".$_POST['sosmedbrand']."','".$_POST['sosmed']."','".$_SESSION['adminname']."')";
            //else{
               // $sql="delete from `user` where username='".$_POST['username']."'";
            //}
            if(mysqli_query($conn, $sql)){
                header("Location: ..\account\list_cs.php");
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
    </body>
</html>