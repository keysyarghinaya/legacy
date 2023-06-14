<!DOCTYPE html>
<html lang="en">

<head>
    <title>Footer Design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1170px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            padding: 70px 0;
        }

        .footer-col {
            width: 40%;
            padding: 0 15px;
        }

        .img-col {
            width: 30%;
            margin: -125px 0 -100px 400px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: white;
            text-align: left;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: white;
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
            color: white;
            text-align: left;
            text-decoration: none;
            font-weight: 300;
            color: white;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: lightblue;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: white;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: black;
            background-color: lightblue;
        }

        .fixed-footer {
            width: 100%;
            position: relative;
            background: lightblue;
            padding: 10px 0;
            color: white;
            text-align: center;
        }

        /*responsive*/
        @media(max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <footer class="footer" style="background-color:#282E3E;">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Contact us</h4>
                    <ul>
                        <li><a href="mailto:legacyskateshop@gmail.com"><i class="bi bi-envelope-fill">&nbsp;&nbsp;</i> smknegeri7batam@gmail.com</a></li>
                        <li><a href="tel:+6287784387974"><i class="bi bi-telephone-fill">&nbsp;&nbsp;</i>(0778) 4805790</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://instagram.com/legacy.str?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram"></i></a>
                        <a href="https://www.tokopedia.com/legacystr"><i class="bi bi-bag-fill"></i></i></a>
                    </div>
                    <div class="img-col">
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-footer">
        <div class="container">Copyright &copy; 2022 LegacySkaeShop.id & LegacySkaeShop.com</div>
    </div>
    </footer>

</body>

</html>