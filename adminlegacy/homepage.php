<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN LEGACY</title>
  <!-- bootstrap 5 css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
  <!-- custom css -->
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
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

    .mytitle {
      margin-bottom: 71px;
      color: white;
      font-size: 50px;
      font-family: 'Courier New', Courier, monospace;
    }

    .card-title {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 23px;
      font-weight: bold;
      color: white;
    }

    .card {
      border-radius: 17px;
      background-color: crimson;
      margin-left: 35px;
      margin-right: 35px;
      margin-bottom: 20px;
      transition: transform 0.3s, box-shadow 0.3s, opacity 0.3s;
      opacity: 1;
    }

    .cardd {
      border-radius: 17px;
      background-color: DeepSkyBlue;
      margin-left: 35px;
      margin-right: 35px;
      margin-bottom: 20px;
      transition: transform 0.3s, box-shadow 0.3s, opacity 0.3s;
      opacity: 1;
    }

    .carddd {
      border-radius: 17px;
      background-color: LimeGreen;
      margin-left: 35px;
      margin-right: 35px;
      margin-bottom: 20px;
      transition: transform 0.3s, box-shadow 0.3s, opacity 0.3s;
      opacity: 1;
    }

    .cardddd {
      border-radius: 17px;
      background-color: gold;
      margin-left: 35px;
      margin-right: 35px;
      margin-bottom: 20px;
      transition: transform 0.3s, box-shadow 0.3s, opacity 0.3s;
      opacity: 1;
    }


    .card:hover {
      transform: scale(1.02);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      opacity: 0.9;
    }

    .card-body {
      text-align: center;
    }

    .cardd:hover {
      transform: scale(1.02);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      opacity: 0.9;
    }

    .cardd-body {
      text-align: center;
    }

    .carddd:hover {
      transform: scale(1.02);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      opacity: 0.9;
    }

    .cardddd-body {
      text-align: center;
    }

    .cardddd:hover {
      transform: scale(1.02);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      opacity: 0.9;
    }

    .cardddd-body {
      text-align: center;
    }

    .btn {
      background-color: #282E3E;
      color: white;
      opacity: 1;
      transition: opacity 0.3s;
      padding: 12px 24px;
      font-size: 18px;
    }

    .btn:hover {
      color: #282E3E;
      background-color: lightblue;
      opacity: 1;
    }

    .card:hover .btn {
      opacity: 1;
    }

    .marquee {
      margin-bottom: 90px;
      width: 100%;
      height: 50px;
      color: #8ebf42;
      overflow: hidden;
      position: relative;
      background-color: black;
    }

    .marquee span {
      position: absolute;
      width: 100%;
      height: 100%;
      font-size: 30px;
      font-weight: bold;
      text-align: center;
      line-height: 50px;
      animation: marquee 17s linear infinite;
      animation-direction: alternate;
    }

    @keyframes marquee {
      0% {
        left: 100%;
      }

      100% {
        left: -100%;
      }
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
  <div style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://assets.gqindia.com/photos/5cdc5dd6956b1c4d516501e1/16:9/w_2560%2Cc_limit/skateboard.jpg');
background-size: cover; height:250px; padding-top: 90px; text-align: center; margin-bottom:50px;">
    <div class="mytitle">
      <h1>Hi Admin!</h1>
    </div>
    <div class="marquee">
      <span>ADMIN PAGE! LegacySkateShop & @LegacyCorporation</span>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">DATA PRODUK</h5>
            <i class="bi bi-clipboard2-fill" style="font-size: 40px; "></i><br><br>
            <a href="data_produk.php" class="btn btn-lg">Click</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="cardd">
          <div class="card-body">
            <h5 class="card-title">DATA TRANSAKSI</h5>
            <i class="bi bi-credit-card-fill" style="font-size: 40px;"></i><br><br>
            <a href="data_transaksi.php" class="btn btn-lg">Click</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="carddd">
          <div class="card-body">
            <h5 class="card-title">DATA KATEGORI</h5>
            <i class="bi bi-collection-fill" style="font-size: 40px;"></i><br><br>
            <a href="kategori.php" class="btn btn-lg">Click</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="cardddd">
          <div class="card-body">
            <h5 class="card-title">DATA PEGAWAI</h5>
            <i class="bi bi-person-fill" style="font-size: 40px;"></i><br><br>
            <a href="data_pegawai.php" class="btn btn-lg">Click</a>
          </div>
        </div>
      </div>
    </div>
</body>

</html>