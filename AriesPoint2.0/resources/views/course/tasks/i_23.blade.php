@extends('course')
@section('content')




    <table>
        <tr><th colspan="4">Поправка гирокомпаса по звезде {{$task->VAL['star']}}</th></tr>
        <tr>
            <td></td>
        </tr>
        <tr><td>Дата:</td><td>{{$task->SHOW['date']}}</td><td>Широта:</td><td>{{$task->SHOW['lat']}}</td></tr>
        <tr><td>Время:</td><td>{{$task->SHOW['time']}}</td><td>Долгота:</td><td>{{$task->SHOW['lng']}}</td></tr>
        <tr><td>Часовой пояс:</td><td>{{$task->SHOW['N']}}</td><td>ГКК:</td><td>{{$task->SHOW['gkk']}}</td></tr>
    </table>

    <div class="buttons">
        <form action="" method="get">
            {{ csrf_field() }}
            <input name="t" value="23" style="display: none">
            <input type="submit" value="Другой вариант" class="but">
        </form>
        <form action="" method="post" target="answer">
            {{ csrf_field() }}
            <input name="object" value="{{$object}}" style="display:none;">
            <input name="type" value="answer" style="display:none;">
            <input type="submit" value="Показать решение" class="but">
        </form>
        <form action="" method="post" target="answer"  class="begin">
            {{ csrf_field() }}
            <input name="object" value="{{$object}}" style="display:none;">
            <input name="type" value="control" style="display:none;">
            <input type="submit" value="Контрольная" class="but">
        </form>
        <form action="" method="post" target="answer" class="begin" style="display: none;">
            {{ csrf_field() }}
            <input name="object" value="{{$object}}" style="display:none;">
            <input name="type" value="task" style="display:none;">
            <input type="submit" value="Решаем" class="but">

        </form>
    </div>
    <div class="buttons1">
            <input type="button" value="Обучение этап A" class="but" onclick="edu('a');"><br>
            <input type="button" value="Обучение этап B" class="but" onclick="edu('b');"><br>
            <input type="button" value="Обучение этап C" class="but" onclick="edu('c');">

        <form action="" method="post" target="answer" class="begin" style="display: none;">
            {{ csrf_field() }}
            <input name="object" value="{{$object}}" style="display:none;">
            <input name="type" value="task" style="display:none;">
            <input type="submit" value="Решаем" class="but">

        </form>
    </div>


    <form action="" method="post" target="help" style="display: none" name="eduForm">
        {{ csrf_field() }}
        <input name="object" value="{{$object}}" style="display:none;">
        <input name="type" value="help" style="display:none;">
        <input id="eduStage" name="stage" value="a" style="display:none;">
    </form>

    <form action="" method="post" target="answer" style="display: none" name="taskForm">
        {{ csrf_field() }}
        <input name="object" value="{{$object}}" style="display:none;">
        <input name="type" value="task" style="display:none;">
        <input id="taskStage" name="stage" value="a" style="display:none;">
    </form>
    <iframe name="help" width="100%" height="1250px" frameborder = "no" class="help">

    </iframe>
    <iframe name="answer" width="100%" height="1250px" frameborder = "no" class="answer">

    </iframe>


    <script>
        // document.getElementsByClassName('begin')[0].submit();
        // document.getElementsByClassName('begin')[1].submit();
        function edu(stage) {
//            alert(stage);
            var eduForm = document.getElementsByName('eduForm')[0];
            document.getElementById('eduStage').value = stage;
            eduForm.submit();

            var taskForm = document.getElementsByName('taskForm')[0];
            document.getElementById('taskStage').value = stage;
            taskForm.submit();
        }
    </script>
    @stop