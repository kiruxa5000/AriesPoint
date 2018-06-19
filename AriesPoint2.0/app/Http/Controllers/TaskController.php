<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 08.01.18
 * Time: 15:47
 */

namespace App\Http\Controllers;


use App\Task;
use Illuminate\Support\Facades\Input;
use App\Task23;


class TaskController
{
    public function index(){

        $type = Input::post('type');
        if($type=='answer') {
            $object = json_decode(Input::post('object'));
            $object->stage='answer';

            $t = Input::get('t');
            $func = 'App\Task'.$t;
            $task = new $func();
            $show = $task->answer($object);


                return view('course.tasks.t_23', ['task' => $show]);

        }elseif($type=='task') {
            $stage = Input::post('stage');
            $object = json_decode(Input::post('object'));
            $object->stage=$stage;

            $t = Input::get('t');
            $func = 'App\Task'.$t;
            $task = new $func();
            $show = $task->task($object);

            return view('course.tasks.t_23', ['task' => $show]);
        }elseif($type=='help'){
            $stage = Input::post('stage');
            $object = json_decode(Input::post('object'));
            $object->stage=$stage;

            $t = Input::get('t');
            $func = 'App\Task'.$t;
            $task = new $func();
            $show = $task->help($object);

                return view('course.tasks.t_23', ['task' => $show]);
        }elseif($type=='check'){
            $object = json_decode(Input::post('object'));
            $object->stage='check';
            $name = Input::post('nam');
            $value = Input::post('val');

            $t = Input::get('t');
            $func = 'App\Task'.$t;
            $task = new $func();
            $show = $task->check($object, $name, $value);

                return view('course.tasks.t_23', ['task' => $show]);
        }elseif($type=='control'){
            $object = json_decode(Input::post('object'));
            $object->stage='control';
            $name = Input::post('nam');
            $value = Input::post('val');

            $t = Input::get('t');
            $func = 'App\Task'.$t;
            $task = new $func();

            $show = $task->control($object, $name, $value);

                return view('course.tasks.t_23', ['task' => $show]);

        }
    }
}