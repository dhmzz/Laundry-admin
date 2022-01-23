<?php 
    include "koneksi.php";
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tlp = $_POST["tlp"];

    $input = mysqli_query($koneksi,"insert into member(nama,alamat,jenis_kelamin,tlp) values ('".$nama."','".$alamat."','".$jenis_kelamin."','".$tlp."')") or die(mysqli_error($koneksi));
    if ($input) {
        echo "<script>alert('berhasil');location.href='home.php';</script>";
    }
    else {
        // echo "<script>alert('Gagal');location.href='add_member.php';</script>";
        echo "gagal";
       
    }
    
?>