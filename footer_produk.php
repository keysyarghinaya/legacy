<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <style>
        /* Footer */
btytbytbthbtbhtbtb
        .footer {
            background-color: #282E3E;
            padding: 70px 0;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer-col {
            width: 25%;
            padding: 0 10px;
            text-align: center;
        }

        .footer-col h4 {
            font-size: 18px;
            color: rgba(255, 255, 255, 1);
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
            display: inline-block;
            text-decoration: none;
        }

        .footer-col h4::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: rgba(0, 3, 255, 0.8);
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: rgba(255, 255, 255, 1);
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: rgba(0, 3, 255, 0.8);
            padding-left: 8px;
        }

        .footer-col .map-container {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%;
            text-align: center;
        }

        .footer-col .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 70%;
            border: 0;
        }

        .footer-col .social-media {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .footer-col .social-media a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: rgba(255, 255, 255, 0.5);
            margin: 0 10px 10px 0;
            transition: all 0.5s ease;
        }

        .footer-col .social-media a:hover {
            color: rgba(0, 3, 255, 0.8);
            background-color: rgba(236, 236, 236, 0.8);
        }

        .fixed-footer {

            width: 100%;
            position: relative;
            background-color: lightblue;
            padding: 10px 0;
            color: rgba(255, 255, 255, 1);
            text-align: center;
        }

        .fixed-footer .container {
            background-color: lightblue;
        }

        .container {
            max-width: 1170px;
            margin: auto;
        }

        .containerr {
            background-color: aqua;
            max-width: 1170px;
            margin: auto;
        }

        .h7 {
            display: inline-block;
            color: white;
            font-family: monospace;
        }

        .h8 {
            font-size: 18px;
            color: rgba(255, 255, 255, 1);
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .p {
            margin-top: 0.3em;
            margin-bottom: 0.3em;
        }


        /*responsive*/
        @media (max-width: 767px) {
            .footer-col {
                width: 50%;
                padding: 0 80px;
                margin-bottom: 70px;
            }
        }

        @media (max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }
    </style>

</head>

<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>OPENING HOURS & DIRECTIONS</h4>
                    <p class="p">
                        <h7 class="h7">Senin - 10:00 - 17:00</h7>
                    </p>
                    <p class="p">
                        <h7 class="h7">Selasa - 10:00 - 17:00</h7>
                    </p>
                    <p class="p">
                        <h7 class="h7">Rabu - 10:00 - 17:00</h7>
                    </p>
                    <p class="p">
                        <h7 class="h7">Kamis - 10:00 - 17:00</h7>
                    </p>
                    <p class="p">
                        <h7 class="h7">Jumaat - 10:00 - 17:00</h7>
                    </p>
                    <p class="p">
                        <h7 class="h7">Sabtu - 10:00 - 17:00</h7>
                    </p>
                    <p class="p">
                        <h7 class="h7">Minggu - 10:00 - 17:00</h7>
                    </p>
                    <br>
                    <br>
                    <div class="map-container">
                        <!-- Peta akan ditampilkan di sini -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.1284144357655!2d104.05787277018071!3d1.1014351034995191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d988d34c07d407%3A0x11b8e244ed210e97!2sLegacy%20Skateshop!5e1!3m2!1sen!2sus!4v1687526534731!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p class="p">
                            <h7 class="h8">Jl. Raja Husin, Baloi Permai, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29432, Indonesia</h7>
                        </p>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>MAIN MENU</h4>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">SKATEBOARD</a></li>
                        <li><a href="#">HOODIE</a></li>
                        <li><a href="#">LONG SLEEVE</a></li>
                        <li><a href="#">T SHIRT</a></li>
                        <li><a href="#">PANTS</a></li>
                        <li><a href="#">HAT</a></li>
                        <li><a href="#">BAG</a></li>
                        <li><a href="#">SHOES</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">Email</a></li>
                        <li><a href="#">Phone</a></li>
                        <li><a href="#">Address</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="fixed-footer">
        <div class="containerr" style="background-color: lightblue;">
            @LegacySkateShop2023 & LegacyCopyright2023
        </div>
    </div>
</body>

</html>
