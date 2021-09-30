<?php  

// Lampirkan bdconfig 

require_once "bdconfig.php"; 

// Cek status login user 

if($user->isLoggedIn()){ 

  header("location: wisataa.php"); //Redirect ke index 

} 

//Cek adanya data yang dikirim 

if(isset($_POST['kirim'])){ 

  $nama = $_POST['nama']; 

  $email = $_POST['email']; 

  $password = $_POST['password']; 

  // Registrasi user baru 

  if($user->registrasi($nama, $email, $password)){ 

    // Jika berhasil set variable success ke true 

    $success = true; 

  }else{ 

    // Jika gagal, ambil pesan error 

    $error = $user->getLastError(); 

  } 

} 

?> 

<!DOCTYPE html>  

<html>  

<head> 

  <meta charset="utf-8"> 

  <title>Registrasi</title> 

  <link rel="stylesheet" href="cssnya.css" media="screen" title="no title" charset="utf-8"> 

</head> 

<body> 

  <div class="login-page"> 

   <div class="form"> 

     <form class="register-form" method="post"> 

     <?php if (isset($error)): ?> 

       <div class="error"> 

         <?php echo $error ?> 

       </div> 

     <?php endif; ?> 

     <?php if (isset($success)): ?> 

       <div class="success"> 

         Berhasil mendaftar. Silakan <a href="login.php">login</a>. 

       </div> 

     <?php endif; ?> 

      <input type="text" name="nama" placeholder="nama" required/> 

      <input type="email" name="email" placeholder="email" required/> 

      <input type="password" name="password" placeholder="password" required/> 

      <button type="submit" name="kirim">create</button> 

      <p class="message">udah punya akun? <a href="login.php">masuk</a></p> 

     </form> 

   </div> 

  </div> 

</body> 

</html>  