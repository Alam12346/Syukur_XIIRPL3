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
         <center><h1>Selamat datang <?php echo $currentUser['nama'] ?></h1> </center>

       </div> 
   <center><br><br><br><h2>
    <div class="text"> 
  <marquee scrolldelay="3" >jalan jalan yuuk jangan kerja terus  </marquee>
  </div></h2><h2>
  pilih wisata yang kamu sukai! </h2>
  <form action="jenis.php" method="post">
<center><table border=2 >
 
<tr><th><img src="download.jpg"   height="200" width="400"><br><center><b> Bali <br> RP.500.000</b></center>
<br><center> <input type="radio" name="nama_wisata" value="bali"></input></center></th>
<th><th><img src="bandungg.jpg" height="200" width="400"><br><center><b> bandung <br> RP.100.000</b></center>
<br><center> <input type="radio" name="nama_wisata" value="bandung"></input></center></th>
</tr><tr><th><img src="malang.jpg" height="200" width="400"><center><b> malang <br> RP.300.000</b></center>
<br><center> <input type="radio" name="nama_wisata" value="malang"></input></center></th>
<th><th><img src="timur.jpg" height="200" width="400"><center><b> raja ampat <br> RP.700.000</b></center>
<br><center> <input type="radio" name="nama_wisata" value="rajaampat"></input></center></th>
<tr><th colspan=3><button  value="pesan" name="submit">pesan 
    </button></th></tr></table></form> 

     <div class="container"> 

       
    



    

     </div> 

   </body> 

 </html>  