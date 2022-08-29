<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The humanID Demo</title>
    <link rel="icon" href="favicon.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@250&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
    </style>
    <style type="text/css">
        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        body {
            background-color: #fff;
            font: 14px/20px normal Helvetica, Arial, sans-serif;
            color: #343434;
            text-align: center;
        }

        h1 {
            line-height: 2.0;
            font-size: 40px;
            width: 85%;
            margin: auto;
            margin-bottom: 1.5%;
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;

        }

        h2 {
            line-height: 1.5;
            width: 78%;
            margin: auto;
            margin-bottom: 1.5%;
            font-size: 15px;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            margin-bottom: 4%;
            color: black;
        }

        .logo {
            margin-bottom: 30px;
        }

        .login-button {
            margin-bottom: 17px;
        }

        .or {
            margin: auto;
            width: 379px;
            height: 45.5px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
        }

        .line1, .line2 {
            display: flex;
            width: 155px;
            height: 0px;
            background-color: black;
            border: 0.8px solid #000000;
        }

        .line1 {
            margin-right: 20px;
        }

        .line2 {
            margin-left: 20px;
        }

        .message {
            margin: auto;
            position: absolute;
            height: 54px;
            width: 270.47px;
            left: 29%;
            color: white;
            background-color: #023B60;
            border-radius: 7px;
            align-items: center;
            justify-content: center;
            text-align: center;
            opacity: 0;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-size: 11px;
            line-height: 15px;
            z-index: 999;

            position: absolute;
            left: 29%;
            top: 86%;
            transition: opacity 0.5s ease;
        }

        .message:before {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 100%;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;

            border-bottom: 8px solid #023B60;
        }

        .dummy:hover ~ .message {
            opacity: 1;
            position: absolute;
        }

        .humanid-button {
            height: 30px;
            aspect-ratio: auto 339 / 30;
            width: 339px;
        }


        @media only screen and (max-width: 936px) {
            .rectangle {
                border: white;
                box-shadow: 0 0 0 0;
            }

            .dummy {
                width: 250px;
            }

            .or {
                right: 20px;
                position: relative;

            }

            .line1, .line2 {
                width: 90px;
            }

            .humanid-button {
                width: 210px;
            }
        }

        @media only screen and (max-width: 720px) {
            .or {
                right: 70px;
            }

            .logo {
                left: 50px;
                position: relative;
            }

            .rectangle {
                right: 50px;
            }
        }
    </style>
</head>
<body>
<h2>Failed<h2>
<a href="<?php echo $demoUrl ?>">Go back</a>
</body>
</html>
