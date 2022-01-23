<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "navbar.php" ?>
</head>
<body>
    <!-- id member,tgl,batas waktu,tgl bayar,status,id user -->
    <div style="margin: 30px 200px; background-color: rgb(255, 255, 255); box-shadow: black 2px 5px; box-shadow: #838383 0px -8px 20px; border-radius: 0px;">   
    <form action="proses_add_transaksi.php" method="post" style="padding : 80px;">
        <h2>Add Transaksi</h2>
        <br>
        Pelanggan :
        <select name="id_member" class="form-control">
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($koneksi,"select * from member");
            while($data_member=mysqli_fetch_array($qry_member)){
                echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama'].'</option>';    
            }
            ?>
        </select>
        <br>
        Batas Waktu :  
        <input type="date" name="batas_waktu" value="" class="form-control" require>
        <br>
        <!-- Bayar :  
        <input type="date" name="tgl_bayar" value="" class="form-control" require> -->
        <br>
        <table>
            <tr>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Qty</th>
            </tr>
            <?php 
                include "koneksi.php";
                $qry_paket=mysqli_query($koneksi,"select * from paket");
                while($data_paket=mysqli_fetch_array($qry_paket)){
                    echo '<tr>
                        <td> 
                            <input type="checkbox" id="'.$data_paket['id_paket'].'" name="'.$data_paket['id_paket'].'" value="'.$data_paket['id_paket'].'">
                            <label for="'.$data_paket['id_paket'].'"> '.$data_paket['jenis'].'</label></td>
                        <td>
                            <input type="number" name="harga_'.$data_paket['id_paket'].'" value="'.$data_paket['harga'].'" readonly>
                        </td>
                        <td>
                            <input type="number" name="qty_'.$data_paket['id_paket'].'" value="">
                        </td>
                    </tr>';    
                }
            ?>
        </table>
        <input type="submit" value="add transaksi">
    </form>
</div> 
</body>
</html>