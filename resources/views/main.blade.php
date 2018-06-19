@extends('course')
@section('content')

    <h2 class="mainTitle">Решение навигационных задач</h2>


    <div class="mainBlock" onmouseover="openMainBlock(0)" onmouseout="closeMainBlock(0)">
        <img src="media/compass.svg" height="100px">
        <h2>Поправка гирокомпаса</h2>

        <div class="spisok">
            <a href="/course?t=23">По Солнцу</a>
            <a>По Планетам</a>
            <a href="/course?t=24">По Звездам</a>
            <a>По Восходу/Заходу</a>
            <a href="/course?t=26">По Полярной звезде</a>
        </div>
    </div>

    <div class="mainBlock" style="cursor: pointer" onclick="window.location='Alpheratz?task=get_ho'">
        <img src="media/clock.svg" height="100px">
        <h2>Время явлений Солнца</h2>
        <div class="spisok"></div>
    </div>

    <div class="mainBlock"  onmouseover="openMainBlock(2)" onmouseout="closeMainBlock(2)">
        <img src="media/position.svg" height="100px">
        <h2>Определение места судна</h2>

        <div class="spisok">
            <a>ОМС По Солнцу</a>
            <a>ОМС По Планетам</a>
            <a>ОМС По Звездам</a>
        </div>
    </div>
<br>

    <div class="mainBlock" style="width: 50%; height: 75px; cursor: pointer" onclick="window.location='result';">
        <h1>Подготовка к экзамену</h1>
    </div>

@stop