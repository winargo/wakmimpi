<html>
   <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
      <link rel="stylesheet" href="../css/main-header.css">
      <link rel="stylesheet" href="../css/default.css">
      <link rel="stylesheet" href="../css/main.css">
      
      
       <title>Wakmimpi : Situs Agen Judi Togel Online Singapore Terpercaya</title>
   <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
   <script type="text/javascript" src="js/header.js"></script>
   </head>
   <style>
        .hasil{
           width: 95%;
           height: 350px;
           margin:  0 auto;
           margin-top: 5%;
           border-radius: 5px;
           background-color: darkred;
           padding: 8px;
           padding-top: 15px;
       }
       .numbertheme{
           overflow:hidden;
           overflow-y:scroll;
           height: 200px;
           padding-left: 0;
       }
       .itemli, .itemliright{
           float: left;
           
       }
       .itemliright{
           float: right;
       }
       .lili{
           background-color: black;
           opacity: 70%;
           border-radius: 3px;
           width: 100%;
           padding: 8px;
           height: 36px;
           margin-bottom: 5px;
       }
       .itemli{
           margin: 0 auto;
       }
       .libackground{
           background-color: black;
       }
    </style>
    <body>
        <div class="header">
             <div class="header-container">
              <a href="../index.php"><img class="Logo-format" src="http://waktoto.net/assets/img/hf/logo.png"></a>
              <div class="initiate-session" method="post">
                  <a href="http://waktoto.net/register.php"><button class="btn btn-primary" id="button-form-control">Daftar</button></a>
                  <a href="http://waktoto.net/"><button class="btn btn-primary" id="button-form-control">LOGIN</button></a>
                  
              </div>
              </div>
        </div>
           <div class="Content">
           <div class="content-forcer">
             
            </div>
            <div class="header-info">
                    <p class="text-info"><span class="glyphicon glyphicon-bullhorn"></span>  Info Terkini :</p>
                     <marquee class="text-marquee"><?php
                         include('db_connect.php');
                         $sql = "Select * from `header` where active=1" ;
                         $result = mysqli_query($conn,$sql);
                         if (!$result) {
                            printf("Error: %s\n", mysqli_error($conn));
                            exit();
                         }
                         else
                         {
                         $row=mysqli_fetch_array($result);
                         echo $row['isi_berita'];
                         }
                         ?>
                </marquee>
                </div>
            <div class="jumbotron cont">
                <div class="container conts">
                    <div class="row">
                        <div class="col-md-3 left-nav">
                            <div class="row" id="nav-sizing">
                                <a href="./how_to_play.php"><div class="col-md-12 menu">
                                    <h4><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;&nbsp;Cara Bermain</h4>
                                </div></a>
                                <a href="http://waktoto.net/hasil_lengkap.php"><div class="col-md-12 menu">
                                    <h4><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;&nbsp;History Nomor</h4>
                                </div></a>
                                <a href="./buku_mimpi.php"><div class="col-md-12 menu">
                                    <h4><span class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;&nbsp;Buku Mimpi</h4>
                                </div></a>
                                <a href="./refferal.php"><div class="col-md-12 menu">
                                    <h4><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Refferal</h4>
                                </div></a>
                                <a href="./help.php"><div class="col-md-12 menu">
                                    <h4><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;&nbsp;Bantuan</h4>
                                </div></a>
                            <!--    <a href="./pages/lupa_password.php"><div class="col-md-12 menu">
                                    <h4><span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;Lupa Password</h4>
                                </div></a>-->
                                
                            </div>
                            <div class="container afterdaftar" style="margin-top:50px;">
                               <div id="ezslots1"></div>
                                <button class="button_random" id="gogogo1">LUCKY NUMBER</button>
                                
                                <!--
                                tambah gitu disini
                                -->
                            </div>
                            <div class="hasil">
                                    <p>&nbsp;&nbsp;<i class="far fa-calendar-alt"></i><b>&nbsp;&nbsp;Hasil Terakhir</b></p>
                                    <hr>
                                    <p>&nbsp;&nbsp;<?php
                                        echo date("d F Y");
                                        ?></p>
                                    <ul class="numbertheme" style="list-style-type: none;">
                                           <?php
                        $time = strtotime(date("d F Y"));
                        $tanggalbiasa = date("Y-m-d h:i:s", $time);
                    include('db_connect.php');
                    $sql = "Select * from `togel` where fulldate='".$tanggalbiasa."' order by fulldate asc" ;
                    $result = mysqli_query($conn,$sql);
                    $a=1;
                    while( $row = mysqli_fetch_assoc( $result ) ){
                            echo "<li class='lili'><div class='libackground'><div class='itemli'>".$row['type']."</div><div class='itemliright'>".$row['result']."</div></div></li>
                                ";
                    $a++;
                    }
                    ?>
                                    </ul>
                                </div>
                        </div>
                        <div class="col-md-9 content-wrap htp">
                        <div class="col-md-12 bm-content">
        <h2 class="title-content">History Nomor</h2>
        <hr>
        <div class="row">
            <!--<div class="col-md-6">
                <h4 style="color:white;">Singapore Pool</h4>
            </div>-->
            <form action="" method="get">
            <div class="col-md-4">
                <div class="form-group">
                    <select class="form-control" name="pool_type">
                        <option value="">Semua Pool</option>
                                                    <option value="1">SYDNEY POOL</option>
                                                    <option value="2">HONGKONG POOL</option>
                                                    <option value="3">SINGAPORE POOL</option>
                                                    <option value="4">JAKARTA POOL</option>
                                                    <option value="18">MACAU POOL</option>
                                            </select>
                </div>
            </div>
            <div class="form-group col-md-2">
                <input type="submit" class="btn btn-primary">
            </div>
            </form>
        </div>

        <div class="buku-mimpi-table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Periode</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Pool</th>
                    <th scope="col">Nomor</th>
                </tr>
                </thead>
                <tbody>
                                    <tr>
                        <td scope="row">34</td>
                        <td>Friday</td>
                        <td>2018-01-05</td>
                        <td>SINGAPORE POOL</td>
                        <td style="color:red;">1568</td>
                    </tr>
                                    <tr>
                        <td scope="row">13</td>
                        <td>Friday</td>
                        <td>2018-01-05</td>
                        <td>JAKARTA POOL</td>
                        <td style="color:red;">7564</td>
                    </tr>
                                    <tr>
                        <td scope="row">57</td>
                        <td>Friday</td>
                        <td>2018-01-05</td>
                        <td>MACAU POOL</td>
                        <td style="color:red;">5543</td>
                    </tr>
                                    <tr>
                        <td scope="row">2</td>
                        <td>Wednesday</td>
                        <td>2018-01-03</td>
                        <td>HONGKONG POOL</td>
                        <td style="color:red;">2020</td>
                    </tr>
                                    <tr>
                        <td scope="row">3</td>
                        <td>Wednesday</td>
                        <td>2018-01-03</td>
                        <td>SYDNEY POOL</td>
                        <td style="color:red;">1111</td>
                    </tr>
                                    <tr>
                        <td scope="row">1</td>
                        <td>Tuesday</td>
                        <td>2018-01-02</td>
                        <td>SYDNEY POOL</td>
                        <td style="color:red;">1234</td>
                    </tr>
                                </tbody>
            </table>
        </div>
    </div>
                        </div>
                    </div>
                </div>
            </div>
             
              
         <!--     -->
    </div>
    </body>
</html>