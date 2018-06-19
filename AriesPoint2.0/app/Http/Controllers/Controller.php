<?php

namespace App\Http\Controllers;

use App\Alpheratz;
use App\Check;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function result(){

//        $object = json_decode(Input::post('object'), true);
//        $svg = Input::get('svg');

        return view('course.tasks.result');

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
        return view('check',['show'=>$show]);
    }
}

