<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah User</title>    
</head>
<body>
    <!-- Get id user by session -->  
    <?php
    
        include "koneksi.php";
        include "navbar.php"; 
        $qry_get_user=mysqli_query($koneksi,"select * from user where id_user = '".$_GET["id_user"]."'");
        $dt_user=mysqli_fetch_array($qry_get_user); 
    ?>
    <div style="margin: 30px 200px; background-color: rgb(255, 255, 255); box-shadow: black 2px 5px; box-shadow: #838383 0px -8px 20px; border-radius: 0px;">   
    <form action="proses_ubah_admin.php" method="post" style="padding : 80px;">
        <input type="hidden" name="id_user" value="<?=$dt_user['id_user']?>">
        <h2>Add Admin</h2>
        <br>
        Nama :  
        <input type="text" name="nama" value="<?php echo $dt_user['nama'] ?>" class="form-control" require>
        <br>
        Username :  
        <input type="text" name="username" value="<?php echo $dt_user['username'] ?>" class="form-control" require>
        <br>
        Password : 
        <textarea name="password" class="form-control" width="200" required></textarea>
        <br>
        Role :
        <br> 
        <input type="radio" name="role" value="admin" class="btn btn-primary" require>
        <label for="admin">Admin</label>
        <input type="radio" name="role" value="kasir" class="btn btn-primary" require>
        <label for="kasir">Kasir</label>
        <br>
        <input type="submit" value="ubah admin">
    </form>
</div> 
</body>
</html>