<!DOCTYPE html>
<html>
<?php
    session_start();
    include("blockadmin.php");
    ?>
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
                <a href="#">
                    adminjr                </a>
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
                <a href="#">Log Out</a>
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
<div class="container">
    <h2>Edit Banner</h2>
    <hr>
    <form action="" method="post" id="uploadimage" enctype="multipart/form-data">
                <div id="image_preview"><img id="previewing" src="../../Images/banner2.jpg" /></div>
        <hr id="line">
                <div id="selectImage">
            <label>Select Your Image</label><br/>

            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <!--<input type="file" id="file" name="file" required />
            <input type="hidden" id="banner_image" name="banner_image" required />
            <input type="submit" value="Upload" class="submit btn btn-success" />-->
            <span class="form_error"></span>
        </div>
        <!--<h4 id='loading' >loading..</h4>
        <div id="message"></div>-->
        <!--<div class="form-group">
            <label for="username">Upload</label>
            <input type="file" name="banner_image" class="form-control" value="">
            <span class="form_error"></span>
        </div>-->

        <div class="form-group">
            <label for="banner_link">Link Banner</label>
            <input type="text" name="banner_link" class="form-control" value="www.waktogel.com">
            <span class="form_error"></span>
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <select name="position" class="form-control">
                <option value="">Pilih</option>
                                    <option value="HEADER"  >HEADER</option>
                                    <option value="SIDE1"  selected="selected" >SIDE1</option>
                                    <option value="CONTENT"  >CONTENT</option>
                                    <option value="SIDE2"  >SIDE2</option>
                            </select>
            <span class="form_error"></span>
        </div>
        <input type="submit" id="save" class="btn btn-primary" value="Daftar" tabindex="11">
    </form>
</div>



<!--<script>
    $(document).ready(function (e) {
        $("#uploadimage").on('submit',(function(e) {
            e.preventDefault();
            $("#message").empty();
            $('#loading').show();
            $.ajax({
                url: "banner/upload", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                success: function(data)   // A function to be called if request succeeds
                {
                    $('#loading').hide();
                    $("#message").html(data);
                }
            });
        }));

// Function to preview image after validation
        $(function() {
            $("#file").change(function() {
                $("#message").empty(); // To remove the previous error message
                var file = this.files[0];
                var imagefile = file.type;
                var match= ["image/jpeg","image/png","image/jpg"];
                if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
                {
                    $('#previewing').attr('src','assets/images/noimage.png');
                    $("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
                    return false;
                }
                else
                {
                   // console.log($(this).val());
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
        function imageIsLoaded(e) {
            $("#file").css("color","green");
            $('#image_preview').css("display", "block");
            $('#previewing').attr('src', e.target.result);
            $('#banner_image').val(e.target.result);
            $('#previewing').attr('width', '250px');
            $('#previewing').attr('height', '230px');
        };
    });
</script>
<style>
    #image_preview{
        font-size: 30px;
        width: 250px;
        height: 230px;
        text-align: center;
        font-weight: bold;
        color: #C0C0C0;
        background-color: #FFFFFF;
        /*overflow: auto;*/
    }
    /*#selectImage{
        padding: 19px 21px 14px 15px;
        position: absolute;
        bottom: 0px;
        width: 414px;
        background-color: #FEFFED;
        border-radius: 10px;
    }*/
    .submit:hover{
        background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);
    }
    #file {
        padding: 5px;
        margin-top: 10px;
        border-radius: 5px;
        box-shadow: 0 0 15px #626F7E;
        width: 72%;
    }
    #message{
        position:absolute;
        top:120px;
        left:815px;
    }
    #success
    {
        color:green;
    }
    #invalid
    {
        color:red;
    }
    #error
    {
        color:red;
    }
    #error_message
    {
        color:blue;
    }
    #loading
    {
        display:none;
        position:absolute;
        top:50px;
        left:850px;
        font-size:25px;
    }
</style>-->