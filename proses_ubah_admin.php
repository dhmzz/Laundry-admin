<?php 
    include "koneksi.php";
    $id_user = $_POST["id_user"];
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $update = mysqli_query($koneksi,"update user set nama='".$nama."',username='".$username."',password='".md5($password)."',role='".$role."' where id_user='".$id_user."'");
    if ($update) {
        echo "<script>alert('Berhasil');location.href='tampil_admin.php';</script>";

    }
    else {
        echo "<script>alert('Gagal');location.href='add_member.php';</script>";
    }
    
?>