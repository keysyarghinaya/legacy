<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0,2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5,1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>HOME | | LegacySkateShop</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <style>
        body {
            --test: calc(1000rem * 10000rem);
            background: linear-gradient(to bottom, #282E3E 0%, #282E3E 17.33%, #FFFFFF 17.33%, #FFFFFF 100%);
            padding-bottom: var(--test) !important;

        }

        .mycards {
            margin: 50px auto 0px auto;
            width: 80%;
            max-width: 1200px;
        }

        .card {
            border-radius: 15px;

        }

        .card img {
            border-radius: 15px 15px 0 0;
        }

        .card-body {
            display: flex;
            align-items: left;
            justify-content: left;
            padding-left: 10px;
            font-size: 18px;
        }

        .card-body a {
            color: black;
            text-decoration: none;
            text-align: left;
        }

        .btn-more {
            position: absolute;
            display: flex;
            margin-top: 50px;
            margin-left: 640px;
        }

        .btn-more>a>button {
            border: none;
            border-radius: 30px;
            background-color: lightgreen;
            width: 90px;
            height: 55px;
            color: white;
        }

        .btn-more>a>button:hover {
            transform: scale(0.90);
            transition: all .3s ease-in-out
        }

        .classgambar {
            width: 200px;
            height: 570px;
        }

        .classgambar img {
            width: 100px;
            height: 700px;
            background-position: center;
            background-size: cover;
        }



        .wrapperr {
            position: absolute;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            margin-left: 16px;
            padding: 15px 0 15px 0;
            width: 97%;
            height: 150px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0px 0px 100px 3px #EE82EE;
        }


        .navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 17px;
        }

        .navigation>li {
            list-style-type: none;
            padding: 10px;
            margin: 0px 10px 0px 10px;

        }

        .navigation>li>img {
            width: 50px;
            height: 65px;
        }

        .navigation>li>a {
            color: white;
            font-size: 20px;
            text-decoration: none;
        }

        .navigation>li>a:hover {
            color: crimson;
            transition: all .3s ease-in-out
        }

        .button {
            display: block;
            justify-content: center;
            align-items: center;
            text-align: center;
            text-decoration: none;
            margin-top: auto;
            padding: 16px;
            color: #000;
            background: transparent;
            box-shadow: 0px 0px 0px 1px black inset;
            transition: backround 0.4s ease;
        }

        .details {
            width: 140px;
            height: 150px;
            max-width: 350px;
            margin-left: 20px;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #282E3E;
            border-radius: 15px;
            font-family: Lucida Bright;
            text-align: center;
            color: white;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .details:hover {
            background-color: #49526E;
        }

        .details a {
            text-decoration: none;
            color: white;
        }

        /* katalog */

        h1 {
            text-align: center;
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 10px;
            padding: 0 5px;
            /* Add padding for equal spacing on both sides */
            margin-top: 50px;
        }


        .product-card {
            position: relative;
            width: 230px;
            height: 350px;
            border: 0px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-15px);
        }

        .product-card {
            position: relative;
        }

        .product-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.1);
            opacity: 0;
            transition: opacity 0.3s;
            pointer-events: none;
        }

        .product-card:hover::before {
            opacity: 1;
        }

        .card-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-info {
            padding: 10px;
        }

        .product-info h3 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        .product-info p {
            margin: 5px 0;
            font-size: 14px;
        }

        .rating {
            color: #ffc107;
        }

        .rating span {
            font-size: 20px;
            margin-right: 3px;
        }

        .green-button {
            display: inline-block;
            padding: 7px 20px;
            background-color: #00b300;
            color: #fff;
            border: none;
            border-radius: 7px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            /* Menghapus garis bawah pada tombol */
        }

        .green-button:hover {
            background-color: #009900;
            color: white;
            transform: scale(0.90);
            transition: all .3s ease-in-out
        }

        .text:hover {
            color: white;
            transform: scale(0.90);
            transition: all .3s ease-in-out
        }

        /* tulisan glowing */
        @import url(https://fonts.googleapis.com/css?family=Akronim);

        .fire {
            margin: 50px auto;
            width: 80%;
            max-width: 1000px;
            height: 200px;
            background-position: center center;
            background-size: 1000px 200px;
            border-radius: 10px;
            font-family: 'Akronim';
            overflow: hidden;
            text-align: center;
            vertical-align: middle;
        }

        .fire:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }

        .Blazing {
            display: inline-block;
            margin: 0;
            color: #F5F5F5;
            /* Mengubah warna tulisan menjadi putih (hampir abu-abu terang) */
            font-size: 100px;
            line-height: 50px;
            min-width: 50px;
            outline: none;
            vertical-align: middle;

            text-shadow:
                0 3px 20px #66CDAA,
                /* Mengubah warna bayangan api menjadi hijau laut */
                0 0 20px #66CDAA,
                0 0 10px #66CDAA,
                4px -5px 6px #66CDAA,
                -4px -10px 10px #66CDAA,
                0 -10px 30px #66CDAA;
            animation: 2s Blazing infinite alternate linear;
        }

        @keyframes Blazing {
            0% {
                text-shadow: 0 3px 20px #66CDAA, 0 0 20px #66CDAA,
                    0 0 10px #66CDAA,
                    0 0 0 #66CDAA,
                    0 0 5px #66CDAA,
                    -2px -5px 5px #66CDAA,
                    4px -10px 10px #66CDAA;
            }

            25% {
                text-shadow: 0 3px 20px #66CDAA, 0 0 30px #66CDAA,
                    0 0 20px #66CDAA,
                    0 0 5px #66CDAA,
                    -2px -5px 5px #66CDAA,
                    3px -10px 10px #66CDAA,
                    -4px -15px 20px #66CDAA;
            }

            50% {
                text-shadow: 0 3px 20px #66CDAA, 0 0 20px #66CDAA,
                    0 -5px 10px #66CDAA,
                    -2px -5px 5px #66CDAA,
                    3px -10px 10px #66CDAA,
                    -4px -15px 20px #66CDAA,
                    2px -20px 30px rgba(102, 205, 170, 0.5);
            }

            75% {
                text-shadow: 0 3px 20px #66CDAA, 0 0 20px #66CDAA,
                    0 -5px 10px #66CDAA,
                    3px -5px 5px #66CDAA,
                    -4px -10px 10px #66CDAA,
                    2px -20px 30px rgba(102, 205, 170, 0.5),
                    0px -25px 40px rgba(102, 205, 170, 0);
            }

            100% {
                text-shadow: 0 3px 20px #66CDAA, 0 0 20px #66CDAA,
                    0 0 10px #66CDAA,
                    0 0 0 #66CDAA,
                    0 0 5px #66CDAA,
                    -2px -5px 5px #66CDAA,
                    4px -10px 10px #66CDAA;
            }
        }



        /* Gaya dasar untuk teks */
        .hover-text {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
            /* Efek transisi ketika mengubah warna */

        }

        /* Gaya ketika hover */
        .hover-text:hover {
            color: lightgreen;
            /* Tambahkan gaya tambahan sesuai kebutuhan */
        }

        .column-wrapper {
            padding-left: 10px;
            display: flex;
            justify-content: space-between;
        }

        .column {
            flex-basis: 30%;
            padding-right: 20px;
        }

        .post {
            margin-bottom: 20px;
            background-color: #f9f9f9;
            padding: 10px;
        }

        .post-image {
            max-width: 80%;
            height: auto;
            margin-bottom: 8px;
        }

        .post-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .post-date {
            font-size: 14px;
            color: #999;
            margin-bottom: 10px;
        }

        .post-content {
            font-size: 16px;
            line-height: 1.5;
        }

        .button-containert {
            border-radius: 50px;
            opacity: 0.1px;
            width: 25%;
            background-color: cornflowerblue;
            padding-top: 15px;
            padding-bottom: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            opacity: 1;
            transition: opacity 0.5s;
        }

        .button-containert:hover {
            opacity: 0.8;
        }

        .kontener {
            padding-top: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .round-button {
            position: relative;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: white;
            opacity: 0.5;
            margin: 5px;
            border: none;
            transition: opacity 0.3s ease-in-out;
        }

        .round-button.active {
            opacity: 1;
        }

        .round-button:focus {
            outline: none;
        }

        .round-button span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
            font-size: 12px;
        }

        .round-button:hover {
            opacity: 1;
            background-color: lightgreen;
        }

        .hrr {
            border: none;
            border-top: 4px solid;
        }

        @import url(https://fonts.googleapis.com/css?family=Akronim);

        .fire {
            margin: 50px auto;
            width: 80%;
            max-width: 1000px;
            height: 200px;
            background-position: center center;
            background-size: 1000px 200px;
            border-radius: 10px;
            font-family: 'Akronim';
            overflow: hidden;
            text-align: center;
            vertical-align: middle;
        }

        .fire:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }

        .Blazingg {
            display: inline-block;
            margin: 0;
            color: #F5F5F5;
            /* Mengubah warna tulisan menjadi putih (hampir abu-abu terang) */
            font-size: 65px;
            line-height: 50px;
            min-width: 50px;
            outline: none;
            vertical-align: middle;

            text-shadow:
                0 3px 20px #00BFFF,
                /* Mengubah warna bayangan api menjadi biru */
                0 0 20px #00BFFF,
                0 0 10px #00BFFF,
                4px -5px 6px #00BFFF,
                -4px -10px 10px #00BFFF,
                0 -10px 30px #00BFFF;
            animation: 2s Blazingg infinite alternate linear;
        }

        @keyframes Blazingg {
            0% {
                text-shadow: 0 3px 20px #00BFFF, 0 0 20px #00BFFF,
                    0 0 10px #00BFFF,
                    0 0 0 #00BFFF,
                    0 0 5px #00BFFF,
                    -2px -5px 5px #00BFFF,
                    4px -10px 10px #00BFFF;
            }

            25% {
                text-shadow: 0 3px 20px #00BFFF, 0 0 30px #00BFFF,
                    0 0 20px #00BFFF,
                    0 0 5px #00BFFF,
                    -2px -5px 5px #00BFFF,
                    3px -10px 10px #00BFFF,
                    -4px -15px 20px #00BFFF;
            }

            50% {
                text-shadow: 0 3px 20px #00BFFF, 0 0 20px #00BFFF,
                    0 -5px 10px #00BFFF,
                    -2px -5px 5px #00BFFF,
                    3px -10px 10px #00BFFF,
                    -4px -15px 20px #00BFFF,
                    2px -20px 30px rgba(0, 191, 255, 0.5);
            }

            75% {
                text-shadow: 0 3px 20px #00BFFF, 0 0 20px #00BFFF,
                    0 -5px 10px #00BFFF,
                    3px -5px 5px #00BFFF,
                    -4px -10px 10px #00BFFF,
                    2px -20px 30px rgba(0, 191, 255, 0.5),
                    0px -25px 40px rgba(0, 191, 255, 0);
            }

            100% {
                text-shadow: 0 3px 20px #00BFFF, 0 0 20px #00BFFF,
                    0 0 10px #00BFFF,
                    0 0 0 #00BFFF,
                    0 0 5px #00BFFF,
                    -2px -5px 5px #00BFFF,
                    4px -10px 10px #00BFFF;
            }
        }

        /* Ukuran mobile Tablet */
        @media (max-width: 991px) {}

        /* Ukuran mobile HP besar */
        @media (max-width: 768px) {}

        /* Ukuran mobile HP kecil */
        @media (max-width: 575px) {}
    </style>
</head>

<body>
    <?php
    include('navbar_index.php');
    ?>
    <div style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('https://assets.gqindia.com/photos/5cdc5dd6956b1c4d516501e1/16:9/w_2560%2Cc_limit/skateboard.jpg');
background-size: cover; height:250px; padding-top: 90px; text-align: center;">
    </div>
    <br>

    <div class="container">
        <br>
        <br>
        <center>
            <h1 class="Blazing" contenteditable="true">Shut Up! And Skate</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1 class="Blazingg" contenteditable="true">Legacy supply built to last</h1>
            <br>
            <br>
            <h1 class="Blazingg" contenteditable="true">Generation to generation forever</h1>
        </center>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <br>
    <br>


    <!-- banner -->
    <img src="foto/1.jpg" style="height:180px; margin-left:130px; margin-top:-30px; margin-bottom:40px;">
    <img src="foto/2.jpg" style="height:180px; margin-left:100px; margin-top:-30px; margin-bottom:40px;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <br>

    <hr class="hrr">
    <!-- slideshow gambar berjalan -->
    <center>
        <div style="width: 1200px; height: 450px;">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="foto/waku.jpg" class="d-block w-100" alt="..." style="height: 450px;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://bextremeboards.com/blog/wp-content/uploads/2019/05/Bextreme-Siete-Aguas-2-Ruvi-@ruvidio.jpg" class="d-block w-100" alt="..." style="height: 450px;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2014/01/24/1331629667865_2/longboarder" class="d-block w-100" alt="..." style="height: 450px;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </center>
    <hr class="hrr">


    <br />
    <br />
    <br />
    <!-- slssideshow sebelah kanan -->
    <div class="coba-miring" style="display: flex; justify-content: center; align-items: center; gap: 2rem;">
        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel" style="max-width: 470px;  margin-left:25px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="foto/model1.jpg" class="d-block w-100" alt="..." style="">
                </div>
                <div class="carousel-item">
                    <img src="foto/model2.jpg" class="d-block w-100" alt="..." style="">
                </div>
                <div class="carousel-item">
                    <img src="foto/model3.jpg" class="d-block w-100" alt="..." style="">
                </div>
                <div class="carousel-item">
                    <img src="foto/model4.jpg" class="d-block w-100" alt="..." style="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- katalog kategori -->
        <div class="kategori">
            <div class="kol">
                <h2 style="">&nbsp;Categories</h2>
                <br>
            </div>
            <div class="" style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 1rem;">
                <div class="">
                    <div class="details" onclick="window.location.href='katalog/kategori_shirt.php'">
                        <img src="foto/baju3.png" style="height:80px; width:50; border-radius:50px;">
                        <a class="hover-text" href="katalog/kategori_shirt.php">Shirt</a>
                    </div>
                </div>
                <div class="">
                    <div class="details" onclick="window.location.href='katalog/kategori_pants.php'">
                        <img src="foto/celana1.png" style="height:80px; width:80; border-radius:50px;">
                        <a class="hover-text" href="katalog/kategori_pants.php">Pants</a>
                    </div>
                </div>
                <div class="">
                    <div class="details" onclick="window.location.href='katalog/kategori_longsleve.php'">
                        <img src="foto/baju1.png" style="height:80px; width:70; border-radius:50px;">
                        <a class="hover-text" href="katalog/kategori_longsleve.php">Long Sleeve</a>
                    </div>
                </div>
                <div class="">
                    <div class="details" onclick="window.location.href='katalog/kategori_hoodie.php'">
                        <img src="foto/hoodie.png" style="height:80px; width:80; border-radius:50px;">
                        <a class="hover-text" href="katalog/kategori_hoodie.php">hoodie</a>
                    </div>
                </div>
                <div class="">
                    <div class="details" onclick="window.location.href='katalog/kategori_skate.php'">
                        <img src="foto/puppets.png" style="height:90px; width:80; border-radius:50px;">
                        <a class="hover-text" href="katalog/kategori_skate.php">All skateboard</a>
                    </div>
                </div>
                <div class="">
                    <div class="details" onclick="window.location.href='katalog/kategori_sepatu.php'">
                        <img src="foto/vans.png" style="height:80px; width:70; border-radius:50px; padding-top: 20px;">
                        <a class="hover-text" href="katalog/kategori_sepatu.php">Shoes</a>
                    </div>
                </div>
                <div class="">
                    <div class="details" onclick="window.location.href='katalog/kategori_hat.php'">
                        <img src="foto/topi1.png" style="height:80px; width:80; border-radius:50px;">
                        <a class="hover-text" href="katalog/kategori_hat.php">Hat</a>
                    </div>
                </div>
                <div class="">
                    <div class="details" onclick="window.location.href='katalog/kategori_totebag.php'">
                        <img src="foto/tas1.png" style="height:80px; width:80; border-radius:50px;">
                        <a class="hover-text" href="katalog/kategori_totebag.php">Tote Bag</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- katalog -->
    <div class="container">
        <br>
        <br>
        <div id="recommended-section">
            <h2>RECOMMENDED FOR YOU!</h2>
        </div>

    </div>

    <div class="product-grid">
        <div class="product-card">
            <img class="card-image" src="foto/baju1.png" alt="Product 1" />
            <div class="product-info">
                <h3>Nightmare Longsleeve</h3>
                <p>Rp 200.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <a href="diskripsi_item/produk1.php" button class="green-button">Lihat Produk</a>

            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/baju2.png" alt="Product 2" />
            <div class="product-info">
                <h3>Lexus Longsleeve</h3>
                <p>Rp 200.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <a href="diskripsi_item/produk2.php" button class="green-button">Lihat Produk</a>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/baju3.png" alt="Product 3" />
            <div class="product-info">
                <h3>T-Shirt Legacy Supply</h3>
                <p>Rp 160.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <a href="diskripsi_item/produk3.php" button class="green-button">Lihat Produk</a>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/baju4.png" alt="Product 4" />
            <div class="product-info">
                <h3>T-Shirt Bad Bear</h3>
                <p>Rp 160.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <a href="diskripsi_item/produk4.php" button class="green-button">Lihat Produk</a>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/baju5.png" alt="Product 4" />
            <div class="product-info">
                <h3>T-Shirt Legacy</h3>
                <p>Rp 160.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <a href="diskripsi_item/produk5.php" button class="green-button">Lihat Produk</a>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/tas1.png" alt="Product 4" />
            <div class="product-info">
                <h3>Totebag Legacy</h3>
                <p>Rp 100.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <a href="diskripsi_item/produk6.php" button class="green-button">Lihat Produk</a>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/celana1.png" alt="Product 4" />
            <div class="product-info">
                <h3>Denim Short Pants</h3>
                <p>Rp 130.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <a href="diskripsi_item/produk7.php" button class="green-button">Lihat Produk</a>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/celana2.png" alt="Product 4" />
            <div class="product-info">
                <h3>Black Gans Short Pants</h3>
                <p>Rp 150.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <a href="diskripsi_item/produk8.php" button class="green-button">Lihat Produk</a>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/celana3.png" alt="Product 4" />
            <div class="product-info">
                <h3>Blue Beach Short Pants</h3>
                <p>Rp 120.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <a href="diskripsi_item/produk9.php" button class="green-button">Lihat Produk</a>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/topi1.png" alt="Product 4" />
            <div class="product-info">
                <h3>Bennie</h3>
                <p>Rp 100.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <a href="diskripsi_item/produk10.php" button class="green-button">Lihat Produk</a>
            </div>
        </div>

        <div class="kontener">
            <div class="button-containert">
                <font color="white" size="4"> &nbsp;More &nbsp;</font>
                <button class="round-button" onclick="changeActiveButton(1)"><span>1</span></button>
                <button class="round-button" onclick="changeActiveButton(2)"><span>2</span></button>
                <button class="round-button" onclick="changeActiveButton(3)"><span>3</span></button>
                <button class="round-button" onclick="changeActiveButton(4)"><span>4</span></button>
                <button class="round-button" onclick="changeActiveButton(5)"><span>5</span></button>
            </div>
        </div>

        <script>
            // Check if there's an active button in the URL query parameter
            const urlParams = new URLSearchParams(window.location.search);
            const activeButtonParam = urlParams.get('activeButton');

            if (activeButtonParam) {
                const activeButtonIndex = parseInt(activeButtonParam);
                changeActiveButton(activeButtonIndex);
            }

            function changeActiveButton(buttonIndex) {
                var buttons = document.getElementsByClassName("round-button");

                for (var i = 0; i < buttons.length; i++) {
                    buttons[i].classList.remove("active");
                }

                buttons[buttonIndex - 1].classList.add("active");

                // Store the active button index in the URL query parameter
                const url = new URL(window.location.href);
                url.searchParams.set('activeButton', buttonIndex);
                history.replaceState(null, '', url);

                // Redirect to the corresponding page
                var pageURL = "katalog/katalog" + buttonIndex + ".php";
                window.location.href = pageURL;
            }
        </script>

    </div>
    <br>
    <hr style="height:5px;">
    <center>
        <h3>Blog Spot</h3>
    </center>
    <div class="column-wrapper">
        <div class="column">
            <div class="post">
                <iframe src="foto/legacyyy.mp4" frameborder="0" allowfullscreen></iframe>
                <h2 class="post-title">Our Product</h2>
                <p class="post-date">March 21, 2023</p>
                <div class="post-content">
                    <p>legacy.str Nothing Special is our newest campaign, its about our hate of the idea of Perfection, making us to overthink about everything we make and do nothing instead, so we choose to claim ourself 'nothing special' </p>
                    <p>inhope you guys accept us the way we are and we can continue making this city great, lets get together on this, love❤️.</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="post">
                <img class="post-image" src="foto/kis.jpg" alt="Blog Post 3">
                <h2 class="post-title">Kejuraan nasional 2022</h2>
                <p class="post-date">July 6, 2022</p>
                <div class="post-content">
                    <p>GOOD JOB! Alhamdulilah selamat kepada Prayoga Siregar peraih medali perunggu🥉 best trick rail di event Nasional Fornas Vi 2022 Palembang</p>
                    <p>Salut!! Just skate dont hate🔥</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="post">
                <img class="post-image" src="foto/lomba.jpg" alt="Blog Post 4">
                <h2 class="post-title">brangkat!</h2>
                <p class="post-date">July 4, 2022</p>
                <div class="post-content">
                    <p>Selamat bertanding Batam/Kepri Athletes di kejuaraan nasional sumatra,palembang 2022 cabang olahraga skateboard!</p>
                    <p>Goodluck Boys! Do your best!❤️</p>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <br />
</body>

</html>

<?php
include('footer.php');
?>