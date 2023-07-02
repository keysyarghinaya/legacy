<!doctype html>
<html lang="en">

<head>
    <title>About Us</title>
    <style>
        body {
            --test: calc(1000rem * 10000rem);
            background-color: #BDB76B;
            padding-bottom: var(--test) !important;
            align-items: center;
        }

        section {
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: left;
            margin-left: 50px;
            margin-right: 50px;
            padding: 10px;
            border-radius: 5px;
            background-color: #FFFAF0;
        }

        .tulis {
            background-color: #282E3E;
            padding: 20px;
            text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.8);
            margin: 0;
            margin-top: 0;
        }

        h1:first-of-type {
            text-align: left;
            color: lightgreen;
            /* Red */
        }

        h1:last-of-type {
            text-align: left;
            color: whitesmoke;
            /* Blue */
        }

        .founder {
            margin-top: 50px;
            margin-bottom: 20px;
            text-align: left;
            margin-left: 50px;
            margin-right: 50px;
            padding: 10px;
            border-radius: 15px;
            background-color: #282E3E;
            overflow: hidden;
            /* Ensure the container wraps around the content */
        }

        .founder-image-container {
            float: left;
            margin-right: 20px;
            border: 1px solid #282E3E;
            border-radius: 50%;
            padding: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .founder-image {
            width: 300px;
            /* Adjust the width as needed */
            height: 300px;
            /* Maintain aspect ratio */
        }

        .founder-content {
            overflow: hidden;
        }

        .founder-text {
            margin-top: 100px;
        }


        .garis {
            width: 100%;
            background-color: #282E3E;
        }

        .containerr {
            display: flex;
            justify-content: space-between;
        }

        .containerr {
            display: flex;
            justify-content: space-between;
        }

        .containerr img {
            flex: 1;
            padding-top: 15px;
            padding-bottom: 15px;
            width: auto;
            height: 200px;
            /* Sesuaikan tinggi sesuai kebutuhan */
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin: 10px;
        }

        .containera {
            background-color: #BDB76B;
            width: 90%;
        }

        .white-text {
            color: white;
        }

        .white-text {
            color: white;
            padding-bottom: 5px;
        }

        .large-text {
            font-size: 20px;
            /* Atur ukuran teks sesuai kebutuhan */

        }

        .green-text {
            color: lightgreen;
        }

        .lurus {
            width: 100%;
            background-color: #282E3E;
        }

        h2 {
            /* Add the following lines */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            color: black;
        }

        .marquee {
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
        }

        .image-container {
            display: inline-block;
            width: 16.66%;
            /* 100% / 6 foto = 16.66% */
        }

        .image-container img {
            animation: marquee 10s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body>
    <br>
    <div class="tulis">
        <h1>Legacy Supply built to last</h1>
        <h1>Generation to generation forever</h1>
    </div>




    <div class="containera">
        <img src="legacyy.jpg" alt="Gambar Anda">
    </div>

    <div class="garis">
        <div class="containerr">
            <div class="marquee">
                <div class="image-container">
                    <img src="pict1.jpg" alt="Gambar 1">
                </div>
                <div class="image-container">
                    <img src="pict2.jpg" alt="Gambar 2">
                </div>
                <div class="image-container">
                    <img src="pict3.jpg" alt="Gambar 3">
                </div>
                <div class="image-container">
                    <img src="pict4.jpg" alt="Gambar 4">
                </div>
                <div class="image-container">
                    <img src="pict5.jpg" alt="Gambar 5">
                </div>
                <div class="image-container">
                    <img src="pict6.jpg" alt="Gambar 6">
                </div>
            </div>
        </div>
    </div>

    <div class="lurus">
        <section>
            <h2>Our Story</h2>
            <p>
                "Legacy Skateshop didirikan pada tahun 2012 oleh Dabo. Kami adalah toko yang khusus menjual peralatan skateboard dan segala kebutuhan terkait,
                Kami di Legacy Skateshop berkomitmen untuk memberikan pengalaman terbaik kepada para skateboarder. Dengan berbagai pilihan produk berkualitas, kami ingin menjadi tujuan utama bagi para penggemar skateboard di seluruh dunia".
            </p>
        </section>
    </div>



    <section class="founder">
        <h1 class="white-text">&nbsp;&nbsp;&nbsp;&nbsp;Our Founder</h1>
        <div class="founder-content">
            <div class="founder-image-container">
                <img src="dabo.png" alt="Founder Photo" class="founder-image">
            </div>

            <div class="founder-text">
                <h2 class="green-text">Daboo</h2>
                <p class="white-text large-text"> Dia adalah seorang skateboarder dan pengusaha yang penuh gairah. Dengan visi dan dedikasinya, dia mendirikan Legacy Skateshop pada tahun 2012 untuk menyediakan perlengkapan dan pakaian berkualitas tinggi bagi para penggemar skateboard. Cinta Daboo terhadap skateboard mendorong misi Legacy Skateshop untuk menawarkan produk terbaik dan menciptakan komunitas yang berkembang pesat bagi para skateboarder di seluruh dunia.</p>

            </div>
            <div style="clear:both;"></div>
        </div>
    </section>


    <section>
        <h2>Why Should Legacy Skateshop</h2>
        <p>
            Legacy Skateshop berkomitmen untuk memberikan pengalaman terbaik bagi para skateboarder. Dengan berbagai pilihan produk berkualitas tinggi, kami bertujuan menjadi tujuan utama bagi para penggemar skateboard di seluruh dunia. Berikut adalah beberapa alasan untuk memilih Legacy Skateshop:
        </p>
        <ul>
            <li>&bull; Produk Berkualitas Tinggi: Kami bangga menawarkan peralatan skateboard dan pakaian berkualitas tinggi. Produk-produk yang kami pilih dengan cermat menjamin keandalan dan daya tahan untuk memenuhi kebutuhan Anda.</li>
        </ul>
    </section>

</body>

</html>

<?php
include('footer.php');
?>