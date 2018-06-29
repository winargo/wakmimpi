<html>
   <head>
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
      <link rel="stylesheet" href="../css/main-header.css">
      <link rel="stylesheet" href="../css/default.css">   

      
      
       <title>Wakmimpi : Situs Agen tebak nomor Tebak Nomor Online Singapore Terpercaya</title>
       
   <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
   <script type="text/javascript" src="js/header.js"></script>
   
   <script type="text/javascript" async="" src="http://cdn.livechatinc.com/tracking.js"></script>
   
   <script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 9238010;
        (function() {
            var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
    </script>
   <script src="http://wakmimpi.com/assets/js/jquery.jSlots.min.js" type="text/javascript" charset="utf-8"></script>
  
  <script src="../js/jquery-1.11.3.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/ezslots.js"></script>
        
        <link href="../css/ezslots.css" rel="stylesheet" type="text/css" />
  
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
                        <div class="container">
                            <h3>INFO REFERRAL</h3>
                            <p></p>
                            <hr/>
                            <p></p>
                            <p>
                            Bonus Referal Untuk Setiap Member Langsung di Tambahkan kedalam ID GAME anda bonus Referal Didapat 1% dari setiap bettingan Para Pemain Referal/ TurnOver Terima kasih :)
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
             
              
         <!--     -->
    </div>
    
        <div class="col-md-bottom">
         </div>
    <div class="row sometext">
          <div class="widget">
                        <p>
                        </p><h1> Daftar Bandar Agen Tebak Nomor Online Terpercaya, dan Terbesar 2018</h1>
                WakMimpi merupakan situs tebak nomor online terpercaya, terbesar dan terbaik di sepanjang tahun 2018 yang fokus di permainan Tebak Nomor online. Dengan menjadi member WakMimpi, anda juga akan mendapatkan bocoran nomor togel, prediksi angka Tebak Nomor dan info Tebak Nomor Singapura, Hongkong. Keamananan dan kerahasian data member kami yang sangat terjaga melalui enkripsi tingkat tinggi telah menobatkan kami sebagai Bandar Agen Tebak Nomor Online Terpercaya 2018. <a href="www.waktoto.com/">WakMimpi</a> <a href="www.waktoto.com/">Togel</a> <a href="www.waktoto.com/">Togel Online</a>
                <a href="www.waktoto.com/">Togel Singapura</a> <a href="www.waktoto.com/">Togel Hongkong</a> <a href="www.waktoto.com/">Agen Togel</a>  <a href="www.waktoto.com/">Daftar Togel</a> <a href="www.waktoto.com/">WakMimpi</a>
                <a href="www.waktoto.com/">Info Togel</a>

                <h2> Info Situs Bandar Tebak Nomor Online Singapura, Hongkong Terpercaya </h2>
                WakMimpi menyediakan Customer Support (CS) online 24 Jam non-stop dalam membantu process pemasangan Tebak Nomor melalui situs Tebak Nomor kami, process deposit, penarikan dan hal teknik lainnya. System situs Tebak Nomor online yang termudah, terpercaya, terbesar dan terbaik memberikan kenyamanan bermain sepanjang masa. Proses registrasi member yang cepat dan aman. WakMimpi juga memberikan promo dan bonus yang bisa anda dapatkan langsung dari CS kami melalui LiveChat.
                <a href="www.waktoto.com/">Info Togel</a> <a href="www.waktoto.com/">Togel Online</a> <a href="www.waktoto.com/">WakMimpi</a> <a href="www.waktoto.com/">Agen Togel</a> <a href="www.waktoto.com/">Terbesar</a>  <a href="www.waktoto.com/">Terbaik</a> <a href="www.waktoto.com/">Terpercaya</a>
                <a href="www.waktoto.com/">angka jitu</a>

                <h3>  Kelebihan WakMimpi – Tebak Nomor Online Terpercaya, Terbesar, Terbaik </h3>
                 Kepercayaan komunitas situs Tebak Nomor online membuat WakMimpi menjadi Tebak Nomor web terbaik dan terbesar. Tidak hanya mendapatkan bocoran togel, nomor jitu dan info togel, anda juga akan mendapatkan segala mengenai cara bermain togel, buku mimpi, bonus referral kami.
                Semua hasil pengeluaran asli dan dalam pengelolahan pools resmi Tebak Nomor singapura, hongkong.

                WakMimpi menjamin 100% keamanan member dalam bermain Tebak Nomor online. Dengan system satu-satunya yang menggunakan system enkripsi tingkat tinggi, anda tidak perlu ragu bergabung dengan kami. Daftar jadi member WakMimpi - bandar Tebak Nomor online terbesar dan nikmatin perbedaan dan rasakan keuntungannya. <a href="http://waktoto.com/hasil_lengkap.php">Nomor Togel</a> 
                <a href="http://waktoto.com/how-to-play.php">Cara Bermain</a> 
                <a href="http://waktoto.com/bukumimpi.php">Buku Mimpi</a> 
                <a href="http://waktoto.com/inforeferral.php">Referral Bonus</a> 
                <a href="http://waktoto.com/support.php">Support CS</a>  
                <a href="http://waktoto.com/lupapassword.php">Reset</a> 
            <p></p>
          </div>
        
      </div>
      <footer>
          <div class="copyright">
                  © Copyright 2014 - 2018 <a class="colortext" href="#">WakMimpi.net</a>. All Rights Reserved.
        </div>
      </footer>
    
    
    <script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 9238010;
        (function() {
          var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
          lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
        </script>
         <script>

                                         $(function(){
                                        //setting up some sample set sof things we can make a slot machine of
                                        var numbers = ['0','1','2','3','4','5','6','7','8','9'];
                                        var images = ['<img src="images/seven.png">','<img src="images/banana.png">','<img src="images/cherries.png">','<img src="images/lemon.png">','<img src="images/orange.png">','<img src="images/plum.png">','<img src="images/watermelon.png">'];
                                        var misc = ['!','K','*','#','@','$'];
                                        var callbackFunction = function(result){
                                            alert(JSON.stringify(result));
                                        }


                                        //all parameters except id are optional
                                        var ezslot0 = new EZSlots("ezslots0");
                                        //simple numbers based one
                                        var ezslot1 = new EZSlots("ezslots1",{"reelCount":4,"startingSet":[0,0,0,0],"winningSet":[7,7,7,7],"symbols":numbers,"height":50,"width":50});
                                        //using images instead, and more reels
                                        
                                        $("#gogogo0").click(function(){ console.log(ezslot0.spin());});
                                        $("#gogogo1").click(function(){ console.log(ezslot1.spin());});
                                        $("#winwinwin1").click(function(){ console.log(ezslot1.win())});
                                    });

       </script>
    </body>
</html>