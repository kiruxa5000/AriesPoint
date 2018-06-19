<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 09.01.18
 * Time: 15:03
 */

namespace App\Http\Controllers;


use App\Task;
use App\TaskGAK;
use Illuminate\Support\Facades\Input;
use App\Task23;
use App\Task24;
use App\Task26;


class IntroController
{
    public function index(){

        $t = Input::get('t');
        if($t==23){
        $task = new Task23();
        $task->randomTask();
        $taskShow = $task->showObj();
        $object = $task->getObject();
            return view('course.tasks.i_23',['task'=>$taskShow, 'object'=>$object]);
        }elseif ($t==24){
            $task = new Task24();
            $task->randomTask();
            $taskShow = $task->showObj();
            $object = $task->getObject();
            return view('course.tasks.i_23',['task'=>$taskShow, 'object'=>$object]);
        }elseif ($t==26){
            $task = new Task26();
            $task->randomTask();
            $taskShow = $task->showObj();
            $object = $task->getObject();
            return view('course.tasks.i_23',['task'=>$taskShow, 'object'=>$object]);
        }elseif ($t=='GAK'){
            $task = new TaskGAK();
            $show = $task->Main();
            //$task->randomTask();
            //$taskShow = $task->showObj();
            //$object = $task->getObject();
            return view('course.tasks.t_gak',['show'=>$show]);
        }
    }
}