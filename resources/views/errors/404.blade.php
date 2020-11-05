<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>404 bear | WEB</title>
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Libs CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Template CSS -->
    <style>
        * {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            font-weight: 300;
        }

        html {
            height: 100%;
        }

        body {
            position: relative;
            height: 100%;
            background-color: #8DDFEA;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #ffffff;
        }

        p {
            font-weight: 300;
        }

        img {
            background-size: auto;
        }

        .error {
            border-color: red !important;
        }

        ::-webkit-input-placeholder {
            /* WebKit browsers */
            color: #ffffff;
        }

        :-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color: #ffffff;
            opacity: 1;
        }

        ::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color: #ffffff;
            opacity: 1;
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10+ */
            color: #ffffff;
        }

        .container {
            position: relative;
        }

        /* ------------------
    Button
-------------------- */
        .btn {
            font-size: 18px;
            font-weight: 300;
            color: #ffffff;
            border: 0px solid;
            border-bottom: 2px solid;
            border-color: #007ca1;
            padding: 10px 41px;
            border-radius: 5px;
            background: none;
            display: inline-block;
            margin: 10px 0;
            background-color: #00a9e1;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            text-decoration: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #0090c0;
            color: #ffffff;
            text-decoration: none;
        }

        /* ------------------
    Wrapper
-------------------- */
        #wrapper {
            min-height: 100%;
            height: 100%;
            width: 100%;
        }


        /* ------------------
    Bear
-------------------- */
        .bear {
            background-image: url("https://envato.ukiedev.com/pack404/bear/assets/img/bear.png");
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 856px;
            margin: -340px 0 50px;
            position: relative;
        }


        /* ------------------
    Zzz
-------------------- */
        .zzz {
            background-image: url("https://envato.ukiedev.com/pack404/bear/assets/img/z-1.gif");
            background-position: center;
            background-repeat: no-repeat;
            width: 80px;
            height: 134px;
            position: absolute;
            left: 0px;
            bottom: 155px;
        }


        /* ------------------
    Info
--------------------*/
        .info {
            position: relative;
            z-index: 999;
        }

        .info h1 {
            font-size: 190px;
            font-weight: 700;
            margin-top: 60px;
            color: #222a4b;
        }

        .info h2 {
            font-size: 50px;
            font-weight: 300;
            color: #00a9e1;
        }

        .info p {
            font-size: 20px;
            color: #000000;
        }

        /* ------------------
    Animationload
--------------------*/
        .animationload {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ffffff;
            z-index: 999999;
        }

        .loader {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -100px 0 0 -100px;
            width: 200px;
            height: 200px;
            background-image: url("https://envato.ukiedev.com/pack404/bear/assets/img/ajax-loader.gif");
            background-position: center;
            background-repeat: no-repeat;
        }


        @media (max-width: 1200px) {

            .info {
                text-align: center;
            }

            .bear {
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100%;
                width: 100%;
                height: 720px;
                margin: -120px 0 50px;
                position: relative;
            }

        }

        @media (max-width: 992px) {

            .bear {
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100%;
                width: 100%;
                height: 556px;
                margin: -120px 0 50px;
                position: relative;
            }

        }

        @media (max-width: 600px) {

            .zzz {
                background-size: 100%;
                width: 20px;
                height: 34px;
                bottom: 125px;
            }

            .bear {
                height: 456px;
            }

        }

        @media (max-width: 440px) {

            .info h1 {
                font-size: 90px;
                font-weight: 700;
                margin-top: 10px;
                color: #222a4b;
            }

            .info h2 {
                font-size: 30px;
            }

            .info p {
                font-size: 16px;
            }

            .info p br {
                display: block;
            }

            .zzz {
                background-size: 100%;
                width: 20px;
                height: 34px;

            }

            .bear {
                height: 330px;
                margin: -90px 0 10px;
            }
        }
    </style>

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

</head>

<body>
    <div class="animationload">
        <div class="loader">
        </div>
    </div>
    <div id="wrapper">
        <div class="container">
            <div class="info">
                <h1>Oops!</h1>
                <h2>Where are we?</h2>
                <p>The page you are looking for was moved, removed, renamed or <br />might never existed.</p>
                <a href="/" class="btn">Go Home</a>
            </div>
            <div class="bear">
                <div class="zzz"></div>
            </div>

        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
        type="text/javascript"></script>
    <script>

        $(window).on("load", function (e) {
            "use strict";
            $(".loader").delay(200).fadeOut();
            $(".animationload").delay(200).fadeOut("fast");

        });
    </script>

</body>

</html>
