<?php
    session_start();
    include "koneksi.php";
    $id_member = $_POST["id_member"];
    $batas_waktu = $_POST["batas_waktu"];
    $tgl_bayar = $_POST["tgl_bayar"];
    $id_user = $_SESSION['id_user'];

    // tabel transaksi
    $query_transaksi = mysqli_query($koneksi,"insert into transaksi 
    (id_member,tgl,batas_waktu,status,dibayar,id_user) 
    values ('".$id_member."','".date('Y-m-d')."','".$batas_waktu."','baru','belum_dibayar','".$id_user."') ");

    $id_transaksi = $koneksi->insert_id;
    
    //tabel detail transaksi
    for ($i=1; $i <= 4; $i++) { 
        if (isset($_POST[$i])) {
            $paket  = $_POST[$i];
            $qty    = $_POST['qty_'.$i];
            $harga  = $_POST['harga_'.$i] * $_POST['qty_'.$i];
            $query_detail_transaksi = mysqli_query($koneksi,"insert into detail_transaksi (id_transaksi,id_paket,qty,harga) values ('".$id_transaksi."','".$paket."','".$qty."','".$harga."')");
        }
    }

    if ($query_detail_transaksi) {
        echo "<script>alert('berhasil');location.href='home.php';</script>";
    }
    else{
        echo $query_detail_transaksi;
    }
    

?>