<?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    session_start();
    include ('db_connect.php');
?>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/select2.min.css">
    <script src="../../js/select2.min.js"></script>
    <script src="../../js/jquery-ui-1.9.2.custom.min.js"></script>
<div class="container">
    <h2>Login Admin</h2>
    <hr>
        <form action="logincheck.php" method="post">
        <div class="form-group">
            <label for="username">Nama</label>
            <input type="text" name="username" class="form-control">
            <span class="form_error"></span>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            <span class="form_error"></span>
        </div>
        <?php
        if($_SESSION["error"]==null){
            $_SESSION["error"]="";
        }
        if($_SESSION["error"]!=""){
        echo '<p>'.$_SESSION["error"].'</p>';
            $_SESSION["error"]="";
        }
        ?>
        <input type="submit" id="save" class="btn btn-primary" value="Login" tabindex="11">
    </form>
</div>
