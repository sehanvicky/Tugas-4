<?php

    session_start();
    
$koneksi=mysqli_connect("localhost","root","","library");

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['pass'];

// menginput data ke database
$a=mysqli_query($koneksi,"INSERT into user values('','$nama','$username','$pass','user')");

// mengalihkan halaman kembali ke index.php
if($a){
header("location:index.php");
}

?>