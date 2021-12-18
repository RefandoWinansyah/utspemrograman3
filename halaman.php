<?php
session_start();
if( !isset($_SESSION['level']) ){
    header('location:cuti.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <center>
   <h1>Selamat datang <?php echo $_SESSION['level'];?></h1>
    <h4>Anda berhasil login ke dalam aplikasi</h4>
  </center>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>My Menu</header>
      <ul>
        <li>
          <li><a href="anggota.php">Anggota</a>
          <li><a href="barang.php">Barang</a>
          <li><a href="kategori.php">Kategori</a>
        </ul>      
        </li>
     </ul>
     <ul>
        <li>
          <li><a href="cuti.php">CUTI</a>
        </li>
      </ul>
      <ul>
          <li><a href="logout.php" class="btn btn-info" onclick="return confirm('Mau Logout?')">Logout</a></li>
      </ul>
</div>
 <section></section>

  </body>
</html>