<?php
    include "koneksi.php";
    $id_transaksi = $_POST['id_transaksi'];
    $status = $_POST["status"];

    $update_status = mysqli_query($koneksi,"UPDATE transaksi set status='".$status."' WHERE id_transaksi = '".$id_transaksi."'");
    if ($update_status) {
        echo "<script>alert('Berhasil');location.href='home.php';</script>";
    }
    else{
        echo "<script>alert('Gagal');location.href='home.php';</script>";
    }
?>