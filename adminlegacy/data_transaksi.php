<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA TRANSAKSI-LEGACY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        #clock {
            font-size: 48px;
            text-align: center;
        }

        #date {
            font-size: 24px;
            text-align: center;
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

        .btn0 {
            background-color: #282E3E;
            color: white;
            text-decoration: none;
        }

        .btn1 {
            background-color: red;
            color: white;
            text-decoration: none;
        }

        .btn0:hover {
            color: #282E3E;
            background-color: lightblue;
        }

        .btn1:hover {
            color: red;
            background-color: whitesmoke;
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
    <script>
        function hey() {
            alert('Apakah yakin ingin dihapus?');
        }
    </script>
</head>

<body>
<div id="datetime-container">
    <div id="clock"></div>
    <div id="date"></div>

    <script>
        function updateTime() {
            var clock = document.getElementById('clock');
            var date = document.getElementById('date');
            var datetimeContainer = document.getElementById('datetime-container');
            var currentDate = new Date();

            // Mengambil informasi waktu
            var hours = currentDate.getHours();
            var minutes = currentDate.getMinutes();
            var seconds = currentDate.getSeconds();

            // Menambahkan angka 0 di depan angka satu digit
            hours = addZero(hours);
            minutes = addZero(minutes);
            seconds = addZero(seconds);

            // Menampilkan waktu
            clock.textContent = hours + ':' + minutes + ':' + seconds;

            // Menampilkan tanggal
            var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            var dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            var dateText = currentDate.toLocaleDateString('id-ID', dateOptions);
            date.textContent = dateText;

            // Memperbarui waktu setiap detik (1000ms)
            setTimeout(updateTime, 1000);
        }

        function addZero(number) {
            return number < 10 ? '0' + number : number;
        }

        updateTime();
    </script>
    <div class="container">
        <div class="panel">
            <div class="panel-body">

                <br><br>
                <a href="homepage.php" class="btn1 btn-sm pull-left">Back</a><br><br>
                <a href="tambah_transaksi.php" class="btn0 btn-sm pull-left">Tambah Data Transaksi</a>

                <br />
                <br />

                <table class="table table-bordered table-striped">
                    <tr>
                        <th width="1%">No</th>
                        <th>Kode</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Jumlah Produk</th>
                        <th>Total Harga</th>
                        <th>Waktu Transaksi</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
                    // koneksi  database
                    include 'koneksi.php';

                    //mengambil data pelanggan dari database
                    $data = mysqli_query($koneksi, "select * from data_transaksi");
                    //$no = 1
                    // mengubah data ke array dan menampilkannya dengan perulangan while
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $d['id'] ?></td>
                            <td><?php echo $d['kode'] ?></td>
                            <td><?php echo $d['nama_barang'] ?></td>
                            <td><?php echo $d['harga'] ?></td>
                            <td><?php echo $d['jumlah_barang'] ?></td>
                            <td><?php echo $d['total'] ?></td>
                            <td><?php echo $d['waktu_transaksi'] ?></td>

                            <td>
                                <a href="edit_transaksi.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-primary">Update</a>
                                <a href="hapus_transaksi.php?id=<?php echo $d['id']; ?>" onclick="hey()" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>