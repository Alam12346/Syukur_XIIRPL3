<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>total pembayaran</title>
</head>
<body> 

    <link
      rel="stylesheet"
      href="stylee.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" /></body>
</html>
    <?php
    
    if(isset($_POST['submit']))  {
       $nama_wisata = $_POST ['nama_wisata'];
       $jenis = $_POST ['jenis'];
        
        
    
   if ($jenis == "kelas_utama"  ){
    $harga = 6000000;
}   elseif ($jenis == "kelas_bisnis"){
$harga = 3000000;
}
elseif ($jenis == "Kelas_premium_ekonomi"){
    $harga = 1500000;
    }
    elseif ($jenis == "Kelas_ekonomi"){
        $harga = 1000000;
        }
        elseif ($nama_wisata == "bali"  ){
            $hargaa = 500000;
        }   elseif ($nama_wisata == "bandung"){
        $hargaa = 100000;
        }
        elseif ($nama_wisata == "malang"){
            $hargaa = 300000;
            }
            elseif ($nama_wisata == "rajaampat"){
                $hargaa = 700000;
                }
   
$total = $harga + $hargaa;}
?><?php 
echo"harga $total";
?>
    