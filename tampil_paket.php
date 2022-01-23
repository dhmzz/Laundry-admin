<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Paket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class = "container" style="margin-top : 50px">
        <h1>Data Paket</h1>        
        <br>     
        <table>
            <thead>
            <tr>
                <th style="width : 95%">
                    <form action="tampil_paket.php" method ="POST">           
                    <input  type="text" name="cari" class="form-control" placeholder="Masukkan Keyword Pencarian id/nama paket">      
                </th>
                <th style="width : 5%">
                    <a type="button" class="btn btn-primary" href="add_member.php">Add Paket</a>
                </th>
            </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                if (isset($_POST["cari"])) {
                    //jika ada keyword pencarian
                    $cari=$_POST["cari"];
                    $qry_paket=mysqli_query($koneksi,  "select * from paket where id_paket like'%$cari%' or jenis like '%$cari%'");

                }else {
                    //jika tidak ada, tampil semua
                    $qry_paket=mysqli_query($koneksi,"select * from paket");
                }
                ?>
            </tbody>
            </table>
        </form>
        <br>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id Paket</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Harga</th>                        
                    </tr>
                </thead>
                <div>           
                </div>
                <tbody>
                    <?php
                        include "koneksi.php";
                        while($data_paket=mysqli_fetch_array($qry_paket)){?>
                            <div>
                            <tr>
                                <td><?php echo $data_paket["id_paket"];?></td>
                                <td><?php echo $data_paket["jenis"];?></td>
                                <td>Rp <?php echo $data_paket["harga"];?></td>
                                <td>
                                <a href="ubah_paket.php?id_siswa=<?php echo $data_paket['id_paket']?>" class="btn btn-success">Ubah</a>
                                <a href="hapus_paket.php?id_siswa=<?php echo $data_paket['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                </td>             
                            </tr>
                            </div>
                            </div>
                        <?php
                        }
                    ?>
                    
                    
                </tbody>
                <footer>        
                </footer>
        </table>
    </div> 
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</footer>
</html>