@extends('course')
@section('content')
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
            top: 100px;
            left: 00px;
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
            width: 280px;
            overflow: auto;
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
            height: inherit;
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
    </style>




<?php
        echo $show;
    ?>

    <script>
        var Stars= [
            'Альферас',
            'Кафф',
            'Шедар',
            'Дифда',
            'Ахернар',
            'Альмак',
            'Хамаль',
            'Менкар',
            'Мирфак',
            'Альдебаран',
            'Ригель',
            'Капелла',
            'Нат',
            'Минтака',
            'Альнилам',
            'Бетельгейзе',
            'Канопус',
            'Сириус',
            'Адхара',
            'Кастор',
            'Процион',
            'Поллукс',
            'p Арго',
            'y Арго',
            'Авиор',
            'Сухаиль',
            'Миаплацидус',
            'Альфард',
            'Регул',
            'Дубхе',
            'Денебола',
            'Акрукс',
            'Мухлифайн',
            'Мимоза',
            'Алиот',
            'Мицар',
            'Спика',
            'Бенетнаш',
            'Арктур',
            'Ригил-Кент',
            'Кохаб',
            'Альфакка',
            'Антарес',
            'Атрия',
            'Жаула',
            'Расальхагуэ',
            'x Скорпиона',
            'Эльтанин',
            'Вега',
            'Нунки',
            'Альтаир',
            'Пикок',
            'Денеб',
            'Эниф',
            'Ал Наир',
            'b Журавля',
            'Фомальхаут',
            'Полярная'
        ];
        var Planets=['',
            'Венера',
            'Марс',
            'Юпитер',
            'Сатурн'
        ];
        var StarsNumber=[
            1,
            2,
            6,
            7,
            11,
            15,
            16,
            18,
            20,
            24,
            27,
            28,
            30,
            32,
            35,
            40,
            44,
            46,
            48,
            54,
            55,
            56,
            57,
            58,
            60,
            62,
            63,
            65,
            67,
            72,
            74,
            80,
            84,
            86,
            87,
            91,
            92,
            94,
            99,
            102,
            106,
            111,
            117,
            122,
            129,
            130,
            132,
            134,
            139,
            140,
            146,
            148,
            149,
            152,
            154,
            156,
            157,
            160
        ];
//var num;
for(var t=1;t<3;t++) {
    var num = document.getElementsByName('star' + t + 'Num')[0];
    document.getElementsByName('Star_' + t)[0].onblur = function (num) {
        var res = 0;
        if (Stars.indexOf(this.value) > -1) {
            res = StarsNumber[Stars.indexOf(this.value)];
        } else if (Planets.indexOf(this.value) > -1) {
            res = Planets.indexOf(this.value) * (-1);
        }

        var nov = true;

        if (res<0&&this.parentNode.childNodes[1].value<0||res>=0&&this.parentNode.childNodes[1].value>=0) {
            nov = false;
        }
            this.parentNode.childNodes[1].value = res;
            var type = this.parentNode.childNodes[1].value;

            var x = 8;
            var y = 2;
            if (this.name === 'Star_1') {
                x = 7;
                y = 1;
            }
            var td = this.parentNode.parentNode.parentNode.childNodes[x].childNodes;

            if (type < 0) {

                if(nov) {
                    td[0].innerHTML = 't<sub>т</sub><span class="ttH descr"></span><span class="descr planetName">' + this.value + '</span>';
                    td[1].innerHTML = '<input type="number" name="tt_' + y + 'D" value="20" class="inpD"><input type="number" name="tt_' + y + 'M" value="10" class="inpD" step="any">';
                    td[2].innerHTML = 'b<sub>пр</sub><input type="number" name="b_' + y + 'D" value="0" class="inpD"><input type="number" name="b_' + y + 'M" value="0" class="inpD" step="any"><select class="inpN" name="b_' + y + 'N">\n' +
                        '                               <option selected="">N</option>\n' +
                        '                               <option>S</option>\n' +
                        '                           </select>';
                    td[3].innerHTML = 'Δt<input type="number" name="dttD" value="0" class="inpD" style="display: none;"><input type="number" name="dttM" value="15" class="inpD" step="any">';
                    td[4].innerHTML = 'Δb<input type="number" name="dbtD" value="0" class="inpD" style="display: none;"><input type="number" name="dbtM" value="15" class="inpD" step="any">';
                    td[5].innerHTML = 'P<sub>0</sub><input type="number" name="P0D" value="0" class="inpD" style="display: none;"><input type="number" name="P0M" value="15" class="inpD" step="any">';
                }else{
                    document.getElementsByClassName('planetName')[0].innerHTML=this.value;
                }
                } else {
                td[0].innerHTML = 'τ<span class="descr starNum_'+y+'">' + type + '</span>';
                if (nov) {
                    td[1].innerHTML = '<input type="number" name="tau_' + y + 'D" value="20" class="inpD"><input type="number" name="tau_' + y + 'M" value="10" class="inpD" step="any">';
                    td[2].innerHTML = 'b<sub>пр</sub><input type="number" name="b_' + y + 'D" value="0" class="inpD"><input type="number" name="b_' + y + 'M" value="0" class="inpD" step="any"><select class="inpN" name="b_' + y + 'N">\n' +
                        '                               <option selected="">N</option>\n' +
                        '                               <option>S</option>\n' +
                        '                           </select>';
                    td[3].innerHTML = '';
                    td[4].innerHTML = '';
                    td[5].innerHTML = '';
                }
            }

    };
}


        function calcH (){



            var TStart0 = document.getElementsByName('Tstart')[0].value.split(':');
            if (TStart0.length===2){
                TStart0.push(0);
            }
            var TStart = TStart0[0]*1+TStart0[1]/60+TStart0[2]/3600;
            var stars = [];
            var planets = [];
            if (document.getElementsByName('star1Num')[0].value>=0){
                var dT_0 = document.getElementsByName('dT_1')[0].value.split(':');
                if (dT_0.length===2){
                    dT_0.push(0);
                }
                var dT_1 = dT_0[0]/60+dT_0[1]/3600;


                stars.push(TStart+dT_1);
            }else{
                var dT_0 = document.getElementsByName('dT_1')[0].value.split(':');
                if (dT_0.length===2){
                    dT_0.push(0);
                }
                var dT_1 = dT_0[0]/60+dT_0[1]/3600;


                planets.push(TStart+dT_1);
            }
            if (document.getElementsByName('star2Num')[0].value>=0){
                var dT_0 = document.getElementsByName('dT_2')[0].value.split(':');
                if (dT_0.length===2){
                    dT_0.push(0);
                }
                var dT_2 = dT_0[0]/60+dT_0[1]/3600;
                stars.push(TStart+dT_2);
            }else{
                var dT_0 = document.getElementsByName('dT_2')[0].value.split(':');
                if (dT_0.length===2){
                    dT_0.push(0);
                }
                var dT_2 = dT_0[0]/60+dT_0[1]/3600;
                planets.push(TStart+dT_2);
            }
//            stars=[1,2];

            var minStar = stars[0];
            for (i = 0; i < 2; i++) {
                if (stars[i] < minStar) minStar = stars[i];
            }

            minP = planets[0];
            for (i = 0; i < 2; i++) {
                if (planets[i] < minP) minP = planets[i];
            }

            var dat = document.getElementsByName('date')[0].value.split('-');
            var tim = document.getElementsByName('time')[0].value.split(':');

            var ND = document.getElementsByName('ND')[0].value;
            var NN = document.getElementsByName('NN')[0].value;
            if (NN ==='E') {
                ND = -ND
            }

            var date = new Date(dat[0], dat[1], dat[2], tim[0], tim[1], 0);
            date = new Date(date.getTime()+ND*3600000);

            var day = date.getDate();


            dateH = date.getHours();

            if (Math.abs(minStar-dateH)>6) {
                if ((minStar - dateH) < 0) {
                    day++;
                }else{
                    day--;
                }
            }
            minStar=Math.floor(minStar);
            if(minStar<10){
                minStar = "0"+minStar;
            }
            var month = ['Янв','Фев','Марта','Апр','Мая','Июня','Июля','Авг', 'Сен','Окт','Нояб','Дек'];
            minP=Math.floor(minP);
            if(minP<10){
                minP = "0"+minP;
            }
            document.getElementsByClassName('datetimer')[0].innerHTML=day+'.'+month[date.getMonth()-1];
            document.getElementsByClassName('StH')[0].innerHTML=minStar+':00';
            if (planets.length>0){
                document.getElementsByClassName('ttH')[0].innerHTML=minP+':00';
            }
        }


        document.getElementsByName('Tstart')[0].onblur= function () {
            calcH();
        };

        document.getElementsByName('dT_1')[0].onblur= function () {
            calcH();
        };

        document.getElementsByName('dT_2')[0].onblur= function () {
            calcH();
        };

        document.getElementsByName('ND')[0].onblur= function () {
            calcH();
        };

        document.getElementsByName('NN')[0].onblur= function () {
            calcH();
        };

        document.getElementsByName('date')[0].onblur= function () {
            calcH();
        };
        document.getElementsByName('time')[0].onblur= function () {
            calcH();
        };


        document.getElementsByName('type3')[0].oninput = function (){
            if (this.value === 'A'){
                this.parentNode.parentNode.childNodes[2].innerHTML='<input name="Star_3" value="00" class="inpText">';
                this.parentNode.parentNode.childNodes[3].innerHTML='A<sub>o</sub>';
                this.parentNode.parentNode.childNodes[4].innerHTML='<input type="number" name="Ao_3" value="0" class="inpXD" step="any">';
                this.parentNode.parentNode.childNodes[5].innerHTML='n';
                this.parentNode.parentNode.childNodes[6].innerHTML='<input type="number" name="n_3D" value="0" class="inpD" style="display: none;"><input type="number" name="n_3M" value="15" class="inpD" step="any">';
            }else if (this.value==='OC'){
                this.parentNode.parentNode.childNodes[2].innerHTML='<input name="Star_3" value="00" class="inpText"><input type="number" name="star2Num" value="0" step="1" class="inpM">';
                this.parentNode.parentNode.childNodes[3].innerHTML='ΔТ';
                this.parentNode.parentNode.childNodes[4].innerHTML='<input type="time" name="dT_3" value="00:00:00" step="1">';
                this.parentNode.parentNode.childNodes[5].innerHTML='ОС<sub>3</sub>';
                this.parentNode.parentNode.childNodes[6].innerHTML='<input type="number" name="OS3D" value="20" class="inpD"><input type="number" name="OS3M" value="10" class="inpD" step="any">';
            }else{
                this.parentNode.parentNode.childNodes[2].innerHTML='';
                this.parentNode.parentNode.childNodes[3].innerHTML='';
                this.parentNode.parentNode.childNodes[4].innerHTML='';
                this.parentNode.parentNode.childNodes[5].innerHTML='';
                this.parentNode.parentNode.childNodes[6].innerHTML='';
            }
            var type = document.getElementsByName('type')[0];
            var J = JSON.parse(type.value);
            J[0]=this.value;
            type.value = JSON.stringify(J);
        };

        document.getElementsByName('type4')[0].oninput = function (){
            if (this.value === 'A'){

                this.parentNode.parentNode.childNodes[2].innerHTML='<input name="Star_4" value="00" class="inpText">';
                this.parentNode.parentNode.childNodes[3].innerHTML='A<sub>o</sub>';
                this.parentNode.parentNode.childNodes[4].innerHTML='<input type="number" name="Ao_4" value="0" class="inpXD" step="any">';
                this.parentNode.parentNode.childNodes[5].innerHTML='n';
                this.parentNode.parentNode.childNodes[6].innerHTML='<input type="number" name="n_4D" value="0" class="inpD" style="display: none;"><input type="number" name="n_3M" value="15" class="inpD" step="any">';
            }else if (this.value==='OC'){
                this.parentNode.parentNode.childNodes[2].innerHTML='<input name="Star_4" value="00" class="inpText">';
                this.parentNode.parentNode.childNodes[3].innerHTML='ΔТ';
                this.parentNode.parentNode.childNodes[4].innerHTML='<input type="time" name="dT_4" value="00:00:00" step="1">';
                this.parentNode.parentNode.childNodes[5].innerHTML='ОС<sub>3</sub>';
                this.parentNode.parentNode.childNodes[6].innerHTML='<input type="number" name="OS4D" value="20" class="inpD"><input type="number" name="OS3M" value="10" class="inpD" step="any">';
            }else{
                this.parentNode.parentNode.childNodes[2].innerHTML='';
                this.parentNode.parentNode.childNodes[3].innerHTML='';
                this.parentNode.parentNode.childNodes[4].innerHTML='';
                this.parentNode.parentNode.childNodes[5].innerHTML='';
                this.parentNode.parentNode.childNodes[6].innerHTML='';
            }
            var type = document.getElementsByName('type')[0];
            var J = JSON.parse(type.value);
            J[1]=this.value;
            type.value = JSON.stringify(J);
        }
//
//        document.getElementsByName('Star_1')[0].onblur = function (){

        var arrPHI = [
            74,
            72,
            70,
            68,
            66,
            64,
            62,
            60,
            58,
            56,
            54,
            52,
            50,
            45,
            40,
            30,
            20,
            10,
            0,
            -10,
            -20,
            -30,
            -40,
            -45,
            -50,
            -52,
            -54,
            -56,
            -58,
            -60
        ];


        document.getElementsByName('latD')[0].onblur = function () {
            var lat = document.getElementsByName('latD')[0].value;
            if (document.getElementsByName('latN')[0].value==='S'){
                lat = -lat;
            }
getLat(lat);
        };

        document.getElementsByName('latM')[0].onblur = function () {
            var lat = document.getElementsByName('latD')[0].value;
            if (document.getElementsByName('latN')[0].value==='S'){
                lat = -lat;
            }
            getLat(lat);
        };

        document.getElementsByName('latN')[0].onblur = function () {
            var lat = document.getElementsByName('latD')[0].value;
            if (document.getElementsByName('latN')[0].value==='S'){
                lat = -lat;
            }
            getLat(lat);
        };
        function getLat(lat) {

            var phi1;
            var phi2;
            for(var f=0;f<arrPHI.length;f++){
                if(lat>arrPHI[f]){
                    phi1 = arrPHI[f];
                    if(lat>0) {
                        phi1 = arrPHI[f];
                        phi2 = arrPHI[f - 1];
                    }else{
                        phi1 = arrPHI[f -1];
                        phi2 = arrPHI[f];
                    }
                    break;
                }

            }


//            alert(phi1+' '+phi2);
            if(lat>0){
                var latN = 'N';
            }else{
                var latN = 'S';
            }
            document.getElementsByClassName('tvz1')[0].innerHTML=Math.abs(phi1)+' '+latN;
            document.getElementsByClassName('tvz2')[0].innerHTML=Math.abs(phi2)+' '+latN;
        }


        function getLat2() {
            var lat = document.getElementsByName('latD')[0].value;
            if (document.getElementsByName('latN')[0].value==='S'){
                lat = -lat;
            }
            getLat(lat);
        }

        calcH();
        getLat2();


        if(document.getElementsByName('star1Num')[0].value<0){
            document.getElementsByClassName('planetName')[0].innerHTML=document.getElementsByName('Star_1')[0].value;
        }else{
            document.getElementsByClassName('starNum_1')[0].innerHTML=document.getElementsByName('star1Num')[0].value;
        }


        if(document.getElementsByName('star2Num')[0].value<0){
            document.getElementsByClassName('planetName')[0].innerHTML=document.getElementsByName('Star_2')[0].value;
        }else{
            document.getElementsByClassName('starNum_2')[0].innerHTML=document.getElementsByName('star2Num')[0].value;
        }

    </script>


@stop