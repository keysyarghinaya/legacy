<?php
// menghubungkan kembali
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$kode = $_POST['kode'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah_barang = $_POST['jumlah_barang'];
$total = $_POST['total'];
$waktu_transaksi = $_POST['waktu_transaksi'];


// update data
mysqli_query($koneksi, "update data_transaksi set kode='$kode', nama_barang='$nama_barang', harga='$harga',
 jumlah_barang='$jumlah_barang', total='$total', waktu_transaksi='$waktu_transaksi' where id='$id'");

// mengalihkan halaman kembali ke halaman data kelas
header("location:data_transaksi.php");
