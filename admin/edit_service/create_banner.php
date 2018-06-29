<!DOCTYPE html>
<?php

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
    include("blockadmin.php");
include('db_connect.php');
$data=isset($_POST['command']) ? $_POST['command'] : '';
$number=0;
if($data!=''){
    
    $sql = "select count(*)+1 as number from `carousel`";
    $result = mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        else{
            $row=mysqli_fetch_array($result);
                $number=$row['number'];
                console_log( $number );
        }
    
$reportid="ER".(rand(00000000,99999999));
    console_log( $reportid );
$target_dir = "../uploads/";
    $real_dir = "./admin/uploads/";
    $admin_dir="";
    console_log( $target_dir );
$target_file = $target_dir . basename($reportid.$_FILES["fileToUpload"]["name"]);
        console_log( $target_file );
$uploadOk = 1;
    console_log( $uploadOk );
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    console_log( $imageFileType );
    console_log( $_POST["submit"]);
    
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    console_log( "working" );
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $_SESSION['error']="File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $_SESSION['error']="File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $_SESSION['error']="Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    $_SESSION['error']="Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $_SESSION['error']="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
    console_log( $uploadOk );
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $_SESSION['error']="Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && $number!=0) {
        $dir= basename( $reportid.$_FILES["fileToUpload"]["name"]);
         $_SESSION['error']=basename( $_FILES["fileToUpload"]["name"]);
        $temp=$real_dir.$dir;
        $admin_dir= $target_file;
        $_SESSION['error']="The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $sql = "INSERT INTO `carousel` (order_number,image_dir,admin_dir,direct,username) VALUES(".$number.",'".$temp."','".$admin_dir."','".$_POST['direct']."','".$_SESSION['adminname']."')";
        console_log( $_POST['direct'] );
            if(mysqli_query($conn, $sql)){
                header("Location: ../account/daftar_banner.php");
                exit;
            }   
            else{
            $_SESSION['error']="ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };
        
        // Close connection
        mysqli_close($link);
    } else {
        $_SESSION['error']="Sorry, there was an error uploading your file.";
    }
}
}else{
    
}
?>
<html>
    <head>
    <title>Wakmimpi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/select2.min.css">
    <script src="../../js/select2.min.js"></script>
    <script src="../../js/jquery-ui-1.9.2.custom.min.js"></script>
</head>
<script>
    $(document).ready(function () {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

        trigger.click(function () {
            hamburger_cross();
        });

        function hamburger_cross() {

            if (isClosed == true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
        });
    });
</script>
<style>
    .dropbtn {
        background-color:  #f0f0f0;
        border:1px solid black;
        color: black;
        padding: 8px;
        font-size: 16px;
        cursor: pointer;
        border-radius:8px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
    /*menu*/
    body {
        position: relative;
        overflow-x: hidden;
    }
    body,
    html { height: 100%;}
    .nav .open > a,
    .nav .open > a:hover,
    .nav .open > a:focus {background-color: transparent;}

    /*-------------------------------*/
    /*           Wrappers            */
    /*-------------------------------*/

    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled {
        padding-left: 220px;
    }

    #sidebar-wrapper {
        z-index: 1000;
        left: 220px;
        width: 0;
        height: 100%;
        margin-left: -220px;
        overflow-y: auto;
        overflow-x: hidden;
        background: #1a1a1a;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #sidebar-wrapper::-webkit-scrollbar {
        display: none;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 220px;
    }

    #page-content-wrapper {
        width: 100%;
        padding-top: 70px;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -220px;
    }

    /*-------------------------------*/
    /*     Sidebar nav styles        */
    /*-------------------------------*/

    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 220px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .sidebar-nav li {
        position: relative;
        line-height: 20px;
        display: inline-block;
        width: 100%;
    }

    .sidebar-nav li:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        height: 100%;
        width: 3px;
        background-color: #1c1c1c;
        -webkit-transition: width .2s ease-in;
        -moz-transition:  width .2s ease-in;
        -ms-transition:  width .2s ease-in;
        transition: width .2s ease-in;

    }
    .sidebar-nav li:first-child a {
        color: #fff;
        background-color: #1a1a1a;
    }
    .sidebar-nav li:nth-child(2):before {
        background-color: #ec1b5a;
    }
    .sidebar-nav li:nth-child(3):before {
        background-color: #79aefe;
    }
    .sidebar-nav li:nth-child(4):before {
        background-color: #314190;
    }
    .sidebar-nav li:nth-child(5):before {
        background-color: #279636;
    }
    .sidebar-nav li:nth-child(6):before {
        background-color: #7d5d81;
    }
    .sidebar-nav li:nth-child(7):before {
        background-color: #ead24c;
    }
    .sidebar-nav li:nth-child(8):before {
        background-color: #2d2366;
    }
    .sidebar-nav li:nth-child(9):before {
        background-color: #35acdf;
    }
    .sidebar-nav li:hover:before,
    .sidebar-nav li.open:hover:before {
        width: 100%;
        -webkit-transition: width .2s ease-in;
        -moz-transition:  width .2s ease-in;
        -ms-transition:  width .2s ease-in;
        transition: width .2s ease-in;

    }

    .sidebar-nav li a {
        display: block;
        color: #ddd;
        text-decoration: none;
        padding: 10px 15px 10px 30px;
    }

    .sidebar-nav li a:hover,
    .sidebar-nav li a:active,
    .sidebar-nav li a:focus,
    .sidebar-nav li.open a:hover,
    .sidebar-nav li.open a:active,
    .sidebar-nav li.open a:focus{
        color: #fff;
        text-decoration: none;
        background-color: transparent;
    }

    .sidebar-nav > .sidebar-brand {
        height: 65px;
        font-size: 20px;
        line-height: 44px;
    }
    .sidebar-nav .dropdown-menu {
        position: relative;
        width: 100%;
        padding: 0;
        margin: 0;
        border-radius: 0;
        border: none;
        background-color: #222;
        box-shadow: none;
    }

    /*-------------------------------*/
    /*       Hamburger-Cross         */
    /*-------------------------------*/

    .hamburger {
        position: fixed;
        top: 20px;
        z-index: 999;
        display: block;
        width: 32px;
        height: 32px;
        margin-left: 15px;
        background: transparent;
        border: none;
    }
    .hamburger:hover,
    .hamburger:focus,
    .hamburger:active {
        outline: none;
    }
    .hamburger.is-closed:before {
        content: '';
        display: block;
        width: 100px;
        font-size: 14px;
        color: #fff;
        line-height: 32px;
        text-align: center;
        opacity: 0;
        -webkit-transform: translate3d(0,0,0);
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-closed:hover:before {
        opacity: 1;
        display: block;
        -webkit-transform: translate3d(-100px,0,0);
        -webkit-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed .hamb-top,
    .hamburger.is-closed .hamb-middle,
    .hamburger.is-closed .hamb-bottom,
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-middle,
    .hamburger.is-open .hamb-bottom {
        position: absolute;
        left: 0;
        height: 4px;
        width: 100%;
    }
    .hamburger.is-closed .hamb-top,
    .hamburger.is-closed .hamb-middle,
    .hamburger.is-closed .hamb-bottom {
        background-color: #1a1a1a;
    }
    .hamburger.is-closed .hamb-top {
        top: 5px;
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-closed .hamb-middle {
        top: 50%;
        margin-top: -2px;
    }
    .hamburger.is-closed .hamb-bottom {
        bottom: 5px;
        -webkit-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed:hover .hamb-top {
        top: 0;
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-closed:hover .hamb-bottom {
        bottom: 0;
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-middle,
    .hamburger.is-open .hamb-bottom {
        background-color: #1a1a1a;
    }
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-bottom {
        top: 50%;
        margin-top: -2px;
    }
    .hamburger.is-open .hamb-top {
        -webkit-transform: rotate(45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
    }
    .hamburger.is-open .hamb-middle { display: none; }
    .hamburger.is-open .hamb-bottom {
        -webkit-transform: rotate(-45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
    }
    .hamburger.is-open:before {
        content: '';
        display: block;
        width: 100px;
        font-size: 14px;
        color: #fff;
        line-height: 32px;
        text-align: center;
        opacity: 0;
        -webkit-transform: translate3d(0,0,0);
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-open:hover:before {
        opacity: 1;
        display: block;
        -webkit-transform: translate3d(-100px,0,0);
        -webkit-transition: all .35s ease-in-out;
    }

    /*-------------------------------*/
    /*            Overlay            */
    /*-------------------------------*/

    .overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(250,250,250,.8);
        z-index: 1;
    }

    .form_error
    {
        color:red;
    }

    .pagination a {
        color:black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        border: 1px solid #ddd;
    }
    .pagination strong {
        color:white;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        border: 1px solid #ddd;
        background-color: #4CAF50;
    }

</style>

<body>
<header></header>
<div id="wrapper">
    <div class="overlay"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="list_accounts.php">
                    <?php 
                    echo 'Welcome, ';
                    echo $_SESSION['adminname'] ;
                    ?>                </a>
            </li>
            <li>
                <a href="../account/list_accounts.php">Account</a>
            </li>
            <li>
                <a href="../account/list_cs.php">Customer Service</a>
            </li>
            <li>
                <a href="../account/cara_bermain.php">Cara Bermain</a>
            </li>
            <li>
                <a href="../account/meta.php">Meta</a>
            </li>
            <li>
                <a href="../account/info_terkini.php">Info Terkini</a>
            </li>
            <li>
                <a href="../account/buku_mimpi.php">Buku Mimpi</a>
            </li>
            <li>
                <a href="../account/history_nomor.php">History Nomor</a>
            </li>
            <li>
                <a href="../account/daftar_banner.php">Banner</a>
            </li>
            <li>
                <a href="../account/logout.php">Log Out</a>
            </li>
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button><link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
       function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageemergency')
                    .attr('src', e.target.result).width(300)
                        .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
       </script>
<div class="container">
    <h2>Create Banner</h2>
    <hr>
    <form action="create_banner.php" method="post" id="uploadimage" enctype="multipart/form-data">
                <div id="selectImage">
                
            <img src="../../Images/noimage.jpg" id="imageemergency" width="300px" height="200px">
            <br>
            <br>
            <label>Select Your Image</label><br/>
            <input type="hidden" value="aaaaa" name="command"> 
            <input type="file" name="fileToUpload" id="fileToUpload"  onchange="readURL(this);" required><br>
            <!--<input type="file" id="file" name="file" required />
            <input type="hidden" id="banner_image" name="banner_image" required />
            <input type="submit" value="Upload" class="submit btn btn-success" />-->
            <span class="form_error"></span>
        </div>
        <!--<h4 id='loading' >loading..</h4>
        <div id="message"></div>-->
        <div class="form-group">
            <label for="username">Link redirect</label>
            <input type="text" name="direct" class="form-control" value="" required>
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
        <input name="submit" type="submit" id="save" class="btn btn-primary" value="Daftar" tabindex="11">
    </form>
</div>
