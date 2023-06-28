<?php

include 'koneksi.php';

session_start();

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$waktu_transaksi = $_POST['waktu_transaksi'];


mysqli_query($koneksi, "insert into data_transaksi values('$id','$nama_barang','$jumlah_barang','$waktu_transaksi')");

// mengalihkan halaman kembali ke halaman view Data piket
header("location:data_transaksi.php");