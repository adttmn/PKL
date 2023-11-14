<?php

include 'Connect.php';



$pass = md5($_POST['password']);
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $pass);
$pilih = mysqli_escape_string($conn, $_POST['pilih']);

//cek username yang terdaftar
$cek_user = mysqli_query($conn, "SELECT * FROM form_admin WHERE username = '$username' and pilih ='$pilih' ");
$user_valid = mysqli_fetch_array($cek_user);

if ($user_valid) {


    //jika Password sesuai atau tidak
    if ($password == $user_valid['password']) {

        //jika password sesuai
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['pilih'] = $user_valid['pilih'];

        //pengujian pilih
        if ($pilih == "Admin") {
            header('location:Admin.php');
        }
    } else {
        echo "<script>alert('Maaf, Login anda Gagal, Username anda tidak terdaftar');
        document.location='Admin.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login anda Gagal, Password anda tidak sesuai');
        document.location='Admin.php'</script>";
}
