<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <style>
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

        @import url(https://fonts.googleapis.com/css?family=Lily+Script+One);

        body {
            margin: 0;
            font-family: arial, tahoma, sans-serif;
            font-size: 12px;
            font-weight: normal;
            direction: ltr;
            background: white;
            background-image: url(photo/login.jpg);
            background-size: cover;
        }

        form {
            margin: 20px auto 20px auto;
            padding: 30px;
            width: 400px;
            height: auto;
            overflow: hidden;
            background: #282E3E;
            border-radius: 15px;
        }

        form label {
            font-size: 16px;
            color: darkgray;
            cursor: pointer;
        }

        form label,
        form input {
            float: left;
            clear: both;
        }

        form input {
            margin: 15px 0;
            padding: 15px 10px;
            width: 100%;
            outline: none;
            border: 1px solid #bbb;
            border-radius: 20px;
            display: inline-block;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -ms-transition: 0.2s ease all;
            -o-transition: 0.2s ease all;
            transition: 0.2s ease all;
        }

        form input[type=text]:focus,
        form input[type="password"]:focus {
            border-color: cornflowerblue;
        }

        input[type=submit] {
            padding: 15px 50px;
            width: auto;
            background: #90EE90;
            border: none;
            color: white;
            cursor: pointer;
            display: inline-block;
            clear: right;
            -webkit-transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -ms-transition: 0.2s ease all;
            -o-transition: 0.2s ease all;
            transition: 0.2s ease all;
            align-items: center;
        }

        input[type=submit]:hover {
            opacity: 0.8;
        }

        input[type="submit"]:active {
            opacity: 0.4;
        }

        .forgot,
        .login {
            margin: 10px;
            clear: left;
            display: inline-block;
            color: cornflowerblue;
            text-decoration: none;
        }

        .forgot:hover,
        .login:hover {
            color: darkgray;
        }

        #logo {
            margin: 0 auto;
            width: 300px;
            font-family: 'Lily Script One', cursive;
            font-size: 60px;
            font-weight: bold;
            text-align: center;
            color: whitesmoke;
            -webkit-transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -ms-transition: 0.2s ease all;
            -o-transition: 0.2s ease all;
            transition: 0.2s ease all;
        }

        #logo:hover {
            color: lightblue;
        }

        .alert {
            background: #e44e4e;
            color: white;
            padding: 10px;
            text-align: center;
            border: 1px solid #b32929;
            font-size: 20px;
            margin-top: 5 0px;
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
    </style>
</head>

<body>
    <form method="post" action="cek_register.php">

        <h3 id="logo">REGISTER</h3><br><br>

        <input type="hidden" id="id" name="id" />

        <label for="nama">Name</label>
        <input type="text" id="nama" name="nama" placeholder="Type in your name.." autocomplete="off" required />

        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Type in your username.." autocomplete="off" required />

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password.." autocomplete="off" required />

        <label for="level">level</label>
        <input type="text" id="level" name="level" placeholder="What level are you?" autocomplete="off" required />

        <a class="login" href="login.php">Already have account? Log In</a>
        <br />

        <input type="submit" name="submit" value="Register" />
    </form>

</body>

</html>