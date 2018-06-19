<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #323232;
            color: #fff;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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
            background: #323232;

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
        .small_text{
            font-size: 48px;
        }
        .star{
            position: absolute;
            width: 2px;
            height: 2px;
            border-radius: 3px;
            background: white;
            transition: left 2s,top 2s;
        }
        .link{
            position: relative;
            margin-top: 100px;
            font-size: 30px;
            z-index: 3;
            color: #f8f8f8;
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                    @endauth
        </div>
    @endif
    <div class="background">
        @include('stars')
    </div>
    <div class="content">
        <div class="title m-b-md">
            AriesPoint.ru<br>
            <span class="small_text">By Makarov Maritime Academy</span><br>
            <a class="link" href="/main">Start course</a>
        </div>


    </div>
</div>
</body>

<script>
//    var stars = document.getElementsByClassName('star');
//    for (var i=0;i<100;i++){
//        var star = document.createElement('div');
//        star.className='star';
//        star.style.left='50%';
//        star.style.top='50%';
//        document.getElementsByClassName('background')[0].appendChild(star);
//        setTimeout("stars["+i+"].style.left='"+i+"%';stars["+i+"].style.top='"+i+"%';",1000);
//    }
</script>
</html>
