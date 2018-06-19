@extends('course')
@section('content')

    <h2 class="mainTitle">Решение навигационных задач</h2>


    <div class="mainBlock" onmouseover="openMainBlock(0)" onmouseout="closeMainBlock(0)">
        <img src="media/compass.svg" height="200px">
        <h2>Поправка гирокомпаса</h2>

        <div class="spisok">
            <a href="/course?t=23">По Солнцу</a>
            <a>По Планетам</a>
            <a href="/course?t=24">По Звездам</a>
            <a>По Восходу/Заходу</a>
            <a href="/course?t=26">По Полярной звезде</a>
        </div>
    </div>

    <div class="mainBlock"  onmouseover="openMainBlock(1)" onmouseout="closeMainBlock(1)">
        <img src="media/clock.svg" height="200px">
        <h2>Время явлений</h2>

        <div class="spisok">
            <a>Время явлений Солнца</a>
            <a>Время явлений Луны</a>
        </div>
    </div>

    <div class="mainBlock"  onmouseover="openMainBlock(2)" onmouseout="closeMainBlock(2)">
        <img src="media/position.svg" height="200px">
        <h2>Определение места судна</h2>

        <div class="spisok">
            <a>ОМС По Солнцу</a>
            <a>ОМС По Планетам</a>
            <a>ОМС По Звездам</a>
        </div>
    </div>

@stop