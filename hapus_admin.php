<?php 
echo $_GET['id_user'];
    if($_GET['id_user']){
        include "koneksi.php";
        $qry_hapus = mysqli_query($koneksi,"DELETE FROM user where id_user = '".$_GET['id_user']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus data');location.href='tampil_admin.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data');location.href='tampil_admin.php';</script>";
        }
    }
?>