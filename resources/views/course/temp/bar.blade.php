{{--<div class="header">--}}
    {{--<div style="position: relative; left: 0px; width: 250px; text-align: center"><a href="/result">AriesPoint.ru</a></div>--}}

<?php
if (Auth::check())
{
    $user = \Illuminate\Support\Facades\Auth::user();
    $id = $user->id;
    if ($id==4){
        echo '<script>window.location="/admin";</script>';
    }
    $mysqli = new \mysqli("localhost", "root", "425695340", "habr");

    $result = $mysqli->query("SELECT * FROM `activity` WHERE `userId`=$id AND `result`=1")->fetch_all();
    $stars = count($result);

}else{
   $stars = '';
}
        ?>

<body>
<div class="header">
    <div style="position: relative; left: 0px; width: 250px; text-align: center"><a href="/main">AriesPoint.ru</a></div>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <div class="nav-right">
                        <li style="display: inline-block; margin-top: 10px"><a href="{{ route('login') }}" style="font-size: 18px">Войти</a></li>
                        <li style="display: inline-block"><a href="{{ route('register') }}"  style="font-size: 18px">Зарегистрироваться</a></li>
                        </div>
                        @else
                            <div class="nav-right">
                                <p style="display: inline-block; margin-right:40px">Заработано баллов: {{ $stars }}</p>
                                <a style="display: inline-block" href="#" class="nav-user-name" onclick="logblock()">

                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" style="display: none">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"  style="top: 0">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            @endguest

</div>


<script>
    var log = 0;
    function logblock() {
        if (log === 0) {
            document.getElementsByClassName('dropdown-menu')[0].style.display = 'block';
            log = 1;
        }else{
            document.getElementsByClassName('dropdown-menu')[0].style.display = 'none';
            log = 0;
        }
    }
</script>