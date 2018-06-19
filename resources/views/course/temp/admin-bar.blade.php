{{--<div class="header">--}}
{{--<div style="position: relative; left: 0px; width: 250px; text-align: center"><a href="/result">AriesPoint.ru</a></div>--}}

<?php
if (Auth::check())
{
    $user = \Illuminate\Support\Facades\Auth::user();
    $id = $user->id;
    if ($id!=4){
        echo '<script>window.location="/main";</script>';
    }

}else{
    echo '<script>window.location="/main";</script>';
}
?>

<body>
<div class="header">
    <div style="position: relative; left: 0px; width: 250px; text-align: center"><a href="/admin">AriesPoint.ru</a></div>

    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
            <div class="nav-right">
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </div>
            @else
                <div class="nav-right">

                    <a style="display: inline-block" href="#" class="nav-user-name" onclick="logblock()">

                        АДМИНИСТРАТОР <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="top: 0">
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