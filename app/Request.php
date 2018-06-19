<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 02.02.18
 * Time: 20:42
 */

namespace App;
use App\Argument;
use App\Library;
class Request extends Argument
{
    public $REQUEST;

    /**
     * Request constructor.
     * @param $REQUEST
     */
    public function __construct($REQUEST)
    {
        $this->REQUEST = $REQUEST;
    }

    public function get($name, $type){


//        $type = Library::$L[$name]['type'];
        $REQUEST = $this->REQUEST;
        if($type=='date'){
            if (isset($REQUEST['date']) && isset($REQUEST['time'])) {
                $datetime = $REQUEST['date'] . " " . $REQUEST['time'];

                if(count(explode(":",$REQUEST['time']))==2){
                    $datetime.=":00";
                }
            } else {
                $datetime = '2003-02-01 12:10:12';
            }

            $format = "Y-m-d H:i:s";
            $dateobj = \DateTime::createFromFormat($format, $datetime);
            $time = $dateobj->getTimestamp();

            return $time;
        }elseif ($type=='dm'||$type=='dm+'){
            if (isset($_REQUEST[$name.'D'])) {
                $D = $_REQUEST[$name.'D'];
                $M = $_REQUEST[$name.'M'];
            } else {
                $D = 20;
                $M = 10;
            }
            return $D + $M / 60;
        }elseif ($type=='m'||$type=='m+'){
            if (isset($_REQUEST[$name.'M'])) {
                $D = 0;
                $M = $_REQUEST[$name.'M'];
            } else {
                $D = 20;
                $M = 15;
            }
//            return $D + $M / 60;
            return $M/60;
        }elseif ($type=='time'){
            if (isset($_REQUEST[$name])) {
                $time = $_REQUEST[$name];
                if(count(explode(":",$REQUEST[$name]))==2){
                    $time.=":00";
                }
            } else {
                $time = '00:00:00';
            }
            $format = "Y-m-d H:i:s";
            $dateobj = \DateTime::createFromFormat($format, "1970-1-1 " . $time);
            return $dateobj->getTimestamp();
        }elseif ($type=='hm'){
            if (isset($_REQUEST[$name])) {
                $time = $_REQUEST[$name];
                if(count(explode(":",$REQUEST[$name]))==2){
                    $time.=":00";
                }
            } else {
                $time = '00:00:00';
            }
            $format = "Y-m-d H:i:s";
            $dateobj = \DateTime::createFromFormat($format, "1970-1-1 " . $time);
            return $dateobj->getTimestamp();
        }elseif ($type=='minsec'){
            if (isset($_REQUEST[$name])) {
                $time = $_REQUEST[$name];
                if(count(explode(":",$REQUEST[$name]))==2){
                    $time="00:".$time;
//                    $time = '00:00:00';

                }
            } else {
                $time = '00:00:00';
            }
            $format = "Y-m-d H:i:s";
            $dateobj = \DateTime::createFromFormat($format, "1970-1-1 " . $time);
            return $dateobj->getTimestamp();
        }elseif ($name=='B'){
            if (isset($_REQUEST['B'])) {
                $B = $_REQUEST['B'];
            } else {
                $B = 750;
            }
            return $B;
        }elseif ($name=='V'){
            if (isset($_REQUEST[$name])) {
                $V = $_REQUEST[$name];
            } else {
                $V = 10;
            }
            return $V;
        }elseif ($name=='e'){
            if (isset($_REQUEST[$name])) {
                $e = $_REQUEST[$name];
            } else {
                $e = 15;
            }
            return $e;
        }elseif ($name=='starNum'){
            if (isset($_REQUEST[$name])) {
                $sn = $_REQUEST[$name];
            } else {
                $sn = 0;
            }
            return $sn;
        }elseif ($name=='temp'){
            if (isset($_REQUEST[$name])) {
                $temp = $_REQUEST[$name];
            } else {
                $temp = 15;
            }
            return $temp;
        }elseif ($type=='deg'||$type=='deg+'){
            if (isset($_REQUEST[$name])) {
                $deg = $_REQUEST[$name];
            } else {
                $deg = 0;
            }
            return $deg;
        }elseif ($type=='numberM'){
            if (isset($_REQUEST[$name])) {
                $deg = $_REQUEST[$name];
            } else {
                $deg = 0;
            }
            return $deg*60;
        }elseif ($type=='N'){
            if (isset($_REQUEST[$name.'D'])) {
                $N1 = $_REQUEST[$name.'D'];
                $N2 = $_REQUEST[$name.'N'];
                if($N2=='W'){
                    $N = -$N1;
                }else{
                    $N = $N1;
                }
            } else {
                $N = 0;
            }
            return $N*3600;


        }elseif ($type=='lat'){
            if (isset($_REQUEST[$name.'D'])) {
                $D = $_REQUEST[$name.'D'];
                $M = $_REQUEST[$name.'M'];
                if ($_REQUEST[$name.'N'] == 'S') {
                    return -$D-$M/60;
                }else{
                    return $D+$M/60;
                }
            }else{
                return 0;
            }
        }elseif ($type=='lng'){
            if (isset($_REQUEST[$name.'D'])) {
                $D = $_REQUEST[$name.'D'];
                $M = $_REQUEST[$name.'M'];
                if ($_REQUEST[$name.'N'] == 'W') {
                    return -$D-$M/60;
                }else{
                    return $D+$M/60;
                }
            }else{
                return 0;
            }
        }elseif ($type=='text'){
            if (isset($_REQUEST[$name])) {
                $text = $_REQUEST[$name];
            } else {
                $text = '00';
            }
            return $text;
        }
    }

}