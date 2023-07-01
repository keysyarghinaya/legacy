<?php

include 'koneksi.php';

session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];


mysqli_query($koneksi, "insert into pegawai values('$id','$nama','$jenis_kelamin','$alamat')");

// mengalihkan halaman kembali ke halaman view Data piket
header("location:data_pegawai.php");