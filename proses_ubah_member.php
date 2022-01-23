<?php 
    include "koneksi.php";
    $id_member = $_POST['id_member'];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tlp = $_POST["tlp"];

    $update = mysqli_query($koneksi,"update member set nama='".$nama."',alamat='".$alamat."',jenis_kelamin='".$jenis_kelamin."' where id_member='".$id_member."'");
    if ($update) {
        echo "<script>alert('Gagal');location.href='tampil_member.php';</script>";

    }
    else {
        echo "<script>alert('Gagal');location.href='add_member.php';</script>";
    }
    
?>