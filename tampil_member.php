<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class = "container" style="margin-top : 50px">
        <h1>Data Member</h1>        
        <br>     
        <table>
            <thead>
            <tr>
                <th style="width : 95%">
                    <form action="tampil_member.php" method ="POST">           
                    <input  type="text" name="cari" class="form-control" placeholder="Masukkan Keyword Pencarian id/nama member">      
                </th>
                <th style="width : 5%">
                    <a type="button" class="btn btn-primary" href="add_member.php">Add Member</a>
                </th>
            </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                if (isset($_POST["cari"])) {
                    //jika ada keyword pencarian
                    $cari=$_POST["cari"];
                    $qry_member=mysqli_query($koneksi,  "select * from member where id_member like'%$cari%' or nama like '%$cari%' or alamat like '%$cari%'");

                }else {
                    //jika tidak ada, tampil semua
                    $qry_member=mysqli_query($koneksi,"select * from member");
                }
                ?>
            </tbody>
            </table>
        </form>
        <br>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id Member</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Gender</th>
                        <th scope="col">No Telp</th>                        
                    </tr>
                </thead>
                <div>           
                </div>
                <tbody>
                    <?php
                        include "koneksi.php";
                        while($data_member=mysqli_fetch_array($qry_member)){?>
                            <div>
                            <tr>
                                <td><?php echo $data_member["id_member"];?></td>
                                <td><?php echo $data_member["nama"];?></td>
                                <td><?php echo $data_member["alamat"];?></td>
                                <td><?php echo $data_member["jenis_kelamin"];?></td>
                                <td><?php echo $data_member["tlp"];?></td>
                                <td>
                                <a href="ubah_member.php?id_member=<?php echo $data_member['id_member']?>" class="btn btn-success">Ubah</a>
                                <a href="hapus_member.php?id_member=<?php echo $data_member['id_member']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
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