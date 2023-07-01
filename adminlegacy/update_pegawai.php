<?php
// menghubungkan kembali
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];


// update data
mysqli_query($koneksi, "update pegawai set  nama='$nama', jenis_kelamin='$jenis_kelamin',
alamat='$alamat' where id='$id'");

// mengalihkan halaman kembali ke halaman data kelas
header("location:data_pegawai.php");
