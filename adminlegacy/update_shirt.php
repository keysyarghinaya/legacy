<?php
// menghubungkan kembali
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];


// update data
mysqli_query($koneksi, "update shirt set   kode='$kode', nama='$nama', harga='$harga' where id='$id'");

// mengalihkan halaman kembali ke halaman data kelas
header("location:data_shirt.php");
