@extends('course')
@section('content')


<?php
use App\Task;
//$task = \App\TaskGAK::openTask($object);
//$task =\App\Argument::open($object);
//$arr = (array) $object;

        $task = new \App\Argument();

$task->set('VLP_8','');
$task->set('Tstart_8','');
$task->set('dT_8','');
$task->set('Tgr_8','');
$task->set('tt_8','');
$task->set('dt1_8','');
$task->set('dt2_8','');
$task->set('tgr_8','');
$task->set('lng_8','');
$task->set('tmW_8','');
$task->set('tmE_8','');
$task->set('b_8','');
$task->set('db_8','');
$task->set('b_8','');
$task->set('kvazi_8','');
$task->set('dbt_8','');

//$i=2;
//
//
//
//$starI=1;
//
//for ($i=1;$i<3;$i++){
//if ($task->value('star'.$i.'Num')<0){
//    $task->set('VLP_8', $i);
//
//    $task->set('Tstart_8',$task->value('Tstart'));
//    $task->set('dT_8',$task->value('dT_'.$i));
//    $task->set('Tgr_8',$task->value('Tgr_'.$i));
//    $task->set('tt_8',$task->value('tt_'.$i));
//    $task->set('dtt1_8',$task->value('dtt1_'.$i));
//    $task->set('dtt2_8',$task->value('dtt2_'.$i));
//    $task->set('tgr_8',$task->value('tgr_'.$i));
//    $task->set('lng_8',$task->value('lng'));
//    $task->set('tmW_8',$task->value('tmW_'.$i));
//    $task->set('tmE_8',$task->value('tmE_'.$i));
//    $task->set('b_8',$task->value('b_'.$i));
//    $task->set('dbt_8',$task->value('dbt_'.$i));
//    $task->set('b_8',$task->value('b_'.$i));
//    $task->set('dtt_8',$task->value('dtt'));
//    $task->set('dbt_8',$task->value('dbt'));
//
////    $task->set('St_'.$i,'');
////    $task->set('dT_'.$i,'');
////    $task->set('Tgr_'.$i,'');
////    $task->set('dS_'.$i,'');
////    $task->set('Sgr_'.$i,'');
////    $task->set('lng_'.$i,'');
////    $task->set('Sm_'.$i,'');
////    $task->set('tau_'.$i,'');
////    $task->set('tmW_'.$i,'');
////    $task->set('tmE_'.$i,'');
////    $task->set('b_'.$i,'');
////    $task->set('Tstart_'.$i,'');
////    $task->set('lng_'.$i,'');
//
//}else{
//
//    $task->set('VLP_'.$starI, $i);
//    $task->set('Star_'.$starI,$task->value('Star_'.$i));
//    $task->set('St_'.$starI,$task->value('St_'.$i));
//    $task->set('dT_'.$starI,$task->value('dT_'.$i));
//    $task->set('Tgr_'.$starI,$task->value('Tgr_'.$i));
//    $task->set('dS_'.$starI,$task->value('dS_'.$i));
//    $task->set('Sgr_'.$starI,$task->value('Sgr_'.$i));
//    $task->set('lng_'.$starI,$task->value('lng'));
//    $task->set('Sm_'.$starI,$task->value('Sm_'.$i));
//    $task->set('tau_'.$starI,$task->value('tau_'.$i));
//    $task->set('tmW_'.$starI,$task->value('tmW_'.$i));
//    $task->set('tmE_'.$starI,$task->value('tmE_'.$i));
//    $task->set('b_'.$starI,$task->value('b_'.$i));
//    $task->set('Tstart_'.$starI,$task->value('Tstart'));
////    $task->set('lng_'.$starI,$task->value('lng_'.$i));
//
//    $starI++;
//}
//
//}
//if ($starI==2){
$task->set('dGKK', '');
$task->set('dhid', '');
$task->set('dhi', '');
$task->set('dhd', '');
$task->set('Tvzt1', '');
$task->set('Tvzdlat', '');
$task->set('Tvzm', '');
$task->set('Tkm', '');
$task->set('lngH', '');
$task->set('Tvzgr', '');
$task->set('Tkgr', '');
$task->set('N', '');
$task->set('Tvzs', '');
$task->set('Tks', '');
$task->set('lat', 59.910473);
$task->set('lng', 30.255914);
$task->set('Ts', '');
$task->set('Tgr', '');
$svg='';

        for($i=1;$i<3;$i++){

    $task->set('VLP_'.$i, '');
    $task->set('Star_'.$i,'');
    $task->set('St_'.$i,'');
    $task->set('dT_'.$i,'');
    $task->set('Tgr_'.$i,'');
    $task->set('dS_'.$i,'');
    $task->set('Sgr_'.$i,'');
    $task->set('lng_'.$i,'');
    $task->set('Sm_'.$i,'');
    $task->set('tau_'.$i,'');
    $task->set('tmW_'.$i,'');
    $task->set('tmE_'.$i,'');
    $task->set('b_'.$i,'');
    $task->set('Tstart_'.$i,'');
    $task->set('lng_'.$i,'');
    $task->set('ho_'.$i,'');
    $task->set('Ao_'.$i,'');
    $task->set('OS'.$i,'');
    $task->set('hv_'.$i,'');
    $task->set('dhp_'.$i,'');
    $task->set('dhbt_'.$i,'');
    $task->set('dhz_'.$i,'');
    $task->set('dhv_'.$i,'');
    $task->set('hdop_'.$i,'');
    $task->set('hc_'.$i,'');
    $task->set('n_'.$i,'');


    }
$n_1 = '';
$A_1 = '';
$n_2 = '';
$A_2 = '';
$n_3 = '';
$A_3 = '';
$n_4 = '';
$A_4 = '';
//}4
//
//if ($task->value('SQ')>2){
//    $n_3 = $task->showValue('n_3');
//    $A_3 = $task->showValue('Ao_3');
//}else{
//    $n_3='';
//    $A_3='';
//}
//if ($task->value('SQ')>3){
//    $n_4 = $task->showValue('n_4');
//    $A_4 = $task->showValue('Ao_4');
//}else{
//    $n_4='';
//    $A_4='';
//}


?>


    <style>
        .t1{
            border-right: 2px solid black;
            border-left: 1px solid black;
        }
        .t_top{
            border-top: 1px solid black;
        }
        .t_right{
            border-right: 1px solid black;
        }
        .t_bottom{
            border-bottom: 1px solid black;
        }
        .t_bottom_b{
            border-bottom: 2px solid black;
        }
        .t_bottom_d{
            border-bottom: 1px dashed black;
        }
        table{
            border-spacing:inherit;
        }
        td{
            padding-left: 5px;
            vertical-align: top;
            text-align: center;
        }
        .tabl{
        }
        .tabl td{
            border-right: 2px solid black;
            border-bottom: 1px solid black;
        }
        .tabl tr:nth-child(1) td{
            border-bottom: 3px solid black;
            border-top: 2px solid black;
        }
        .tabl td:nth-child(1){
            border-right: 3px solid black;
            border-left: 2px solid black;
        }
        .tabl td:nth-child(2){
            width: 50px;
        }
        .tabl td:nth-child(3){
            width: 75px;
        }
        .tabl tr:last-child td{
            border-bottom: 2px solid;
        }
        .tablS td{
            width: 75px;
        }.tablS td:nth-child(2){
            width: 75px;
        }.tablS td:nth-child(3){
            width: 75px;
        }
        .resultTable{
            display: inline-block;
            font-size: 18px;
            margin-left: 46px;
        }
        .nobold td{
            border-bottom: 1px solid #323232;
        }
        .questTable{
            cursor: pointer;
            box-shadow: 0px 0px 0px 0px black;
            transition: box-shadow 0.5s;
        }
        .questTable:hover{
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
        }
        .content table{
            font-size: 18px;
        }
    </style>


<table style="margin-top: 10px; border: 7px solid #243752; padding: 20px" >
    <tr>
        <td>
            <table>
                <tr><th colspan="4">Расчет координат светил.</th></tr>
                <tr><td colspan="4">Гринвичевское время обсервации</td></tr>
                <tr>
                    <td>
                        <table class="tabl questTable" onclick="go('get_T')">
                            {{--<tr style="display: none;"><td></td><td></td><td></td></tr>--}}
                            <tr class='nobold'><td>Т<sub>c</sub></td><td colspan="2">{{$task->showValue('Ts')}}</td></tr>
                            <tr><td>N<sub>п</sub></td><td>{{$task->showValue('N')}}</td><td></td></tr>
                            <tr><td>Т<sub>Гр</sub></td><td colspan="2">{{$task->showValue('Tgr')}}</td></tr>
                        </table>
                    </td>
                </tr>

            </table>
        </td>
        <td>
            <table>
                <tr><th colspan="4">Исходные данные</th></tr>
                <tr>
                    <td>&phi;<sub>с</sub> = {{$task->showValue('lat')}}</td>
                    <td>&lambda;<sub>с</sub> = {{$task->showValue('lng')}}</td>

                </tr>

            </table>
        </td>
    </tr>

    <tr>
        <td>
            <table class="">
                <tr><th colspan="3">Расчет коорд. звезд.</th></tr>
                <tr><td>
                    <table class="tabl questTable" onclick="go('get_tb');">
                        <tr><td>№ВЛП</td><td>{{$task->value('VLP_1')}}</td><td>{{$task->value('VLP_2')}}</td></tr>
                        <tr><td>Звезда</td><td>{{$task->value('Star_1')}}</td><td>{{$task->value('Star_2')}}</td></tr>
                        <tr><td>Т<sub>гр</sub><sup>пуск</sup></td><td>{{$task->showValue('Tstart_1')}}</td><td>{{$task->showValue('Tstart_2')}}</td></tr>
                        <tr><td>&Delta;Т<sub>сек</sub></td><td>{{$task->showValue('dT_1')}}</td><td>{{$task->showValue('dT_2')}}</td></tr>
                        <tr><td>Т<sub>гр</sub></td><td>{{$task->showValue('Tgr_1')}}</td><td>{{$task->showValue('Tgr_2')}}</td></tr>
                        <tr><td>S<sub>т</sub></td><td>{{$task->showValue('St_1')}}</td><td>{{$task->showValue('St_2')}}</td></tr>
                        <tr><td>&Delta;S</td><td>{{$task->showValue('dS_1')}}</td><td>{{$task->showValue('dS_2')}}</td></tr>
                        <tr><td>S<sub>гр</sub></td><td>{{$task->showValue('Sgr_1')}}</td><td>{{$task->showValue('Sgr_2')}}</td></tr>
                        <tr><td>&lambda;</td><td>{{$task->showValue('lng_1')}}</td><td>{{$task->showValue('lng_2')}}</td></tr>
                        <tr><td>S<sub>м</sub></td><td>{{$task->showValue('Sm_1')}}</td><td>{{$task->showValue('Sm_2')}}</td></tr>
                        <tr><td>&tau;</td><td>{{$task->showValue('tau_1')}}</td><td>{{$task->showValue('tau_2')}}</td></tr>
                        <tr><td>t<sub>м</sub>W</td><td>{{$task->showValue('tmW_1')}}</td><td>{{$task->showValue('tmW_2')}}</td></tr>
                        <tr><td>t<sub>м</sub>E</td><td>{{$task->showValue('tmE_1')}}</td><td>{{$task->showValue('tmE_2')}}</td></tr>
                        <tr><td>&delta;</td><td>{{$task->showValue('b_1')}}</td><td>{{$task->showValue('b_2')}}</td></tr>
                    </table>
                    </td>
                </tr>


            </table>
        </td>

        <td>
            <table>
                <tr><th colspan="3">Расчет коорд. планеты</th></tr>
                <tr><td>
                    <table class="tabl questTable" onclick="go('get_tb_P')">
                        <tr><td>№ВЛП</td><td>{{$task->value('VLP_8')}}</td></tr>
                        <tr><td>T<sub>гр</sub><sup>пуск</sup></td><td>{{$task->showValue('Tstart_8')}}</td></tr>
                        <tr><td>&Delta;Т<sub>сек</sub></td><td>{{$task->showValue('dT_8')}}</td></tr>
                        <tr><td>Т<sub>гр</sub></td><td>{{$task->showValue('Tgr_8')}}</td></tr>
                        <tr><td>t<sub>т</sub></td><td>{{$task->showValue('tt_8')}}</td></tr>
                        <tr><td>&Delta;t<sub>1</sub></td><td>{{$task->showValue('dt1_8')}}</td></tr>
                        <tr><td>&Delta;t<sub>2</sub></td><td>{{$task->showValue('dt2_8')}}</td></tr>
                        <tr><td>t<sub>гр</sub></td><td>{{$task->showValue('tgr_8')}}</td></tr>
                        <tr><td>&lambda;</td><td>{{$task->showValue('lng_8')}}</td></tr>
                        <tr><td>t<sub>м</sub>W</td><td>{{$task->showValue('tmW_8')}}</td></tr>
                        <tr><td>t<sub>м</sub>E</td><td>{{$task->showValue('tmE_8')}}</td></tr>
                        <tr><td>&Delta; / &Delta;</td><td>{{$task->showValue('kvazi_8')}}/{{$task->showValue('dbt_8')}}</td></tr>
                        <tr><td>&delta;<sub>т</sub></td><td>{{$task->showValue('b_8')}}</td></tr>
                        <tr><td>&Delta;&delta;</td><td>{{$task->showValue('db_8')}}</td></tr>
                        <tr><td>&delta;</td><td>{{$task->showValue('b_8')}}</td></tr>
                    </table>
                    </td>
                </tr>


            </table>
        </td>

        <td>
            <table class="questTable" onclick="go('get_hA')" >
                <tr><th>Решение паралл. треуг.</th></tr>
                <tr>
                    <td>Расчет h<sub>c</sub> A<sub>c</sub> выполнить по<br>любой системе формул на<br>калькуляторе или по<br>таблицам</td>
                </tr>
                <tr><td>h<sub>c</sub> = {{$task->showValue('ho_1')}} 1 ВЛП</td></tr>
                <tr><td>А<sub>c</sub> = {{$task->showValue('Ao_1')}} </td></tr>
                <tr><td>h<sub>c</sub> = {{$task->showValue('ho_2')}} ВЛП</td></tr>
                <tr><td>А<sub>c</sub> = {{$task->showValue('Ao_2')}} </td></tr>
                <tr><th>Поправка гирокомпаса</th></tr>
                <tr><td>&Delta;ГК = {{$task->showValue('dGKK')}}</td></tr>
            </table>
        </td>
    </tr>
    <tr><th colspan="4">Исправление высот и приведение к одному зениту</th></tr>
    <tr><td>
            <table class="tabl questTable" onclick="go('get_ho')">
                <tr><td>№ВЛП</td><td>1</td><td>2</td></tr>
                <tr><td>ОС</td><td>{{$task->showValue('OS1')}}</td><td>{{$task->showValue('OS2')}}</td></tr>
                <tr><td>i+d<sub>сек</sub></td><td>{{$task->showValue('dhid')}}</td><td>{{$task->showValue('dhid')}}</td></tr>
                <tr><td>h<sub>в</sub></td><td>{{$task->showValue('hv_1')}}</td><td>{{$task->showValue('hv_2')}}</td></tr>
                <tr><td>&Delta;h<sub>p</sub></td><td>{{$task->showValue('dhp_1')}}</td><td>{{$task->showValue('dhp_2')}}</td></tr>
                <tr><td>&Delta;h<sub>Bt</sub></td><td>{{$task->showValue('dhbt_1')}}</td><td>{{$task->showValue('dhbt_2')}}</td></tr>
                <tr><td>&Delta;h<sub>доп</sub></td><td>{{$task->showValue('hdop_1')}}</td><td>{{$task->showValue('hdop_2')}}</td></tr>
                <tr><td>&Delta;h<sub>z</sub></td><td>{{$task->showValue('dhz_1')}}</td><td>{{$task->showValue('dhz_2')}}</td></tr>
                <tr><td>h<sub>c</sub></td><td>{{$task->showValue('hc_1')}}</td><td>{{$task->showValue('hc_2')}}</td></tr>
                <tr><td>h<sub>o</sub></td><td>{{$task->showValue('ho_1')}}</td><td>{{$task->showValue('ho_2')}}</td></tr>
                <tr><td>n</td><td>{{$task->showValue('n_1')}}</td><td>{{$task->showValue('n_2')}}</td></tr>
                <tr><td>A<sub>c</sub></td><td>{{$task->showValue('Ao_1')}}</td><td>{{$task->showValue('Ao_2')}}</td></tr>

            </table>
        </td>
    <td colspan="2">
        <table class="questTable" onclick="go('OMS')" >
            <tr>
            </tr>
            <tr><th colspan="5">Элементы ВЛП</th></tr>
            <tr>
                <td>
                    <table class="tabl tablS">

                        <tr>
                            <td>№ВЛП</td><td>1</td><td>2</td><td>3</td><td>4</td>
                        </tr>
                        <tr>
                            <td>n</td><td>{{$task->showValue('n_1')}}</td><td>{{$task->showValue('n_2')}}</td><td>{{$n_3}}</td><td>{{$n_4}}</td>
                        </tr>
                        <tr>
                            <td>A<sub>c</sub></td><td>{{$task->showValue('Ao_1')}}</td><td>{{$task->showValue('Ao_2')}}</td><td>{{$A_3}}</td><td>{{$A_4}}</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <th>Прокладка</th>
            </tr>
            <tr>
                <td>Выполняется на бланке или на обороте этого листа, с<br>указанием масштаба расчетом &phi;<sub>o</sub> и &lambda;<sub>o</sub></td>
            </tr>
        </table>
    </td>
    </tr>

    <tr>
        <th>Солнце</th>
    </tr>
    <tr>
        <td>
            <table class="tabl questTable" onclick="go('get_tvzk')">
                <tr><td></td><td>Восх./Зах.</td><td>Кульмин.</td></tr>
                <tr><td>Т<sub>табл</sub></td><td>{{$task->showValue('Tvzt1')}}</td><td></td></tr>
                <tr><td>&Delta;Т<sub>&phi;</sub></td><td>{{$task->showValue('Tvzdlat')}}</td><td></td></tr>
                <tr><td>Т<sub>м</sub></td><td>{{$task->showValue('Tvzm')}}</td><td>{{$task->showValue('Tkm')}}</td></tr>
                <tr><td>&lambda;</td><td>{{$task->showValue('lngH')}}</td><td>{{$task->showValue('lngH')}}</td></tr>
                <tr><td>Т<sub>Гр</sub></td><td>{{$task->showValue('Tvzgr')}}</td><td>{{$task->showValue('Tkgr')}}</td></tr>
                <tr><td>N</td><td>{{$task->showValue('N')}}</td><td>{{$task->showValue('N')}}</td></tr>
                <tr><td>Т<sub>c</sub></td><td>{{$task->showValue('Tvzs')}}</td><td>{{$task->showValue('Tks')}}</td></tr>



            </table>
        </td>
    </tr>

</table>



<div style="position: relative; margin-top: 300px; margin-left: 80px">
<?php

        echo urldecode($svg);
        ?>

<br>
        {{--<table class="resultTable">--}}
            {{--<tr><td>&phi;<sub>c</sub> =</td><td>{{$task->showValue('lat')}}</td></tr>--}}
            {{--<tr><td>&Delta;&phi; =</td><td>{{$task->showValue('dlat')}}</td></tr>--}}
            {{--<tr><td>&phi;<sub>o</sub> =</td><td>{{$task->showValue('lato')}}</td></tr>--}}
        {{--</table>--}}
    {{--<table class="resultTable">--}}
            {{--<tr><td>&Delta;&omega; =</td><td>{{$task->showValue('domega')}}</td></tr>--}}
            {{--<tr><td>&Delta;&lambda;; =</td><td>&Delta;&omega; sin(&phi;)</td></tr>--}}
            {{--<tr><td>&Delta;&lambda;; =</td><td>{{$task->showValue('dlng')}}</td></tr>--}}
    {{--</table>--}}
    {{--<table  class="resultTable">--}}
            {{--<tr><td>&lambda;<sub>c</sub> =</td><td>{{$task->showValue('lng')}}</td></tr>--}}
            {{--<tr><td>&Delta;&lambda; =</td><td>{{$task->showValue('dlng')}}</td></tr>--}}
            {{--<tr><td>&Delta;<sub>o</sub> =</td><td>{{$task->showValue('lngo')}}</td></tr>--}}
        {{--</table>--}}
</div>
    <script>
        function go(number) {
            window.location='Alpheratz?task='+number;
        }
    </script>

@stop