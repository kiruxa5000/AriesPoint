<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 11.01.18
 * Time: 18:04
 */

namespace App;


class TaskTable extends Argument
{
    public $height=0;
    public $lable;
    public $formName;
    public $color;
    public $answer;
    public $names=[];
    public $object;
    public $CHAR=[
      'tt'=>'t<sub>табл</sub>',
        'dt1'=>'Δt<sub>1</sub>',
        'dt2'=>'Δt<sub>2</sub>',
        'tgr'=>'t<sub>Гр</sub>',
        'tgr0'=>'t<sub>Гр</sub>',
        'tpr'=>'t<sub>практ</sub>',
        'b0'=>'δ<sub>табл</sub>',
        'bt'=>'δ<sub>табл</sub>',
        'db'=>'Δδ',
        'b'=>'δ',
        'h'=>'h',
        'A'=>'A',
        'gkk'=>'ГКК',
        'dk'=>'ΔГК',
        'Ts'=>'Т<sub>с</sub>',
        'N'=>'N<sub>п</sub>',
        'Tgr'=>'T<sub>Гр</sub>',
        'lng'=>'λ',
        'St'=>'S<sub>табл</sub>',
        'dS'=>'ΔS',
        'Sgr'=>'S<sub>Гр</sub>',
        'Spr'=>'S<sub>практ</sub>',
        'tau'=>'τ',
        'Sm'=>'S<sub>м</sub>',
        'lat'=>'&phi;'
    ];

    public  $Ar;


    public $N;

    public static $SHOW;

    public static $ControlFormName;
    public static $ControlObject;
    public static $ControlNames=[];



public $startTable="<table height='310px' class='tableOver'>";
public $finishTable='</table>';

    public $TRs=[];

    /**
     * TableView constructor.
     * @param $height
     * @param $lable
     * @param $formName
     * @param $color
     * @param $answer
     * @param $names
     */
    public function __construct($lable, $height)
    {
        $this->height = $height;
        $this->lable = $lable;
//        $this->object = $object;
//        $this->color = $color;
//        $this->answer = $answer;
//        $this->names = $names;



    }

    public function setForm($formName, $object, $answer, $color, $N){
            $this->formName=$formName;
            $this->object=$object;
            $this->answer=$answer;
            $this->color=$color;
            $this->N=$N;
    }

    public function setForm2($formName){
            $this->formName=$formName;
    }

    public function setControlForm($formName,$object){
        self::$ControlFormName=$formName;
        self::$ControlObject=$object;
    }

    public function addTR($a){
        $TR = "<tr><td colspan='3'><p>$a</p></td></tr>";
        array_push($this->TRs,$TR);
    }

    public function checkSign($sign){
        $trClass='';
        if($sign=='+'||$sign=='-'){
            $sign="<p class='sign'>{$sign}</p>";
        }elseif ($sign=='='){
            $sign='';
            $trClass=" class = 'line'";
        }
        return ['sign'=>$sign,'line'=>$trClass];
    }

    public function addTRInputDM($a){


        if(!isset($a['sign'])){
            $a['sign']='';
        }

        $sign = $this->checkSign($a['sign']);
        $name = $a['name'];
        array_push($this->names, $name);

        if(!isset($this->answer[$name])){
            $this->answer[$name]='';
        }
        $answer=$this->answer[$name];

        if(!isset($this->color[$name])){
            $this->color[$name]='';
        }
        $color=$this->color[$name];

        if($answer>0){
            $deg = floor($answer);
            $min = round(($answer - $deg) * 60, 1);
        }else{
            $deg='';
            $min='';
        }

        if(!isset($this->formName)){
            $this->formName=self::$ControlFormName;
        }
        $td[2] = "
<input name='inp-$name' value='$deg' class='inpD inp $color' placeholder='' onblur='inp2(\"$name\", \"{$this->formName}\")'><span class='miniSign'>°</span>
<input name='inp-$name' value='$min' class='inpM inp $color' placeholder='' onblur='inp2(\"$name\", \"{$this->formName}\")'><span class='miniSign'>'</span>";

        $TR = "<tr{$sign['line']} ><td>{$this->CHAR[$name]}</td><td>{$sign['sign']}</td><td>$td[2]</td></tr>";
        array_push($this->TRs,$TR);
    }


    public function addTRInputControlDM($a){


        if(!isset($a['sign'])){
            $a['sign']='';
        }

        $sign = $this->checkSign($a['sign']);
        $name = $a['name'];
        array_push(self::$ControlNames, $name);

        if(!isset($this->formName)){
            $this->formName=self::$ControlFormName;
        }
        $formName = self::$ControlFormName;
        $td[2] = "

<input name='inp-$name'  class='inpD inp ' placeholder='' onblur='inp2(\"$name\", \"{$formName}\")'><span class='miniSign'>°</span>
<input name='inp-$name'  class='inpM inp ' placeholder='' onblur='inp2(\"$name\", \"{$formName}\")'><span class='miniSign'>'</span>";

        $TR = "<tr{$sign['line']} ><td>{$sign['sign']}</td><td>{$this->CHAR[$name]}</td><td>$td[2]</td></tr>";
        array_push($this->TRs,$TR);
    }



    public function addTRInputDateTime($a){

        if(!isset($this->object)){
            $object=self::$ControlObject;
        }else {
            $object = json_decode($this->object);
        }

        if(!isset($a['sign'])){
            $a['sign']='';
        }

        $sign = $this->checkSign($a['sign']);
        $name = $a['name'];
        array_push($this->names, $name);
        $answer=$this->answer;


            if (!isset($answer[$name])) {
                $time = date('H:i', $object->datetime);
                $date = date('Y-m-d', $object->datetime);
                $this->answer[$name] = $object->datetime;
            } elseif(isset($this->answer)) {
                $time = date('H:i', $answer[$name]);
                $date = date('Y-m-d', $answer[$name]);
//            $date = str_replace(' ','',explode(",", $answer[$name])[1]);

        }else{
            $time='';
            $date='';
        }

        if(!isset($this->color[$name])){
            $this->color[$name]='';
        }
        $color=$this->color[$name];

        if(!isset($this->formName)){
            $this->formName=self::$ControlFormName;
        }

//
//        <input type='time' style='border:1px solid {$color['tgr']}' name='inp-Tgr' value='{$time}' onblur='inp3(\"Tgr\", \"TgrForm\")'>
//        <input type='date' style='border:1px solid {$color['tgr']}' name='inp-Tgr' value='{$date}' onblur='inp3(\"Tgr\", \"TgrForm\")'>

            $td[2] = "
<input type='time' name='inp-$name' value='{$time}' class='inp $color' placeholder='' onblur='inp3(\"$name\", \"{$this->formName}\")'>
<input type='date' name='inp-$name' value='{$date}' class='inp $color' placeholder='' onblur='inp3(\"$name\", \"{$this->formName}\")'>";

        $TR = "<tr{$sign['line']} ><td>{$this->CHAR[$name]}</td><td>{$sign['sign']}</td><td>$td[2]</td></tr>";
        array_push($this->TRs,$TR);
    }


    public function addTRInputDateTime2($a){



        if(!isset($a['sign'])){
            $a['sign']='';
        }

        $sign = $this->checkSign($a['sign']);
        $name = $a['name'];
        array_push($this->names, $name);
        $answer=$this->answer;



            $time='';
            $date='';



        if(!isset($this->formName)){
            $this->formName=self::$ControlFormName;
        }

//
//        <input type='time' style='border:1px solid {$color['tgr']}' name='inp-Tgr' value='{$time}' onblur='inp3(\"Tgr\", \"TgrForm\")'>
//        <input type='date' style='border:1px solid {$color['tgr']}' name='inp-Tgr' value='{$date}' onblur='inp3(\"Tgr\", \"TgrForm\")'>

            $td[2] = "
<input type='time' name='inp-$name' value='{$time}' class='inp ' placeholder='' onblur='inp3(\"$name\", \"{$this->formName}\")'>
<input type='date' name='inp-$name' value='{$date}' class='inp ' placeholder='' onblur='inp3(\"$name\", \"{$this->formName}\")'>";

        $TR = "<tr{$sign['line']} ><td>{$this->CHAR[$name]}</td><td>{$sign['sign']}</td><td>$td[2]</td></tr>";
        array_push($this->TRs,$TR);
    }


    public function addTRInputDMN($a){
        if(!isset($a['sign'])){
            $a['sign']='';
        }


        $sign = $this->checkSign($a['sign']);
        $name = $a['name'];
        array_push($this->names, $name);

        if(!isset($this->answer[$name])) {
            $this->answer[$name] = '';
        }
        $answer=$this->answer[$name];

        if(!isset($this->color[$name])){
            $this->color[$name]='';
        }
        $color=$this->color[$name];


        if($this->N=='EW') {
            $N1Name = 'E';
            $N2Name = 'W';
        }else{
            $N1Name = 'N';
            $N2Name = 'S';
        }
            $N1 = '';
            $N2 = '';
            if ($answer < 0) {
                $N1 = 'selected';
            } else {
                $N2 = 'selected';
            }


        if(abs($answer)>0){
            $deg = floor(abs($answer));
            $min = round((abs($answer) - $deg) * 60, 1);
        }else{
            $deg='';
            $min='';
        }

        if(!isset($this->formName)){
            $this->formName=self::$ControlFormName;
        }
        $td[2] = "
<input name='inp-$name' value='$deg' class='inpD inp $color' placeholder='' onblur='inp2(\"$name\", \"{$this->formName}\")'><span class='miniSign'>°</span>
<input name='inp-$name' value='$min' class='inpM inp $color' placeholder='' onblur='inp2(\"$name\", \"{$this->formName}\")'><span class='miniSign'>'</span>
<select class='inpN $color' name='inp-tpr' onblur='inp2(\"{$name}\", \"{$this->formName}\")'>
                        <option {$N1}>{$N1Name}</option>
                        <option {$N2}>{$N2Name}</option>
                    </select>

";

        $TR = "<tr{$sign['line']}><td>{$this->CHAR[$name]}</td><td>{$sign['sign']}</td><td>$td[2]</td></tr>";
        array_push($this->TRs,$TR);
    }



    public function addTRInputD($a){


        if(!isset($a['sign'])){
            $a['sign']='';
        }
        $sign = $this->checkSign($a['sign']);

        $name = $a['name'];
        array_push($this->names, $name);

        if(!isset($this->answer[$name])){
            $this->answer[$name]='';
        }
        $answer=$this->answer[$name];

        if(!isset($this->color[$name])){
            $this->color[$name]='';
        }
        $color=$this->color[$name];

        if($answer>0){
            $deg = floor($answer);
            $min = round(($answer - $deg) * 60, 1);
        }else{
            $deg='';
            $min='';
        }

        if(!isset($this->formName)){
            $this->formName=self::$ControlFormName;
        }


        $td[2] = "
<input name='inp-$name' value='$deg' class='inpXD inp $color' placeholder='' onblur='inp2(\"$name\", \"{$this->formName}\")'><span class='miniSign'>°</span>";

        $TR = "<tr{$sign['line']} ><td>{$this->CHAR[$name]}</td><td>{$sign['sign']}</td><td>$td[2]</td></tr>";
        array_push($this->TRs,$TR);
    }

    public function getTable(){

            $table = "<table class='tableIn'>";
                if(isset($this->formName)) {
                    $table.= "<form action='' method='post' target='answer' name='{$this->formName}Form'>";
                }
            for ($r = 0; $r < count($this->TRs); $r++) {
                $table .= $this->TRs[$r];
            }
        if(isset($this->formName)) {
            $formValue='[';
            for($d=0;$d<count($this->names);$d++){
                if($d>0){
                    $formValue.=',';
                }
                $formValue.="{\"name\":\"{$this->names[$d]}\",\"value\":\"{$this->answer[$this->names[$d]]}\"}";
            }
            $formValue.=']';

            $table.= " <tr><td>" . csrf_field() . "
                    <input name='object' value='{$this->object}' style='display:none;'>
                    <input name='type' value='check' style='display:none;'>
                    <input name='nam' value='{$this->formName}' style='display:none;'>
                    
                    
                    

                    <input name='val' style='display: none;' placeholder=''  class='{$this->formName}Form' value={$formValue}>

                    <button class='okBut' type='submit'><img src='media/ok.svg' class='ok'></button></form></td></tr>";
        }
//            $table .= "</table></td></tr></table>";
            $table .= "</table>";
            return $table;

    }

    public static function makeTable($lable, $arr, $step){

        $table = "<table class='tableOver'>";
        $table .= "<tr><th>{$lable}</th></tr>";
        $table .= "<tr><td>";

        for($i=0;$i<count($arr);$i++){
            if(isset($arr[$i][$step])) {
                $table .= $arr[$i][$step];
            }
        }


        $table .= "</td></tr></table>";
        return $table;

    }


    public function addTRAnswer($a){
        if(!isset($a['sign'])){
            $a['sign']='';
        }
        $sign = $this->checkSign($a['sign']);

        $name = $a['name'];

        $values = self::$SHOW;

        $TR = "<tr{$sign['line']} ><td>{$this->CHAR[$name]}</td><td>{$sign['sign']}</td><td>{$values[$name]}</td></tr>";
        array_push($this->TRs,$TR);

    }


    public function addTRAnswer3($a){
        if(!isset($a['sign'])){
            $a['sign']='';
        }
        $sign = $this->checkSign($a['sign']);

        $value = $a['value'];

        $char = $a['char'];

        $TR = "<tr{$sign['line']} ><td>{$char}</td><td>{$sign['sign']}</td><td>{$value}</td></tr>";

        array_push($this->TRs,$TR);

    }

    public function addTRAnswer2($a){
        if(!isset($a['sign'])){
            $a['sign']='';
        }
        $sign = $this->checkSign($a['sign']);

        $name = $a['name'];

        $values = self::$SHOW;

        $TR = "<tr{$sign['line']} ><td>{$this->CHAR[$name]}</td><td>{$sign['sign']}</td><td>{$values[$name]}</td></tr>";
        array_push($this->TRs,$TR);

    }

    public function inputDM($a){
        $name = $a['name'];
        $form = $a['form'];
        $answer=$a['answer'][$a['name']];
        if($answer>0){
            $deg = floor($answer);
            $min = round(($answer - $deg) * 60, 1);
        }else{
            $deg='';
            $min='';
        }
        $result = "
        <input required name='inp-$name' value='$deg' class='inpD inp' placeholder='' onblur='inp2(\"$name\", \"$form\")'>
        <input required name='inp-$name' value='$min' class='inpM inp' placeholder='' onblur='inp2(\"$name\", \"$form\")'>";
        return $result;
    }




    public function Calc($r){

        $explode = explode('=',$r);


        for($z=0;$z<count($explode)-1;$z++){


            ///Достаем переменные
            $leftPart = explode('=',$r)[$z+0];
            $rightPart = explode('=',$r)[$z+1];

            preg_match_all('/[a-z,A-Z,0-9,_]+/', $rightPart, $res0, PREG_OFFSET_CAPTURE);
            $resultName = $res0[0][0][0];
            preg_match_all('/[a-z,A-Z,0-9,_]+/', $leftPart, $args, PREG_OFFSET_CAPTURE);
            preg_match_all('/[=,+,-]/', $leftPart, $signs, PREG_OFFSET_CAPTURE);

            //Наименования
            $names=[];
            for($i=0;$i<count($args[0]);$i++) {
                $names[]=$args[0][$i][0];
            }
            $names[]=$resultName;

            //Знаки
            $signsR=[];
            for($i=0;$i<count($signs[0]);$i++) {
                $signsR[]=$signs[0][$i][0];
            }
            $signsR[]='=';

            //Значения
            $values=[];
            $valuesS=[];
            for($i=0;$i<count($args[0]);$i++) {
                if($i>0&&$signsR[$i-1]=='-') {
                    $values[$i] = -$this->value($args[0][$i][0]);
                }else{
                    $values[$i] = $this->value($args[0][$i][0]);
                }
                $valuesS[$names[$i]] = $values[$i];
            }





           // $valuesSumm=array_sum($values);
            //$valuesSumm = $this->remakeDegree2($valuesSumm,$this->value($names[$i]));

            //$this->set($resultName,$valuesSumm);


            for($i=0;$i<count($values);$i++) {
                if($z==0||$i>0) {
                    $sign = '';
                    if ($i < count($signsR)) {
                        $sign = $signsR[$i];
                    }
                    $value = $this->showDeg($this->value($names[$i]), $this->type($names[$i]));

                    $this->addTRAnswer3(['sign' => $sign, 'value' => $value, 'char'=>$this->show($names[$i])]);
                }
            }


            $value = $this->showDeg($this->value($resultName),$this->type($resultName));
            $this->addTRAnswer3(['sign'=>'','value'=>$value, 'char'=>$this->show($resultName)]);


        }





    }

    public function remakeDegree2($d, $type)
    {
        if ($type == 'deg'||$type=='dm') {
            if ($d > 360) {
                $d = $d-360;
            } elseif ($d < 0) {
                $d = $d + 360;
            }
            return round($d,5);
        } elseif ($type=='lng') {
            $dc = abs($d);
            if ($d < 0) {
                $dn = -1;
            } else {
                $dn = 1;
            }
            if ($dc > 180) {
                $dc = 360 - $dc;
                $dn = $dn * (-1);
            }
            return round(($dc * $dn),5);
        } elseif ($type == 'lat') {
            $dc = abs($d);
            if ($d < 0) {
                $dn = -1;
            } else {
                $dn = 1;
            }
            if ($dc > 90) {
                $dc = 180 - $dc;

            }
            return round($dc * $dn,5);

        }elseif($type=='deg+'||$type=='dm+'||$type=='m+'){
            return round($d,5);
        }elseif ($type=='date'){
            return $d;
        }

    }


    public function showDeg($lat, $type)
    {
        if($type=='date'){
            return date('H:i:s, d.m.Y', $lat);
        }elseif($type=='time'){
            return date('H:i:s', $lat);
        }elseif($type=='hm'){
            return date('H:i', $lat);
        }elseif($type=='minsec'){
            return date('H:i:s', $lat);
        }elseif ($type == 'lat') {
            if ($lat > 0) {
                $name = 'N';
            } else {
                $name = 'S';
            }
        } elseif ($type == 'lng' || $type == 'N') {
            if ($lat > 0) {
                $name = 'E';
            } else {
                $name = 'W';
            }
        } else {
            $name = '';
        }


        if ($type == 'deg+'||$type == 'dm+'||$type=='m+'||$type=='numberM'){
            if ($lat > 0) {
                $p = 1;
            } else {
                $p = -1;
            }
        }

        $lat = abs($lat);
        if ($type == 'deg'||$type=='deg+') {
            $deg = round($lat, 1);
            $min = '';
        }elseif($type=='N'){
            $deg = round($lat/3600);
        } else {
            $deg = floor($lat);
        }
        $z = '';
        if ($deg < 10) {
            $z .= "0";
        }
        if (($type == 'lng' || $type == 'kk' || $type == 'dm'||$type=='deg'||$type=='deg+') && $deg < 100) {
            $z .= "0";
        }

        $deg = $z . $deg;

        $min = round(($lat - $deg) * 60, 1);

        if ($min < 10) {
            $min = '0' . $min;;
        }
        $result = '';
        if ($type == 'lat' || $type == 'lng') {
            $result = $deg . "° " . $min . "' " . $name;
        } elseif ($type == 'deg') {
            $result = $deg . "° ";
        } elseif ($type == 'deg+') {
            $result = $deg*$p . "° ";
        } elseif ($type == 'dm+') {
            $result = $deg*$p . "° ". $min . "'";
        } elseif ($type == 'm+') {
            $result = " ". $min*$p . "'";
        } elseif ($type == 'dm') {
            $result = $deg . "° " . $min . "'";
        } elseif ($type == 'N') {
            $result = $deg . " " . $name;
        } elseif ($type == 'numberM') {
            if($deg<600){
                $z='0';
            }
            if($p<0){
                $sign = '-';
            }else{
                $sign = '+';
            }
            $result = $sign." 00:".$z.round($deg/60,0) ;
        } elseif ($type == 'number') {
            $result = $deg ;
        }


        return $result;
    }



    public function TRShow($name){
        $value = $this->showDeg($this->value($name),$this->type($name));
        $this->addTRAnswer3(['sign'=>'','value'=>$value, 'char'=>$this->show($name)]);
    }

    public function NavTriangle($num)
    {
        $sLat = sin(deg2rad($this->value('lat')));
        $sB = sin(deg2rad($this->value('b_'.$num)));
        $cLat = cos(deg2rad($this->value('lat')));
        $cB = cos(deg2rad($this->value('b_'.$num)));
        $cT = cos(deg2rad($this->value('tpr_'.$num)));
        $sH = $sLat*$sB+$cLat*$cB*$cT;
        $h = rad2deg(asin($sH));
        $cH = cos(deg2rad($h));
        $cA =($sB-$sLat*$sH)/($cLat*$cH);
        $A = $this->value('Ao_'.$num);

        $s1='sin(h<sub>c</sub>)=sin(ϕ<sub>c</sub>)sin(δ<sub>с</sub>)+cos(ϕ<sub>c</sub>)cos(δ<sub>с</sub>)cos(t<sub>m</sub>)';
        $s2 = 'sin(hc)=('.round($sLat,5).')('.round($sB,5).') + ('.round($cLat,5).')('.round($cB,5).')('.round($cT,5).')';
        $s3 = "hc = ".$this->showDeg($h,'dm+');
        $s4 = "cos(A)=(sin(δ<sub>с</sub>)-sin(ϕ<sub>c</sub>)sin(h<sub>c</sub>))/(cos(ϕ<sub>c</sub>)cos(h<sub>c</sub>))";
        $s5='cos(A)=(('.round($sB,5).')-('.round($sLat,5).')('.round($sH,5).'))/(('.round($cLat,5).')('.round($cH,5).'))';
        $s6='A='.$this->showDeg($A, 'deg');

        $this->addTR($s1);
        $this->addTR($s2);
        $this->addTR($s3);
        $this->addTR($s4);
        $this->addTR($s5);
        $this->addTR($s6);


    }


}