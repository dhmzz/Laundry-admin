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
        <h1>Data Admin</h1>        
        <br>     
        <table>
            <thead>
            <tr>
                <th style="width : 95%">
                    <form action="tampil_member.php" method ="POST">           
                    <input  type="text" name="cari" class="form-control" placeholder="Masukkan Keyword Pencarian id/nama member">      
                </th>
                <th style="width : 5%">
                    <a type="button" class="btn btn-primary" href="add_admin.php">Add Admin</a>
                </th>
            </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                if (isset($_POST["cari"])) {
                    //jika ada keyword pencarian
                    $cari=$_POST["cari"];
                    $qry_user=mysqli_query($koneksi,  "select * from user where id_user like'%$cari%' or nama like '%$cari%' or username like '%$cari%'");

                }else {
                    //jika tidak ada, tampil semua
                    $qry_user=mysqli_query($koneksi,"select * from user");
                }
                ?>
            </tbody>
            </table>
        </form>
        <br>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id User</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>                      
                    </tr>
                </thead>
                <div>           
                </div>
                <tbody>
                    <?php
                        include "koneksi.php";
                        while($data_user=mysqli_fetch_array($qry_user)){?>
                            <div>
                            <tr>
                                <td><?php echo $data_user["id_user"];?></td>
                                <td><?php echo $data_user["username"];?></td>
                                <td><?php echo $data_user["nama"];?></td>
                                <td><?php echo $data_user["password"];?></td>
                                <td>
                                <a href="ubah_admin.php?id_user=<?php echo $data_user['id_user']?>" class="btn btn-success">Ubah</a>
                                <a href="hapus_admin.php?id_user=<?php echo $data_user['id_user']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
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