<?php

include 'koneksi.php';

session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];


mysqli_query($koneksi, "insert into shoes values('$id','$nama','$harga')");

// mengalihkan halaman kembali ke halaman view Data piket
header("location:data_shoes.php");