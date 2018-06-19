<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AriesPoint</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

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
            background: #243752;
            font-weight: 200;
            color: #f8f8f8;
            /*box-shadow: 0px 0px 10px -1px black;*/
        }
        .header a{
            position: relative;
            top:4px;
            font-size: 30px;
            font-weight: 200;
            text-decoration: none;
            color: #f8f8f8;
            display: inline-block

        }
        .nav-right{
            position: absolute;
            right: 0;
            top:0;
        }
        .nav-user-name{
            position: relative;
            top:10px;
            right: 20px;
            font-size: 20px;
        }
        .menu{
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background: #243752;
            padding-top: 60px;
            text-align: center;
        }
        .m_item{
            display: inline-block;
            position: relative;
            /*margin-top: 10px;*/
            width: 90%;
            /* left: 5%; */
            height: auto;
            padding: 5px;
            /* padding-top: 4px; */
            font-size: 20px;
            background: #243752;
            font-weight: 100;
            text-align: center;
            border-radius: 3px;
            border: 1px solid white;
            cursor: pointer;
            margin-top: -5px;

        }
        .m_line{
            width: 2px;
            height: 16px;
            background: white;
            display: inline-block;
        }
        .content{
            position: absolute;
            top: 10px;
            /*height: inherit;*/
            width: 100%;
            text-align: center;
            color: #323232;
            padding: 15px;
        }
        .answer{
            position: absolute;
            top:200px;
            left: 70%;
            width: 30%;
            text-align: center;
        }
        .help{
            position: absolute;
            top:200px;
            left: 0;
            width: 70%;
            text-align: center;
        }
        .content table{
            color: #000000;
            font-size: 24px;
            display: inline-block;
        }
        .content table td:nth-child(2){
            padding-right: 30px;
        }
        .but{
            height: 46px;
            width: 200px;
            display: inline-block;
            margin-bottom: 5px;
            cursor: pointer;
            border: none;
            background: #323232;
            color: #fff;
            font-size: 18px;
            font-weight: 100;
            border-radius: 5px;
            font-family: inherit;
            box-shadow: 0 0 5px -1px black;;
        }
        .buttons {
            position: absolute;
            top: 0;
            right: 211px;
        }
        .buttons1{
            position: absolute;
            top: 0;
            left: 211px;
        }
        .dashboard{
            position: fixed;
            top:10%;
            left:20%;
            width: 60%;
            height: 80%;
            text-align: center;
            background: white;
            border: 3px solid #323232;
            box-shadow: 0px 0px 10px -1px black;
            display: none;
        }
        .dashTable{
            position: relative;
            margin-top: 28px;
            border: 1px solid #323232;
            color: #323232;
            display: inline-block;
            border-spacing: inherit;
            font-size: 26px;
        }
        .dashTable th{
            border: 1px solid #323232;
            font-size: 30px;
        }
        .dashTable td{
            border: 1px solid #323232;
        }


        .mainBlock{
            position: relative;
            /*top: -50px;*/
            width: 200px;
            height: 200px;
            border: 1px solid #aaaaaa;
            margin: 20px;
            padding: 20px;
            /*box-shadow: 0px 0px 10px -1px #323232;*/
            display: inline-table;
            transition: box-shadow 0.5s;
            border-radius: 3px;
        }
        .mainBlockWidth{

        }
        .mainBlock a{
            font-size: 16px;
        }
        .mainTitle{
            position: relative;
            top:-40px;
        }
        .spisok{
            padding-top: 10px;
            position: absolute;
            top: 0;
            width: 100%;
            left: 0;
            text-align: center;
            height: 220px;
            background: rgba(255,255,255,0.9);
            opacity: 0;
            transition: opacity 0.5s;
        }
        .spisok a{
            position: relative;
            cursor: pointer;
            font-size: 18px;
            text-decoration: none;
            width: 100%;
            text-align: center;
            margin-top: 20px;
            display: block;
            font-weight: bold;
            color: #323232;
        }
        .sign{
            position: relative;
            top: 14px;
        }
        .tableOver {
            border: none;
            margin-bottom: 10px;
            color: #000000;
            font-size: 20px;
            text-align: center;
            width: 98%;
            overflow: auto;
            /*display: -webkit-box;*/
            border-spacing: inherit;

        }
        .tableIn td{
            height: 28px;
        }
        .tableIn td:nth-child(1){
            text-align: center;
        }
        .tableOver th{
            font-size: 20px;
            height: 25px;
            padding: 3px;
            padding-left: 10px;
            padding-right: 10px;
            font-weight: 100;
            background: #323232;
            color: #f8f8f8;
        }
        .tableIn {
            margin-bottom: 10px;
            color: #000000;
            font-size: 20px;
            text-align: left;
            /*width: 280px;*/
            /*overflow: auto;*/
            display: inline;
            border-spacing: inherit;
            border: 2px solid #323232;
        }
        .tableIn p{
            font-size: 18px;
            margin: 0;
        }
        .tableIn tr:last-child td{
            padding-top: 4px;
        }

        input{
            height: 23px;
            font-size: 20px;
            font-family: inherit;
        }

        .inp{
            position: relative;
            top: 0px;
            padding-left: 5px;
        }

        .inpD{
            width: 55px;
            margin-right: 3px;

        }
        .inpXD{
            width: 65px;
        }
        .inpM{
            width: 35px;
        }
        .inpN{
            height: 28px;
            width: 39px;
            position: relative;
            top: 2px;
            border: none;
            font-family: inherit;
            background: none;
            font-size: 22px;
        }
        .iTrue{
            border: 1px solid #99cb84;
            box-shadow: 0px 0px 10px -1px #99cb84;
        }
        .iFalse{
            border: 1px solid #ce8483;
            box-shadow: 0px 0px 10px -1px #ce8483;
        }
        .miniSign{
            position: relative;
            top: -3px;
            left: -8px;
            font-size: 22px;
        }
        .inpDate{
            width: 153px;
        }
        .inpButton{
            display: inline-block;
            font-family: sans-serif;
            position: relative;
            width: 96%;
            height: auto;
            cursor: pointer;
            margin: 2%;
            margin-bottom: 5px;
            border-radius: 3px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 0 10px -1px rgba(0,0,0,0.4);
            background: #0A6187;
            background: #243752;
            color: #fff;
            transition: box-shadow 0.1s;
            outline:none;
            border: none;
        }
        .inpButton:hover{
            box-shadow: 0 0 10px 0px rgba(0,0,0,0.4);
        }
        .inpText{
            width: 150px;
        }
        .mainTable{
            border: 2px solid #323232;
            border-spacing: inherit;
        }
        .mainTable td{
            border-bottom: 1px solid #323232 ;

        }
        .mainTable td:nth-child(2){
            border-right: 1px dashed #323232 ;
        }

        .mainTable td:nth-child(3){
            border-right: 1px dashed #323232 ;
        }

        .mainTable td:nth-child(5){
            border-right: 1px dashed #323232 ;
        }

        .mainTable td:nth-child(7){
            border-right: 1px dashed #323232 ;
        }

        .errorMassage{
            font-size: 24px;
            background: red;
            font-weight: 700;
            color: white;
        }
        .datetimer{
            font-weight: 700;
        }

        .descr{
            font-weight: 700;
            font-size: 16px;
            margin-left: 5px;
        }
        .const{
            border: none;
            pointer-events: none;
        }
        .tableConst{
            border: 2px solid #243752;
        }
        .tableConst td:nth-child(2n){
            border-right: 1px solid #243752;
        }
        .tableConst td{
            padding-left: 3px;
            border-bottom: 1px solid #243752;
        }
        .tableConst td:last-child{
            border-right: 0px solid #243752;
        }
        .tableConst tr:last-child td{
            border-bottom: 0px solid white;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
        }
        .tableTask{
            border: 7px solid #243752;
            padding: 20px;
            /*box-shadow: 0px 0 10px -1px rgba(0,0,0,0.9);*/
        }
        .tableTask tr{


        }
        .tableTask td:first-child{
            border-right: 1px solid #323232;
        }
        .line td{
            border-bottom: 1px solid #323232;
        }
        .justShow td{
            position: relative;
            padding-bottom: 10px;
            top: 10px;
            border-top: 2px solid #323232;
        }
        .justShow{
            margin-top: 10px;
        }
        .stopLine{
            /*background: #243752;*/
            height: 10px;
        }
        .stopLine td{
            border-bottom: 5px solid #243752;
        }
        .admin_table{
            border: 1px solid #323232;
        }
        .admin_table td{
            border: 1px solid #323232;
        }
        .controlBlock{
            border: 2px solid #323232;
            width: 100%;
            margin-top: -2px;
        }
    </style></head>
<body>
<div class="content">
    @yield('content')
</div>
{{--<div class="dashboard"></div>--}}

</body>
<script>
    function openDashboard(text) {
        var dashB = document.getElementsByClassName('dashboard')[0];
        dashB.innerHTML=text;
        dashB.style.display='block';

    }


    function openMainBlock(number) {
        var mainBlock = document.getElementsByClassName('mainBlock')[number];
        var spisok = document.getElementsByClassName('spisok')[number];
        spisok.style.opacity = 1;
//        mainBlock.style.boxShadow='0 0 5px -1px #323232';
    }
    function closeMainBlock(number) {
        var mainBlock = document.getElementsByClassName('mainBlock')[number];
        var spisok = document.getElementsByClassName('spisok')[number];
        spisok.style.opacity = 0;
        mainBlock.style.boxShadow='0 0 0 0 #323232';
    }


</script>
</html>
