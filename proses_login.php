<?php 
if($_POST){
  $username_user = $_POST['username'];
  $password_user = $_POST['password'];
  echo $username_user;
  echo $password_user;
  // if(empty($username_user)){
  //   echo "<script>alert('Username tidak boleh kosong');location.href='index.php';</script>";
  // } elseif(empty($password_user)){
  //   echo "<script>alert('Password tidak boleh kosong');location.href='index.php';</script>";
  // } else {
    include "koneksi.php";
    $qry_login=mysqli_query($koneksi,"select * from user where username='".$username_user."' and password='".md5($password_user)."'");
    if(mysqli_num_rows($qry_login)>0){
      $dt_login=mysqli_fetch_array($qry_login);
      session_start();
      $_SESSION['id_user']   = $dt_login['id_user'];
      $_SESSION['nama']           = $dt_login['nama'];
      $_SESSION['status_login']   = true;
      header("location: home.php");
    } else {
      echo "<script>alert('Gagal');location.href='index.php';</script>";
      
    }
  }
// }
?>

