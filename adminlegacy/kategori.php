<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
    <!-- custom css -->
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>KATEGORI</title>
    <style>
        body {
            --test: calc(1000rem * 10000rem);

            background-color: white;
            padding-bottom: var(--test) !important;
        }

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

        .marquee {
            margin-bottom: 40px;
            width: 100%;
            height: 50px;
            color: white;
            overflow: hidden;
            position: relative;
            background-color: #282E3E;
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


        .card-title {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 23px;
            font-weight: bold;
            color: white;
        }

        .card {
            border-radius: 25px;
            background-color: #282E3E;
            margin-left: 35px;
            margin-right: 35px;
            margin-bottom: 40px;
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

        .btn0 {
            background-color: #282E3E;
            color: white;
            text-decoration: none;
            font-size: 20px;
        }

        .btn0:hover {
            color: #282E3E;
            background-color: lightblue;
        }

        .btn {
            background-color: #282E3E;
            color: white;
            opacity: 1;
            transition: opacity 0.3s;
            padding: 12px 24px;
            font-size: 18px;
            border-color: lightblue;
        }

        .btn:hover {
            color: #282E3E;
            background-color: lightblue;
            opacity: 1;
        }

        .card:hover .btn {
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="marquee">
        <span>| |DATA KATEGORI | | DATA KATEGORI | | DATA KATEGORI | |</span>
    </div>
    <center><a href="homepage.php" class="btn0 btn-sm pull-left" >Back</a></center><br><br>
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DATA SHIRT</h5><br>
                    <a href="data_shirt.php" class="btn btn-lg">Click</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DATA PANTS</h5><br>
                    <a href="data_pants.php" class="btn btn-lg">Click</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DATA SWEATER</h5><br>
                    <a href="data_sweater.php" class="btn btn-lg">Click</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DATA HOODIE</h5><br>
                    <a href="data_hoodie.php" class="btn btn-lg">Click</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DATA SKATEBOARD</h5>
                    <a href="data_skateboard.php" class="btn btn-lg">Click</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DATA SHOES</h5><br>
                    <a href="data_shoes.php" class="btn btn-lg">Click</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DATA HAT</h5><br>
                    <a href="data_hat.php" class="btn btn-lg">Click</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DATA BAG</h5><br>
                    <a href="data_totebag.php" class="btn btn-lg">Click</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>