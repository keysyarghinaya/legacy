<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAMBAH DATA KATEGORI TOTEBAG</title>
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
            max-width: 500px;
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
<body style="background: #f0f0f0">
    <div class="container">

        <center>
            <br />
            <h2>Data Totebag</h2>
        </center>
        <form action="simpan_totebag.php" method="post">
            <div class="panel">
                <br />
                <div class="panel-body">
                    <input type="hidden" class="form-control" name="id">
                </div>
                <div class="panel-body">
                    <label>Kode</label>
                    <input type="text" class="form-control" name="kode" placeholder="Masukkan kode">
                </div>
                <div class="panel-body">
                    <label>Nama totebag</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama totebag">
                </div>
                <div class="panel-body">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="harga" placeholder="Masukkan harga">
                </div>
                    
                <div class="mybtns">
                    <input type="submit" class=" btn btn-info" value="Simpan">
                </div>
                <br />
        </form>
            <form action="data_totebag.php" method="post">
                <div class="mybtns2">
                    <input type="submit" class=" btn btn-danger" value="Kembali">
                </div>
            </form>
            </div>
            <br />
    </div>
</body>
</html>
