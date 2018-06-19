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
        $this->modeTask = false;
    }

    public function main(){

        $this->REQUEST = $_REQUEST;
        $taskId = $_REQUEST['taskId'];
        $object = $this->operator($taskId);

        $show = $object['show'];

        $check = $object['check'];
        $checkJ = $object['check'];
        $all=0;
        $token='';
        $right = 0;
        foreach ($checkJ as $item){
            $token.=$item[2];
            $all++;
            if($item[1]){
                $right++;
            }
        }
        $result = $right/$all;

        $user = \Illuminate\Support\Facades\Auth::user();
        $userId = $user->id;
        $mysqli = new \mysqli("localhost", "root", "425695340", "habr");
        $mysqli->query("INSERT INTO `activity` (`userId`, `result`, `token`, `datetime`, `taskId`) VALUES ($userId,$result,'$token', NOW(), '$taskId')");



        $check = "<script>
                    var b= ".json_encode($check).";
                    window.parent.checking(b)
                    </script>";
        return ['show'=>$check.$show,'title'=>''];
    }
}