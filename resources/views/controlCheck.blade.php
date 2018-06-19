@extends('admin-course')
@section('content')
    <?php
    if (Auth::check())
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        $name = $user->name;
    }else{
        echo "<script>document.location.href = '/login';</script>";
        $name = '';
    }
    ?>
    <style>
        .content{
            top:50px;
        }
        .control input[type="submit"]{
            display: none;
        }
        .control input, select{
             border: none;
             pointer-events: none;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <p style="    background-color: #fff;
    color: #323232;
    font-family: 'Montserrat', sans-serif;;
    font-weight: 100;
    /*height: 50px;*/
    font-size: 30px;
    margin: 0;">Проверка</p><br>
    <form>
        <input type="number" name="control_id" style="font-size: 24px; height: 40px" placeholder="Номер варианта"><br>
        <input type="submit" value="Проверить" class="inpButton" style="width: auto"><br><br>
    </form>
    <script>
        var Answer = [];
        function checkAnswer(but) {
            time = but.parentNode.parentNode.childNodes[2].getElementsByTagName('input')[0];
            date = but.parentNode.parentNode.childNodes[2].getElementsByTagName('input')[1];

            var d = new Date();
            d.setTime(Date.parse(date.value+' '+time.value));
            var offset = d.getTimezoneOffset()*60;

            var timestamp = d.getTime();
            var answer = Answer[but.value];

            var delta = timestamp/1000-offset-answer;

            if(delta===0){
                date.style.border='1px solid #00ff00';
                date.style.color='green';
                date.style.boxShadow='0 0 5px -1px #00ff00';
                time.style.border='1px solid #00ff00';
                time.style.color='green';
                time.style.boxShadow='0 0 5px -1px #00ff00';
            }else{
                date.style.border='1px solid #ff0000';
                date.style.color='red';
                date.style.boxShadow='0 0 5px -1px #ff0000';
                time.style.border='1px solid #ff0000';
                time.style.color='red';
                time.style.boxShadow='0 0 5px -1px #ff0000';
            }
//            alert(delta);
        }

        function checking(arr) {
            for (var i=0;i<arr.length;i++){
//                alert('Inp_'+JSON.stringify(arr[i]));

                if (arr[i][1]){
                    document.getElementsByClassName('Inp_'+arr[i][0])[0].getElementsByTagName('td')[0].style.color='#27A252';
                    document.getElementsByClassName('Inp_'+arr[i][0])[0].getElementsByTagName('td')[0].style.textShadow=' 0 0 10px #27A252';
//                    document.getElementsByClassName('Inp_'+arr[i][0])[0].style.boxShadow=' inset 0 0 10px -1px #00FFA6';
                }else{
                    document.getElementsByClassName('Inp_'+arr[i][0])[0].getElementsByTagName('td')[0].style.color='#FC320A';
                    document.getElementsByClassName('Inp_'+arr[i][0])[0].getElementsByTagName('td')[0].style.textShadow=' 0 0 10px #FC320A';

                }

            }

        }
    </script>

    <div class="control">
    <?php echo $show; ?>
    </div>
    <iframe name="Check" style="display: none"></iframe>

@stop
