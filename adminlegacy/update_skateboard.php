<?php
// menghubungkan kembali
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];


// update data
mysqli_query($koneksi, "update skateboard set  nama='$nama', harga='$harga' where id='$id'");

// mengalihkan halaman kembali ke halaman data kelas
header("location:data_skateboard.php");
