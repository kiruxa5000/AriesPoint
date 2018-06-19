<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 26.01.18
 * Time: 21:58
 */

namespace App;


class TableView
{
    public $start;
    public $finish;
    public $formName;
    public $before='';
    public $TR=[];
    public $after='';

    /**
     * TableView constructor.
     */
    public function __construct()
    {
    }

    public function setForm($name, $action){
        $this->before.="<form name='{$name}' action='{$action}'>";
        $this->after.="</form>";
    }
    public function addInvisibleInput($name, $value){
        $string = "<input name='{$name}' value='{$value}' style='display: none'>";
        $this->before.=$string;
    }
//<input type=\"time\" name=\"time\" value='{$timeS}'>

    public function newForm($name, $action){
        return "<form name='{$name}' action='{$action}'>";
    }

    public function newSubmit($value){
        return "<input type='submit' value='{$value}' class='inpButton' >";
    }

    public function newInput($name, $value, $type)
    {
        switch ($type) {
            case 'deg':
            case 'deg+':
                $string = "<input type='number' name='{$name}' value='{$value}' class='inpXD' step='any'>";
                break;
            case 'dm':
            case 'dm+':
                $deg = floor($value);
                $min = round(($value - $deg)*60, 1);
                $string = "<input type='number' name='{$name}D' value='{$deg}' class='inpD'>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD' step='any'>";
                break;
            case 'm+':
                $deg = floor($value);
                $min = $value*60;
                $string = "<input type='number' name='{$name}D' value='0' class='inpD' style='display: none;'>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD' step='any'>";
                break;
            case 'lat':
                if ($value < 0) {
                    $N1 = '';
                    $N2 = 'selected';
                    $value = abs($value);
                } else {
                    $N1 = 'selected';
                    $N2 = '';
                }
                $deg = floor($value);
                $min = round(($value - $deg)*60, 1);
                $string = "<input type='number' name='{$name}D' value='{$deg}' class='inpD'>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD' step='any'>
                           <select class='inpN' name='{$name}N' >
                               <option {$N1}>N</option>
                               <option {$N2}>S</option>
                           </select>";
                break;
            case 'lng':
                if ($value < 0) {
                    $N1 = '';
                    $N2 = 'selected';
                    $value = abs($value);
                } else {
                    $N1 = 'selected';
                    $N2 = '';
                }
                $deg = floor($value);
                $min = round(($value - $deg)*60, 1);
                $string = "<input type='number' name='{$name}D' value='{$deg}' class='inpD'>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD' step='any'>
                           <select name='{$name}N' class='inpN' >
                               <option {$N1}>E</option>
                               <option {$N2}>W</option>
                           </select>";
                break;
            case 'datetime':
                $date = date('Y-m-d', $value);
                $time = date('H:i:s', $value);
                $string = "<input type='date' class='inpDate' name='date' value='{$date}'>
                           <input type='time' name='time' value='{$time}' step='1'>";
                break;
            case 'time':
                $time = date('H:i:s', $value);
                $string = "<input type='time' name='{$name}' value='{$time}' step='1'>";
                break;
            case 'hm':
                $time = date('H:i', $value);
                $string = "<input type='time' name='{$name}' value='{$time}'>";
                break;
            case 'minsec':
                $time = date('i:s', $value);
//                $time='01:01';
//                $name='ansd';
                $string = "<input type='time' name='$name' value='{$time}'>";
//                $string = "alert($name)";
                break;
            case 'text':
                $string = "<input name='{$name}' value='{$value}' class='inpText'>";
                break;
            case 'number':
                $string = "<input type='number' name='{$name}' value='{$value}' step='1' class='inpM' >";
                break;
            case 'numberM':
                $val = round($value/60,0);
                $string = "<input type='number' name='{$name}' value='{$val}' step='1' class='inpM' >";
                break;
            case 'N':
                if ($value < 0) {
                    $N1 = '';
                    $N2 = 'selected';
                    $value = abs($value);
                } else {
                    $N1 = 'selected';
                    $N2 = '';
                }
                $string = "<input type='number' name='{$name}D' value='{$value}' class='inpD'>
                           <select name='{$name}N' class='inpN' >
                               <option {$N1}>E</option>
                               <option {$N2}>W</option>
                           </select>";
                break;
            default:
                $string='';
        }
        return $string;
    }

        public function getTable(){
            $result = $this->before;
            $result.=$this->start;
            for($i=0;$i<count($this->TR);$i++){
                $result.=$this->TR[$i];
            }
            $result.=$this->finish;
            $result.=$this->after;
            return $result;
        }

        public function addTR($arr){
            $result = '<tr>';
            for($i=0;$i<count($arr);$i++){
                $result.="<td>".$arr[$i]."</td>";
            }
            $result.="</tr>";
            $this->TR[]=$result;
        }

    public function addEmptyTR(){
        $result = '<tr height="50">';

        $result.="</tr>";
        $this->TR[]=$result;
    }



}