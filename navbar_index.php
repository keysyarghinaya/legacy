<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        * {
            font-family: 'PT Sans', sans-serif;
        }

        .wrapper {
            position: absolute;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            margin-left: 16px;
            padding: 15px 0 15px 0;
            width: 97%;
            height: 100px;
            background-color: #282E3E;
            border-radius: 20px;
            box-shadow: 0 7px 15px 0 rgba(0, 0, 0, 0.5);
        }

        .brand {
            display: flex;
            flex-direction: row;
            font-size: 1.5em;
            padding: 15px;
            text-transform: capitalize;
            margin-left: 105px;
        }


        .firstname {
            color: #66CDAA;
            font-weight: 700;
            font-size: 30px;
            cursor: default;
            margin-left: -125px;
        }

        .lastname {
            color: white;
            font-weight: 600;
            font-size: 30px;
            cursor: default;
        }

        .navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 17px;
        }

        .navigation>text {
            list-style-type: none;
            padding: 10px;
            margin: 0px 10px 0px 10px;

        }

        .navigation>li>a {
            color: white;
            font-size: 20px;
            text-decoration: none;
        }

        .navigation>li>a:hover {
            color: lightblue;
            transition: all .3s ease-in-out;
            transform: scale(0.90);
        }

        .text>button {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
        }

        .text>button>a {
            color: white;
            font-size: 20px;
            text-decoration: none;
        }

        .text {
            border-radius: 30px;
        }

        .text:hover {
            color: lightblue;
            transform: scale(0.90);
            transition: all .3s ease-in-out
        }

        .navigation>li>img {
            width: 50px;
            height: 65px;
        }

        .text {
            text-decoration: none;
            color: white;
            font-size: 16px;
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar  navbar-expand-lg" style="background-color:#282E3E;">
        <img src="foto/logo.png" style="height:90px;">
        <div class="brand">
            <div class="firstname">Legacy</div>
            <div class="lastname">SkateShop</div>
        </div>
        <a class="text" href="#.php">
            Categories
        </a>
        <a class="text" href="#.php">
            Deals
        </a>
        <a class="text" href="#.php">
            what's New
        </a>
        <a class="text" href="#.php">
            delivery
        </a>

        <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="input-group flex-nowrap col-6">
                <input type="text" class="form-control rounded-start-pill" placeholder="Search Product" aria-label="Username" aria-describedby="addon-wrapping">
                <button class="input-group-text rounded-end-pill" id="addon-wrapping">
                    <svg style="height:24;" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                        <path d="m20.87 20.17-5.59-5.59C16.35 13.35 17 11.75 17 10c0-3.87-3.13-7-7-7s-7 3.13-7 7 3.13 7 7 7c1.75 0 3.35-.65 4.58-1.71l5.59 5.59.7-.71zM10 16c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z"></path>
                    </svg>
                </button>
            </div>
        </div>



        <ul class="navigation">
            <li class="text"><button><a href="#.php"><svg style="font-size:24px" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg></i></a>Account</button></li>

            <li class="text"><button><a href="#.php"><i class="fa fa-shopping-cart" style="font-size:24px"></i></a>Cart</button></li>
        </ul>
    </nav>
</body>

</html>