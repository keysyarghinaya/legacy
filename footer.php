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
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: rgba(255, 255, 255, 1);
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
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
            background: #333;
            padding: 10px 0;
            color: white;
            text-align: center;
        }

        .fixed-footer {
            bottom: 0;
        }

        .container {
            max-width: 1170px;
            margin: auto;
        }

        /*responsive*/
        @media (max-width: 767px) {
            .footer-col {
                width: 50%;
                height: 100px;
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
                    <h4>About</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us on</h4>
                    <div class="social-media">
                        <a href="https://www.instagram.com/legacy.str/?igshid=YmMyMTA2M2Y%3D"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2022 LegacySkaeShop.id & LegacySkaeShop.com</div>
    </div>
</body>

</html>