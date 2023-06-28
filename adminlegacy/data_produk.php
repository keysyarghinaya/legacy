<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PRODUK-LEGACY</title>
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
    <div class="container">
        <div class="panel">
            <div class="panel-body">
            
                <br><br>
                <a href="homepage.php" class="btn1 btn-sm pull-left">Back</a><br><br>
                <a href="tambah_produk.php" class="btn0 btn-sm pull-left">Tambah Data Produk</a>

                <br />
                <br />

                <table class="table table-bordered table-striped">
                    <tr>
                        <th width="1%">No</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
                    // koneksi  database
                    include 'koneksi.php';

                    //mengambil data pelanggan dari database
                    $data = mysqli_query($koneksi, "select * from data_produk");
                    //$no = 1
                    // mengubah data ke array dan menampilkannya dengan perulangan while
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $d['id'] ?></td>
                            <td><?php echo $d['nama_produk'] ?></td>
                            <td><?php echo $d['harga_produk'] ?></td>
                            <td><?php echo $d['stok_produk'] ?></td>

                            <td>
                                <a href="edit_produk.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-primary">Update</a>
                                <a href="hapus_produk.php?id=<?php echo $d['id']; ?>" onclick="hey()" class="btn btn-sm btn-danger">Delete</a>
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