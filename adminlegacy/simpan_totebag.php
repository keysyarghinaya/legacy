<?php

include 'koneksi.php';

session_start();

$id = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];


mysqli_query($koneksi, "insert into totebag values('$id', '$kode','$nama','$harga')");

// mengalihkan halaman kembali ke halaman view Data piket
header("location:data_totebag.php");