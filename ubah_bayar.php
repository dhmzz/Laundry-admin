<?php
    include "koneksi.php";
    $id_transaksi = $_GET['id_transaksi'];

    $update_bayar = mysqli_query($koneksi,"UPDATE transaksi set tgl_bayar='".date('Y-m-d')."', dibayar='dibayar' WHERE id_transaksi = '".$id_transaksi."'");
    if ($update_bayar) {
        echo "<script>alert('Berhasil');location.href='home.php';</script>";
    }
    else{
        echo "<script>alert('Gagal');location.href='home.php';</script>";
    }
?>