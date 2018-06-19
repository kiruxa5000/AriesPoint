<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #fff;
            /*font-family: 'Raleway', sans-serif;*/
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
            z-index: 2;
        }
        .background{
            position: fixed;
            top: 0;
            left:0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .header{
            position: fixed;
            top:0;
            left:0;
            width: 100%;
            height: 50px;
            background: #323232;
            font-weight: 200;
            color: #f8f8f8;
            box-shadow: 0px 0px 10px -1px black;
        }
        .header span{
            position: relative;
            top:4px;
            left:20px;
            font-size: 30px;
            font-weight: 200;
        }
        .menu{
            position: fixed;
            top:70px;
            left:20px;
            width: 200px;
            height: 500px;
        }
        .m_item{
            position: relative;
            margin-top: 10px;
            width: 90%;
            left:5%;
            height: auto;
            padding: 10px;
            padding-top: 4px;
            font-size: 20px;
            background: #323232;
            font-weight: 100;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0px 0px 5px -1px black;

        }
        .content{
            position: absolute;
            top:00px;
            left:00px;
        }
        .content table{
            border: 1px solid #323232;
            margin-bottom: 10px;
            color: #000000;
            font-size: 24px;
            text-align: left;

        }
        .content table td:nth-child(2){
            padding-right: 30px;
        }
        .content table th{
            font-size: 20px;
            font-weight: 100;
            border-bottom: 1px solid #323232;
        }
    </style></head>
<body>
<div class="content">



    <?php
    echo $one;
    echo $two;
    echo $three;
    echo $four;
    echo $five;
    ?>









</div>
</body>
</html>