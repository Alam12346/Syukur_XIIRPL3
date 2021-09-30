<!-- <?php  

   // Lampirkan bdconfig 

   require_once "bdconfig.php"; 

   // Logout! hapus session user 

   $user->logout(); 

   // Redirect ke login 

   header('location: login.php'); 

  ?>  -->


<?php
session_start();
if (isset($_SESSION['login'])) {
    unset($_SESSION);
    session_destroy();
    echo "<script type='text/javascript'>
alert('Logout Berhasil');window.location='/login.php'
</script>";
}