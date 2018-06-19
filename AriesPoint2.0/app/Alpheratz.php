<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 26.02.18
 * Time: 20:54
 */

namespace App;


class Alpheratz extends Argument
{


    /**
     * Alpheratz constructor.
     */
    public function __construct()
    {
    }

    public function main(){
        $taskNumber = $_REQUEST['task'];
        $object = $this->operator($taskNumber);
        $show = $object['show'];
        $title = $object['title'];

    return ['show'=>$show,'title'=>$title];
}
}