<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA TRANSAKSI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .column {
            float: left;
            width: 100%;
            padding: 10px;
        }

        .panel {
            width: 95%;
            max-width: 350px;
            margin: 20px auto 0px auto;
            padding: 20px;
            box-shadow: 0px 0px 3px 0px gray;
        }

        .mybtns {
            display: flex;
            flex-direction: row;
            align-items: left;
            justify-content: left;
            margin-top: 20px;
        }

        label {
            display: flex;
            flex-direction: row;
            align-items: left;
            justify-content: left;
            margin-top: 20px;
        }

        .mybtns>button {
            margin-right: 10px;
        }

        .mybtns2>button {
            margin-right: 10px;
        }

        @media screen and (min-width: 600px) {
            .column {
                width: 50%;
            }
        }

        @media screen and (min-width: 900px) {
            .column {
                width: 33.33%;
            }
        }
    </style>
</head>

<body>

    <body style="background: #f0f0f0" zx>
        <div class="container">
            <br />
            <br />

            <div class="panel">
                <div class="panel-heading">
                    <h3>EDIT DATA TRANSAKSI</h3>
                </div>
                <div class="panel-body">

                    <?php
                    //menghubungkan koneksi
                    include 'koneksi.php';

                    //menangkap kode yang dikirim melalui url
                    $id = $_GET['id'];

                    // mengambil data  yang ber id di atas dari tabel 
                    $data = mysqli_query($koneksi, "select * from data_transaksi where id='$id'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>

                        <form method="post" action="update_transaksi.php">
                            <div class="form-group">
                                <label>Kode</label>
                                <!-- form id siswa yang diedit, untuk dikirim ke file akasi -->
                                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                                <input type="text" class="form-control" name="kode" placeholder="Masukkan kode produk" value="<?php echo $d['kode']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama Produk </label>
                                <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama produk" value="<?php echo $d['nama_barang']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Harga Produk </label>
                                <input type="text" class="form-control" name="harga" placeholder="Masukkan harga produk" value="<?php echo $d['harga']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Jumlah Produk </label>
                                <input type="text" class="form-control" name="jumlah_barang" placeholder="Masukkan jumlah produk" value="<?php echo $d['jumlah_barang']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Total Harga </label>
                                <input type="text" class="form-control" name="total" placeholder="Masukkan jumlah produk" value="<?php echo $d['total']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Waktu Transaksi</label>
                                <input type="date" class="form-control" name="waktu_transaksi" placeholder="Masukkan waktu transaksi" value="<?php echo $d['waktu_transaksi']; ?>">
                            </div>

                            <div class="mybtns">
                                <input type="submit" class="btn btn-info" value="Update">
                            </div>
                        </form>

                        <br />

                        <form action="data_transaksi.php" method="post">
                            <div class="mybtns2">
                                <input type="submit" class=" btn btn-danger" value="Kembali">
                            </div>
                        </form>

                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </body>

</html>