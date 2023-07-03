<?php

include 'koneksi.php';

session_start();

$id = $_POST['id'];
$kode = $_POST['kode'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah_barang = $_POST['jumlah_barang'];
$total = $_POST['total'];
$waktu_transaksi = $_POST['waktu_transaksi'];


mysqli_query($koneksi, "insert into data_transaksi values('$id','$kode','$nama_barang','$harga','$jumlah_barang','$total','$waktu_transaksi')");

// mengalihkan halaman kembali ke halaman view Data piket
header("location:data_transaksi.php");