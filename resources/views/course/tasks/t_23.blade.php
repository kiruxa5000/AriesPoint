<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script>
        var Obje;
        function sub(a) {
            Obje = a;
            a.parentNode.submit();

        }

        function inpAll(forma) {
            var form = document.getElementsByClassName(forma)[0];
            var obj = JSON.parse(form.value);
            var inps = document.getElementsByName('inp'+forma);
            for (var i=0;i<inps.length;i++){
                obj[i].value=inps[i].value;
            }
            form.value = JSON.stringify(obj);
        }


        function inp(a, nam, forma) {

            var deg = a.value.replace(/,/i,'.');


            var form = document.getElementsByClassName(forma)[0];

            var obj = JSON.parse(form.value);


            for (var i=0;i<obj.length;i++){
                if(obj[i].name==nam){
                    obj[i].value=deg;
                }
            }
            form.value = JSON.stringify(obj);
        }

        function inp2(nam, forma) {
            var nams =document.getElementsByName('inp-'+nam);
            var deg = nams[0].value;

            deg = deg.replace(/,/i,'.');
            var min = nams[1].value;
            minS = minS.replace(/,/i,'.');
            var sign = 1;

            if (nams.length>2) {
                var name = document.getElementsByName('inp-' + nam)[2].value;

                if (name == 'S' || name == 'W') {
                    sign = -1;
                }
            }
            var val = Math.round((deg*1+minS/60)*sign*1000)/1000;

            var form = document.getElementsByClassName(forma+'Form')[0];


            var obj = JSON.parse(form.value);


            for (var i=0;i<obj.length;i++){
                if(obj[i].name==nam){
                    obj[i].value=val;
                }
            }
            form.value = JSON.stringify(obj);
        }

        function inp3(nam, forma) {
            var nams =document.getElementsByName('inp-'+nam);
            var time = nams[0].value;
            var date = nams[1].value;
            var dateArr = date.split('-');
            var timeArr = time.split(':');
            //var val = time+", "+dateArr[2]+'.'+dateArr[1]+'.'+dateArr[0];
            var val = new Date(dateArr[0]*1, dateArr[1]*1-1 ,dateArr[2]*1 ,timeArr[0]*1 , timeArr[1]*1,0);
            val.setUTCHours(timeArr[0]*1);
            var form = document.getElementsByClassName(forma+'Form')[0];
            var obj = JSON.parse(form.value);


            for (var i=0;i<obj.length;i++){
                if(obj[i].name==nam){
                    obj[i].value=Math.round(val/1000);
                }
            }
            form.value = JSON.stringify(obj);
        }
    </script>

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
            position: relative;
            text-align: -webkit-center;
            top: 00px;
            left: 00px;
        }
        .tableOver {
            border: 1px solid #323232;
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
            width: auto;
            overflow: auto;
            display: inline;
            border-spacing: inherit;
        }
        .tableIn p{
            font-size: 18px;
            margin: 0;
        }
        .tableIn tr:last-child td{
            padding-top: 4px;
        }
        .sign{
            position: relative;
            top: 14px;
        }
        .line td{
            border-bottom: 1px solid #323232;
        }
        input{
            height: 23px;
            font-size: 20px;
            font-family: inherit;
        }
        .ok{
            height: 30px;
            margin-top: -3px;
            display: inline-block;
            cursor: pointer;
            border-radius: 14px;
            box-shadow: 0px 0px 7px -1px grey;
        }
        .okBut{
            position: relative;
            top: 7px;
            height: 28px;
            margin-left: 5px;
            border: none;
            background: none;
        }
        .inp{
            position: relative;
            top: 0px;
            padding-left: 5px;
        }

        .inpD{
            width: 45px;

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

    </style></head>
<body>
<div class="content">



<?php
        echo $task;
        ?>






<iframe name="empty" style="display: none;">

</iframe>


</div>
</body>
</html>