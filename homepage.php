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
            
            background-color: #BDB76B;
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
            /* margin-left: 460px; */
            margin-bottom: 20px;
            padding: 20px;
            background-color: #282E3E;
            border-radius: 15px;
            font-family: Lucida Bright;
            text-align: center;
            color: white;
        }

        /* katalog */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

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
            flex: 0 0 calc(20% - 10px);
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 10px;
        }

        .product-card .card-image {
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
            width: 100%;
            height: 170px;
        }

        .product-card button {
            margin: 0 auto;
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .product-info {
            text-align: left;
            margin-top: 10px;
        }

        .product-info h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .product-info p {
            font-size: 14px;
            margin-bottom: 5px;
            text-align: left;
        }

        .product-info .rating {
            display: flex;
            justify-content: left;
            margin-bottom: 10px;
            text-align: left;
        }

        .product-info .rating span {
            font-size: 20px;
            color: green;
            cursor: pointer;
            text-align: left;
        }

        .product-info .rating span:hover,
        .product-info .rating span:hover~span {
            color: #ffcc00;
            text-align: left;
        }

        .product-text {
            text-align: left;
            margin-top: 20px;
        }

        /* tulisan glowing */
        .glow {
            font-size: 80px;
            color: white;
            text-align: center;
            animation: glow 2s ease-in-out infinite alternate;
        }

        .glow1 {
            font-size: 40px;
            color: white;
            text-align: center;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #00FF7F, 0 0 40px #00FF7F, 0 0 50px #00FF7F, 0 0 60px #00FF7F, 0 0 70px #00FF7F;
            }

            to {
                text-shadow: 0 0 20px #778899, 0 0 30px #778899, 0 0 40px #778899, 0 0 50px #778899, 0 0 60px #778899, 0 0 70px #778899, 0 0 80px #778899;
            }
        }

        @-webkit-keyframes glow1 {
            from {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #00FF7F, 0 0 40px #00FF7F, 0 0 50px #00FF7F, 0 0 60px #00FF7F, 0 0 70px #00FF7F;
            }

            to {
                text-shadow: 0 0 20px #778899, 0 0 30px #778899, 0 0 40px #778899, 0 0 50px #778899, 0 0 60px #778899, 0 0 70px #778899, 0 0 80px #778899;
            }
        }
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
        <h1 class="glow">Shut Up And Skate!</h1>
        <br>
        <br>
        <p>
        <h4 class="glow1">Legacy Supply built to last. Generation to generation forever</h4>
        <br>
        <br>
        <br>
    </div>

    <!-- banner -->
    <img src="foto/1.jpg" style="height:180px; margin-left:130px; margin-top:-30px; margin-bottom:40px;">
    <img src="foto/2.jpg" style="height:180px; margin-left:100px; margin-top:-30px; margin-bottom:40px;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <br>

    <!-- slideshow gambar berjalan -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active classgambar">
                <img src="https://bextremeboards.com/blog/wp-content/uploads/2019/07/Bextreme-Wheels-8.jpg" class="d-block w-100" alt="..." style="height:450px;">
            </div>
            <div class="carousel-item classgambar">
                <img src="https://bextremeboards.com/blog/wp-content/uploads/2019/05/Bextreme-Siete-Aguas-2-Ruvi-@ruvidio.jpg" class="d-block w-100" alt="..." style="height:450px;">
            </div>
            <div class="carousel-item classgambar">
                <img src="https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2014/01/24/1331629667865_2/longboarder" class="d-block w-100" alt="..." style="height:450px;">
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

    <br />

    <!-- slssideshow sebelah kanan -->
    <div class="coba-miring" style="display: flex; justify-content: center; align-items: center; gap: 2rem;">
        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel" style="max-width: 470px;  margin-left:25px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="foto/3.jpg" class="d-block w-100" alt="..." style="">
                </div>
                <div class="carousel-item">
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
                <h2 style="">Categories</h2>
            </div>
            <div class="" style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 1rem;">
                <div class="">
                    <div class="details">
                        <img src="foto/sepatu.jpg" style="height:90px; width:80; border-radius:50px;">
                        <h5 style="margin-top:5px;">Sepatu</h5>
                    </div>
                </div>
                <div class="">
                    <div class="details">
                        <img src="foto/kaos.jpg" style="height:90px; width:80; border-radius:50px;">
                        <h5 style="margin-top:5px;">Kaos</h5>
                    </div>
                </div>
                <div class="">
                    <div class="details">
                        <img src="foto/celana.jpg" style="height:90px; width:80; border-radius:50px;">
                        <h5 style="margin-top:5px;">Celana</h5>
                    </div>
                </div>
                <div class="">
                    <div class="details">
                        <img src="foto/celana.jpg" style="height:90px; width:80; border-radius:50px;">
                        <h5 style="margin-top:5px;">Celana</h5>
                    </div>
                </div>
                <div class="">
                    <div class="details">
                        <img src="foto/celana.jpg" style="height:90px; width:80; border-radius:50px;">
                        <h5 style="margin-top:5px;">Celana</h5>
                    </div>
                </div>
                <div class="">
                    <div class="details">
                        <img src="foto/celana.jpg" style="height:90px; width:80; border-radius:50px;">
                        <h5 style="margin-top:5px;">Celana</h5>
                    </div>
                </div>
                <div class="">
                    <div class="details">
                        <img src="foto/celana.jpg" style="height:90px; width:80; border-radius:50px;">
                        <h5 style="margin-top:5px;">Celana</h5>
                    </div>
                </div>
                <div class="">
                    <div class="details">
                        <img src="foto/celana.jpg" style="height:90px; width:80; border-radius:50px;">
                        <h5 style="margin-top:5px;">Celana</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- katalog -->
    <div class="container">
        <br>
        <br>
        <h2>RECOMMENDED FOR YOU!</h2>
    </div>

    <div class="product-grid">
        <div class="product-card">
            <img class="card-image" src="foto/a.jpg" alt="Product 1" />
            <div class="product-info">
                <h3>Produk 1</h3>
                <p>Harga: Rp100.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <button onclick="addToCart('Produk 1', 100000)">Tambahkan ke Keranjang</button>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/b.jpg" alt="Product 2" />
            <div class="product-info">
                <h3>Produk 2</h3>
                <p>Harga: Rp200.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <button onclick="addToCart('Produk 2', 200000)">Tambahkan ke Keranjang</button>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/c.jpg" alt="Product 3" />
            <div class="product-info">
                <h3>Produk 3</h3>
                <p>Harga: Rp300.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <button onclick="addToCart('Produk 3', 300000)">Tambahkan ke Keranjang</button>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/d.jpg" alt="Product 4" />
            <div class="product-info">
                <h3>Produk 4</h3>
                <p>Harga: Rp400.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <button onclick="addToCart('Produk 4', 400000)">Tambahkan ke Keranjang</button>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/e.jpg" alt="Product 5" />
            <div class="product-info">
                <h3>Produk 5</h3>
                <p>Harga: Rp400.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <button onclick="addToCart('Produk 5', 400000)">Tambahkan ke Keranjang</button>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/f.jpg" alt="Product 6" />
            <div class="product-info">
                <h3>Produk 6</h3>
                <p>Harga: Rp400.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <button onclick="addToCart('Produk 6', 400000)">Tambahkan ke Keranjang</button>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/g.jpg" alt="Product 7" />
            <div class="product-info">
                <h3>Produk 7</h3>
                <p>Harga: Rp400.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <button onclick="addToCart('Produk 7', 400000)">Tambahkan ke Keranjang</button>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="foto/h.jpg" alt="Product 8" />
            <div class="product-info">
                <h3>Produk 8</h3>
                <p>Harga: Rp400.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <button onclick="addToCart('Produk 8', 400000)">Tambahkan ke Keranjang</button>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="topi.jpg" alt="Product 4" />
            <div class="product-info">
                <h3>Produk 4</h3>
                <p>Harga: Rp400.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <button onclick="addToCart('Produk 4', 400000)">Tambahkan ke Keranjang</button>
            </div>
        </div>
        <div class="product-card">
            <img class="card-image" src="topi.jpg" alt="Product 4" />
            <div class="product-info">
                <h3>Produk 4</h3>
                <p>Harga: Rp400.000</p>
                <div class="rating">
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                    <span>&#9733;</span>
                </div>
                <button onclick="addToCart('Produk 4', 400000)">Tambahkan ke Keranjang</button>
            </div>
        </div>
    </div>
    <script>
        function addToCart(productName, price) {
            // Kode untuk menambahkan produk ke keranjang
            console.log("Produk " + productName + " dengan harga " + price + " telah ditambahkan ke keranjang.");
        }
    </script>
    <br />
    <br />
    <br />
</body>

</html>

<?php
include('footer.php');
?>