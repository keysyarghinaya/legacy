<!DOCTYPE html>
<html lang="en">

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
            margin-left: 115px;
        }

        .firstname {
            color: #66CDAA;
            font-weight: 700;
            font-size: 36px;
            cursor: default;
            margin-left: -125px;
        }

        .lastname {
            color: white;
            font-weight: 600;
            font-size: 36px;
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
            font-size: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }

        /* Responsive */
        @media(max-width: 768px) {
            .wrapper {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px;
                height: auto;
            }

            .brand {
                margin-left: 0;
                margin-bottom: 10px;
            }

            .firstname {
                margin-left: 0;
            }

            .navigation {
                margin-top: 10px;
                flex-wrap: wrap;
                justify-content: flex-start;
            }

            .navigation>li {
                margin-bottom: 5px;
            }

            .navigation>li>a {
                font-size: 16px;
            }

            .col-4 {
                display: none;
            }

            .input-group {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg" style="background-color:#282E3E;">
        <img src="logo.png" style="height:90px;">
        <div class="brand">
            <div class="firstname">Legacy</div>
            <div class="lastname">SkateShop</div>
        </div>
        <div class="col-4 d-flex justify-content-center align-items-center">
            <a class="text" href="#.php">
                Categories
            </a>
            <a class="text" href="#.php">
                Recommended
            </a>
            <a class="text" href="#.php">
                Contact Us
            </a>
        </div>

        <div class="col-4 d-flex justify-content align-items">
            <div class="input-group flex-nowrap col-6">
                <input type="text" id="search-input" placeholder="Cari" class="form-control rounded-start-pill" placeholder="Search Product" aria-label="Username" aria-describedby="addon-wrapping">
                <button class="input-group-text rounded-end-pill" id="search-button">
                    <svg style="height:24;" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                        <path d="m20.87 20.17-5.59-5.59C16.35 13.35 17 11.75 17 10c0-3.87-3.13-7-7-7s-7 3.13-7 7 3.13 7 7 7c1.75 0 3.35-.65 4.58-1.71l5.59 5.59.7-.71zM10 16c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z"></path>
                    </svg>
                </button>
                <script>
                    // script.js
                    const searchInput = document.getElementById('search-input');
                    const searchButton = document.getElementById('search-button');


                    // Add event listener to the Enter key press event on the search input
                    searchInput.addEventListener('keyup', function(event) {
                        if (event.keyCode === 13) {
                            event.preventDefault();
                            performSearch();
                        }
                    });


                    searchButton.addEventListener('click', performSearch);

                    function performSearch() {
                        const searchTerm = searchInput.value.trim().toLowerCase();

                        if (searchTerm === 'baju') {
                            // Redirect to the "Baju" page
                            window.location.href = 'halaman_baju.php';

                        } else if (searchTerm === 'celana') {
                            // Redirect to the "Celana" page
                            window.location.href = 'halaman_celana.php';

                        } else if (searchTerm === 'topi') {
                            // Redirect to the "Topi" page
                            window.location.href = 'halaman_topi.php';

                        } else if (searchTerm === 'sweater') {
                            // Redirect to the "Topi" page
                            window.location.href = 'halaman_sweater.php';

                        } else if (searchTerm === 'sepatu') {
                            // Redirect to the "Topi" page
                            window.location.href = 'halaman_sepatu.php';

                        } else if (searchTerm === 'tas') {
                            // Redirect to the "Topi" page
                            window.location.href = 'halaman_tas.php';

                        } else if (searchTerm === 'skate') {
                            // Redirect to the "Topi" page
                            window.location.href = 'halaman_skate.php';

                        } else {
                            // Invalid search term
                            alert('Kata kunci tidak valid.');
                        }
                    }
                </script>
            </div>
        </div>
    </nav>
</body>

</html>