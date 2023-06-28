<?php
// menghubungkan kembali
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$waktu_transaksi = $_POST['waktu_transaksi'];


// update data
mysqli_query($koneksi, "update data_transaksi set nama_barang='$nama_barang', jumlah_barang='$jumlah_barang',
waktu_transaksi='$waktu_transaksi' where id='$id'");

// mengalihkan halaman kembali ke halaman data kelas
header("location:data_transaksi.php");
