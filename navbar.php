<?php 
    session_start();
    if($_SESSION['status_login']!=true){
      header('location: home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LAUNDRY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home.php">Data Transaksi</a>
        <a class="nav-link" href="tampil_member.php">Data Member</a>
        <a class="nav-link" href="tampil_admin.php">Data Admin</a>
        <!-- <a class="nav-link" href="tampil_membe.php">Tampil Member</a> -->
        <a class="nav-link" href="tampil_paket.php">Data Paket</a>
        <a class="nav-link" href="proses_logout.php">Logout</a>
      </div>
    </div>
  </div>
</nav>
    
</body>
</html>