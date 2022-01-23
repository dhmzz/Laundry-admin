<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "navbar.php"?>
</head>
<body>
    <div style="margin: 30px 200px; background-color: rgb(255, 255, 255); box-shadow: black 2px 5px; box-shadow: #838383 0px -8px 20px; border-radius: 0px;">   
    <form action="proses_add_member.php" method="post" style="padding : 80px;"">
        <h2>Add Member</h2>
        <br>
        Nama :  
        <input type="text" name="nama" value="" class="form-control" require>
        <br>
        Alamat : 
        <textarea name="alamat" class="form-control" width="200" required></textarea>
        <br>
        Jenis Kelamin :
        <br> 
        <input type="radio" name="jenis_kelamin" value="Laki-laki" class="btn btn-primary" require>
        <label for="Laki-laki">Laki-laki</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan" class="btn btn-primary" require>
        <label for="Perempuan">Perempuan</label>
        <br>
        No Telp :  
        <input type="text" name="tlp" value="" class="form-control" require>
        <br>
        <input type="submit" value="add_member">
    </form>
</div> 
</body>
</html>