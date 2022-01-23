<?php 
    include "koneksi.php";
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $input = mysqli_query($koneksi,"insert into user(nama,username,password,role) values ('".$nama."','".$username."','".md5($password)."','".$role."')") or die(mysqli_error($koneksi));
    if ($input) {
        echo "<script>alert('berhasil');location.href='tampil_admin.php';</script>";
    }
    else {
        // echo "<script>alert('Gagal');location.href='add_member.php';</script>";
        echo "gagal";
       
    }
    
?>