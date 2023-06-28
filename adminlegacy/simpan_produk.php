<?php

include 'koneksi.php';

session_start();

$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$stok_produk = $_POST['stok_produk'];


mysqli_query($koneksi, "insert into data_produk values('$id','$nama_produk','$harga_produk','$stok_produk')");

// mengalihkan halaman kembali ke halaman view Data piket
header("location:data_produk.php");