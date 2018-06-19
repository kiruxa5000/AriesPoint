<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 04.03.18
 * Time: 9:49
 */

namespace App;


class Check extends Argument
{

    /**
     * Check constructor.
     */
    public function __construct()
    {
    }

    public function main(){

        $this->REQUEST = $_REQUEST;
        $taskId = $_REQUEST['taskId'];
        $object = $this->operator($taskId);

        $show = $object['show'];

        $check = $object['check'];
        $check = "<script>
var b= ".json_encode($check).";
window.parent.checking(b)</script>";
        return ['show'=>$check.$show,'title'=>''];
    }
}