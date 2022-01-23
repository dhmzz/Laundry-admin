<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include "navbar.php" ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <a class="btn btn-primary" href="add_transaksi.php" role="button">Add Data</a>
    <?php 
        include "koneksi.php"
    ?>
    <br>
    <!-- <div style="border-style :solid; border: width 1px; border-color:lightgrey" class="container"> -->
    <table class="table container">
        <thead style="font-weight:bold">
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">No Transaksi</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Detail</th>
            <th scope="col">Total</th>
            <th scope="col">Status Laundry</th>
            <th scope="col">Status Pembayaran</th>
            <th scope="col">Tanggal Bayar</th>
        </thead>
        <?php
            $qry_transaksi = mysqli_query($koneksi,"SELECT a.*, b.nama, SUM(c.harga) as total FROM transaksi a JOIN member b ON a.id_member=b.id_member JOIN detail_transaksi c ON a.id_transaksi=c.id_transaksi GROUP BY a.id_transaksi");
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $qry_detail_transaksi = mysqli_query($koneksi,"SELECT a.*, b.jenis FROM detail_transaksi a JOIN paket b ON a.id_paket=b.id_paket WHERE a.id_transaksi = '".$data_transaksi['id_transaksi']."'");
                $detail = '<table border="0" style="border-collapse: collapse;">';
                while($data_detail_transaksi=mysqli_fetch_array($qry_detail_transaksi)){
                    $detail .= '
                        <tr>
                            <td>'.$data_detail_transaksi['jenis'].'</td>
                            <td>('.$data_detail_transaksi['qty'].')</td>
                            <td>'.$data_detail_transaksi['harga'].'</td>
                        </tr>
                    ';
                }
                $detail .= '</table>'; 
            ?>    
                <tr>
                    <td><?=$data_transaksi['tgl']?></td>
                    <td><?=$data_transaksi['id_transaksi']?></td>
                    <td><?=$data_transaksi['nama']?></td>
                    <td><?=$detail?></td>
                    <td>Rp <?=$data_transaksi['total']?></td>  
                    <td>
                        <form action="ubah_status.php" method="post">
                            <input type="hidden" name="id_transaksi" value="<?=$data_transaksi['id_transaksi']?>">
                            <select name="status" class="form-select">
                                <option value=""disabled selected><?=$data_transaksi['status']?></option>
                                <option value="baru">Baru</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                <option value="diambil">DIambil</option>
                            </select>
                            <input type="submit" value="OK" class="btn btn-primary">
                        </form>                   
                    </td>                   
                    <td>
                        <form action="ubah_status_bayar">
                        <select name="dibayar" class="form-select">
                            <option value=""selected><?=$data_transaksi['dibayar']?></option>
                            <option value="belum_dibayar" class="btn btn-primary">Belum dibayar</option>
                            <option value="dibayar">Dibayar</option>
                        </select>
                        <a type="submit" value="" class="btn btn-success" href="ubah_bayar.php?id_transaksi=<?php echo $data_transaksi['id_transaksi']?>">
                            Bayar
                        </a>
                        </form>                   
                    </td> 
                    <td><?=$data_transaksi['tgl_bayar']?></td>
                </tr>                   
            <?php 
                } 
            ?>       
    </table>
    <!-- </div> -->
</body>
</html>