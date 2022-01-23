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
    <form action="proses_add_admin.php" method="post" style="padding : 80px;"">
        <h2>Add Admin</h2>
        <br>
        Nama :  
        <input type="text" name="nama" value="" class="form-control" require>
        <br>
        Username :  
        <input type="text" name="username" value="" class="form-control" require>
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
        <input type="submit" value="add_member">
    </form>
</div> 
</body>
</html>