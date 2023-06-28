<?php

include 'koneksi.php';

session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];



mysqli_query($koneksi, "insert into user values('$id','$nama','$username','$password','$level')");

// mengalihkan halaman kembali ke halaman view Data piket
header("location:login.php");