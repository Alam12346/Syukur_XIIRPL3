
<?php  

   // Lampirkan dbconfig 

   require_once "bdconfig.php"; 

   // Cek status login user 

   if(!$user->isLoggedIn()){ 

     header("location: login.php"); //Redirect ke halaman login 

   } 

   // Ambil data user saat ini 

   $currentUser = $user->getUser(); 

  ?> 

 <!DOCTYPE html>  

 <html>  

   <head> 

     <meta charset="utf-8"> 

     <title>Home</title> 

     <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8"> 

   </head> 

   <body> <div class="info"> 

<a href="logout.php"><button type="button">Logout</button></a> 
        

       </div> 
   <center><br><br><br><h2>
    <div class="text"> 
  <marquee scrolldelay="3" >jalan jalan yuuk jangan kerja terus  </marquee>
  </div></h2><h2>
  pilih kelas penerbangan mu </h2>
  <form action="jadwal.php" method="post">
<center><table border=2 >
 
<tr><th><img src="kelasa.jpg"   height="200" width="400"><br><h3>kelas utama<br> RP.6.000.000</h3>
Nikmati layanan kelas dunia dengan <br>
detail mewah serta  suite pribadi <br>
nan luas hanya untuk Anda.</b>
<br><center><a href="jenis.php"> <input type="radio" name="jenis" value="kelas_utama"></input></a></center></th>


<th><th><img src="kelasb.jpg" height="200" width="400"><br><h3>kelas Bisnis<br>RP.3.000.000</h3>
    Nikmati prioritas check-in dan <br>
 boarding, akses lounge, serta kabin <br>
  eksklusif dengan santapan mewah dan <br>
   kursi terbaik di kelasnya.</b>
<br><center><a href="jenis.php"> <input type="radio" name="jenis" value="kelas_bisnis"></input></a></center></th>


</tr><tr><th><img src="kelasc.jpg" height="200" width="400"><h3>kelas premium ekonomi<br>1.500.000</h3>
Kami menawarkan ruang yang lebih leluasa <br>
dan nyaman, disertai keramahtamahan <br>
tradisional khas Asia selama perjalanan Anda. <br></b>
<br><center><a href="jenis.php"> <input type="radio" name="jenis" value="Kelas_premium_ekonomi"></input></a></center></th>



<th><th><img src="kelaseko.jpg" height="200" width="400"><h3>kelas ekonomi<br>1.000.000</h3>
    Nikmati kursi yang dirancang untuk <br>
 memberikan kenyamanan dan ketenangan <br>
  pikiran, sistem hiburan pribadi, dan <br>
   layanan penuh perhatian.</b>
<br><center><a href="jenis.php"> <input type="radio" name="jenis" value="kelasekonomi"></input></a></center></th>
<tr><th colspan=3><button  value="pesan" name="submit">pesan 
    </button></th></tr></table></form> 

     <div class="container"> 

       
    



    

     </div> 

   </body> 

 </html>  