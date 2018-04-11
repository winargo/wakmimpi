
<?php
    session_start();
    include("blockadmin.php");
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        include('db_connect.php');
                $sql="update `header` set active=0";
                
            //else{
               // $sql="delete from `user` where username='".$_POST['username']."'";
            //}
            if(mysqli_query($conn, $sql)){
                $sql1="update `header` set active=1 where created='".$_POST['date']."'";
                 if(mysqli_query($conn, $sql1)){
                    header("Location: ..\account\info_terkini.php");
                    exit;
                }   
                else{
                echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
                };
            }   
            else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };

           
        
        // Close connection
        mysqli_close($link);
            
            
        
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