<?php
// menghubungkan
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus pelanggan
mysqli_query($koneksi, "delete from data_transaksi where id='$id'");

// alihkan halaman ke halaman pelanggan
header("location:data_transaksi.php");
