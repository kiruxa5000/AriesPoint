<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 09.01.18
 * Time: 18:13
 */

namespace App\Http\Controllers;


class HelpController
{
    public function index(){

        $object = json_decode(Input::post('object'));
        $task = new Task23();
        $show = $task->open($object);


        $t = Input::get('t');
        if($t==23){
            return view('course.tasks.t_23',['task'=>$show]);

        }
    }
}