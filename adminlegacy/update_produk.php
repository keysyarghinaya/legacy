<?php
// menghubungkan kembali
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$kode = $_POST['kode'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$stok_produk = $_POST['stok_produk'];


// update data
mysqli_query($koneksi, "update data_produk set   kode='$kode', nama_produk='$nama_produk', harga_produk='$harga_produk',  stok_produk='$stok_produk' where id='$id'");

// mengalihkan halaman kembali ke halaman data kelas
header("location:data_produk.php");
