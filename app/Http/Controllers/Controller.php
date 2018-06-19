<?php

namespace App\Http\Controllers;

use App\Alpheratz;
use App\Argument;
use App\Check;
use Faker\Provider\DateTime;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Mockery\Exception;
use Symfony\Component\HttpFoundation\Response;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function result(){

//        $object = json_decode(Input::post('object'), true);
//        $svg = Input::get('svg');



        return view('course.tasks.result');

    }

    public function admin(){
//        $mysqli = new \mysqli("localhost", "root", "425695340", "habr");
//        $users = $mysqli->query("SELECT * FROM `users` ")->fetch_all();

        $tasks = ['get_T','get_tb_P','get_tb','get_hA','get_ho','OMS'];

        $users = DB::table('users')->whereNotIn('id',[4])->get();


        foreach ($users as $user){
            $summ = 0;
            $summ_all = 0;
            foreach ($tasks as $task){
                $activity = DB::table('activity')->where('userId', $user->id)->where('taskId',$task)->where('result',1)->get();
                $activity_all = DB::table('activity')->where('userId', $user->id)->where('taskId',$task)->get();
                $user->tasks[$task] = [count($activity),count($activity_all)];
                $summ+=count($activity);
                $summ_all+=count($activity_all);

            }
            $user->summ = $summ;
            $user->summ_all = $summ_all;
        }

//        foreach ($users as $user)
//        {
//            var_dump($user->name);
//        }

        return view('admin',array('users'=>$users, 'tasks'=>$tasks));

    }

    public function Alpheratz(){
        $alp = new Alpheratz();
        $main = $alp->main();
        $show = $main['show'];
        $title = $main['title'];
        return view('Alpheratz',['show'=>$show, 'title'=>$title]);
    }
    public function Check(){

        $alp = new Check();
        $main = $alp->main();
        $show = $main['show'];
//        $show.="<script>window.parent.alert('.$show.')</script>";
        return view('check',['show'=>$show]);
    }

    public function Controls(){

        if(isset($_REQUEST['count'])){


        $count = $_REQUEST['count'];
        $constsTable='';
        $constsValues='';


        for($i=0;$i<$count;$i++){
//            $id = rand(100000000,99999999999999);

            $alp = new Alpheratz();
            $main = $alp->main();

//        $show = $main['array'];
//            $constsTable .= '<div class="controlBlock"><h3>Вариант: '.$id.'</h3>'.$main['constsTable'].'</div>';
            $body = $main['constsValues'];
            $body['taskId']=$_REQUEST['task'];
            $constsValues[]= $main['constsValues'];
//            DB::table('controls')->insert([
//                ['body' => json_encode($body), 'control_id' => $id]
//            ]);
            $id = DB::table('controls')->insertGetId(
                array('body' => json_encode($body), 'control_id' => '1'));
            $constsTable .= '<div class="controlBlock"><h3>Вариант: '.$id.'</h3>'.$main['constsTable'].'</div>';



        }
        $title = $main['title'];
//        $alp = new Alpheratz();
//        $main = $alp->main();
//        $title = $main['title'];
////        $show = $main['array'];
//        $constsTable = $main['constsTable'];
//        $constsValues = $main['constsValues'];
//        $show.="<script>window.parent.alert('.$show.')</script>";

//            $print = '<a href>Версия для печати</a>';
            return view('print-Alpheratz',['show'=>$constsTable, 'title'=>$title]);
        }else{
            $constsTable = '<form action="" target="_blank"><input name="task" value="'.$_REQUEST['task'].'" style="display: none"><br>
                <p style="font-size: 24px">Кол-во работ: <input type="number" name="count" style="width: 50px; font-size: 20px"></p><br><input class="inpButton" type="submit" value="Сгенерировать!"></form>';
            $title = 'Сгенерировать контрольные';
            $constsValues = '';
            $print='';
            return view('control',['show'=>$constsTable, 'title'=>$title]);
        }

    }

    public function checkControl(){
        $alert='';
        if(!isset($_REQUEST['control_id'])){
            return view('controlCheck',['show'=>'Введите номер варианта']);
        }
        $controlId = $_REQUEST['control_id'];

        $control = DB::table('controls')->where('id',$controlId)->get();
        if(count($control)==0){
            return view('controlCheck',['show'=>'Не верный номер варианта']);
        }else{
            $control=$control[0];
        }
        $body = $control->body;
        $args = (array)json_decode($body);

        $argument = new Argument();
        foreach ($args as $key=>$arg){
            $type = $argument->type($key);
            if($type=='date'){
                $_REQUEST[$key.'date']=date('Y-m-d',$arg);
                $_REQUEST[$key.'time']=date('H:i:s',$arg);

            }elseif($type=='N'){
                $_REQUEST[$key.'D']=$arg/3600;
                if($arg>0){
                    $NN = 'E';
                }else{
                    $NN = 'W';
                }
                $_REQUEST[$key.'N']= $NN;

            }elseif ($type=='dm'||$type=='dm+'){
                if($arg<0) {
                    $sign = -1;
                }else{
                    $sign = 1;
                }
                $arg = abs($arg);
                $D = round($arg);
                $M = ($arg-$D)*60;
                $_REQUEST[$key.'D'] = $D;
                $_REQUEST[$key.'M'] = $M;
            }elseif ($type=='m'||$type=='m+'){
                $M = $arg;
                $_REQUEST[$key.'M'] = $M;
            }elseif ($type=='time'){
                $_REQUEST[$key]=date('H:i:s',$arg);
            }elseif ($type=='hm'){
                $_REQUEST[$key]=date('H:i:s',$arg);
            }elseif ($type=='minsec'){
                    $date = date('H:i:s', $arg);
                    $_REQUEST[$key] = $date;
            }elseif ($key=='B'||$key=='V'||$key=='e'||$key=='starNum'||$key=='temp'||$type=='deg'||$type=='deg+'){
                $_REQUEST[$key]=$arg;
            }elseif ($type=='numberM'){
                $_REQUEST[$key] = round($arg/60,5);
            }elseif ($type=='lat'){
                if($arg>0){
                    $N = 'N';
                }else{
                    $N = 'S';
                }
                $arg = abs($arg);
                $D = floor($arg);
                $M = ($arg-$D)*60;
                $_REQUEST[$key.'D'] = $D;
                $_REQUEST[$key.'M'] = $M;
                $_REQUEST[$key.'N'] = $N;
            }elseif ($type=='lng'){
                if($arg>0){
                    $N = 'E';
                }else{
                    $N = 'W';
                }
                $arg = abs($arg);
                $D = floor($arg);
                $M = ($arg-$D)*60;
                $_REQUEST[$key.'D'] = $D;
                $_REQUEST[$key.'M'] = $M;
                $_REQUEST[$key.'N'] = $N;
            }else{
                $_REQUEST['taskId']=$arg;
            }
        }
        $alp = new Check();
        $main = $alp->main();
        $show = $main['show'];
//        $show.="<script>window.parent.alert('".json_encode($_REQUEST)."')</script>";
        return view('controlCheck',['show'=>$show]);
//        return new Response($show);
    }
}

