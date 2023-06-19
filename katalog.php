<?php
include('navbar_index.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Katalog Produk</title>
    <style>
        /* CSS */
        .add-to-cart-btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .add-to-cart-btn:after {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 0;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            z-index: -1;
        }

        .add-to-cart-btn:hover {
            color: white;
        }

        .add-to-cart-btn:hover:after {
            width: 110%;
        }

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
            margin-bottom: 50px;
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
            justify-content: center;
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

        .add-to-cart-btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .add-to-cart-btn:after {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 0;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            z-index: -1;
        }

        .add-to-cart-btn:hover {
            background-color: #4CAF50;
        }

        .add-to-cart-btn:hover:after {
            width: 110%;
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
            margin-left: 1px;
        }

        .rating span {
            font-size: 20px;
            margin-right: 5px;
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
    </style>
</head>

<body>

    <div class="product-grid">
        <div class="product-card">
            <img class="card-image" src="topi.jpg" alt="Product 2" />
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
            <img class="card-image" src="topi.jpg" alt="Product 3" />
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
            // Logika tambahkan ke keranjang
            console.log('Produk ditambahkan ke keranjang:');
            console.log('Nama Produk: ' + productName);
            console.log('Harga: ' + price);
        }
    </script>
</body>
<?php
include('footer.php');
?>

</html>