<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 02.02.18
 * Time: 17:23
 */

namespace App;
use App\Library;

class Argument
{

    public $REQ;
    public $TRs=[];
    public $MAE;


    public $Library=[
        'Ts'=>[
            'value'=>0,
            'show'=>'Т<sub>с</sub>',
            'type'=>'date'
        ],'N'=>[
            'value'=>0,
            'show'=>'№<sub>п</sub>',
            'type'=>'N'
        ],'Tgr'=>[
            'value'=>0,
            'show'=>'Т<sub>Гр</sub>',
            'type'=>'date'
        ],'dt1'=>[
            'value'=>-1,
            'show'=>'ΔТ<sub>1</sub>',
            'type'=>'time'
        ],'dt2'=>[
            'value'=>-1,
            'show'=>'ΔТ<sub>2</sub>',
            'type'=>'time'
        ],'dt3'=>[
            'value'=>-1,
            'show'=>'ΔТ<sub>3</sub>',
            'type'=>'time'
        ],'dt4'=>[
            'value'=>-1,
            'show'=>'ΔТ<sub>4</sub>',
            'type'=>'time'
        ],'St'=>[
            'value'=>0,
            'show'=>'S<sub>табл</sub>',
            'type'=>'dm'
        ],'St2'=>[
            'value'=>0,
            'show'=>'S<sub>табл</sub>',
            'type'=>'dm'
        ],
        'dS'=>[
            'value'=>3,
            'show'=>'ΔS',
            'type'=>'dm'
        ],
        'Sgr'=>[
            'value'=>5,
            'show'=>'S<sub>Гр</sub>',
            'type'=>'dm'
        ],
        'Sm'=>[
            'value'=>5,
            'show'=>'S<sub>м</sub>',
            'type'=>'dm'
        ],
        'lng'=>[
            'value'=>170,
            'show'=>'λ',
            'type'=>'lng'
        ],
        'tau'=>[
            'value'=>5,
            'show'=>'τ',
            'type'=>'dm'
        ],
        'tm'=>[
            'value'=>5,
            'show'=>'t<sub>м</sub>',
            'type'=>'dm'
        ],
        'tgr'=>[
            'value'=>5,
            'show'=>'t<sub>Гр</sub>',
            'type'=>'dm'
        ],
        'tt'=>[
            'value'=>5,
            'show'=>'t<sub>т</sub>',
            'type'=>'dm'
        ],
        'dtt'=>[
            'value'=>5,
            'show'=>'Δt',
            'type'=>'dm'
        ],
        'dtt1'=>[
            'value'=>5,
            'show'=>'Δt<sub>1</sub>',
            'type'=>'dm'
        ],
        'dtt2'=>[
            'value'=>5,
            'show'=>'Δt<sub>2</sub>',
            'type'=>'dm'
        ],
        'dbt'=>[
            'value'=>5,
            'show'=>'Δb',
            'type'=>'dm'
        ],
        'tpr'=>[
            'value'=>5,
            'show'=>'t<sub>пр</sub>',
            'type'=>'lng'
        ],
        'b'=>[
            'value'=>5,
            'show'=>'b<sub>пр</sub>',
            'type'=>'lat'
        ],
        'h'=>[
            'value'=>5,
            'show'=>'h',
            'type'=>'dm+'
        ],
        'lat'=>[
            'value'=>5,
            'show'=>'&phi;',
            'type'=>'lat'
        ],
        'dhi'=>[
            'value'=>5,
            'show'=>'Δh<sub>i</sub>',
            'type'=>'dm+'
        ],
        'dhid'=>[
            'value'=>5,
            'show'=>'Δh<sub>i+d</sub>',
            'type'=>'m+'
        ],
        'dhd'=>[
            'value'=>5,
            'show'=>'Δh<sub>d</sub>',
            'type'=>'m+'
        ],
        'dhp'=>[
            'value'=>5,
            'show'=>'Δh<sub>p</sub>',
            'type'=>'m+'
        ],
        'dht'=>[
            'value'=>5,
            'show'=>'Δh<sub>t</sub>',
            'type'=>'m+'
        ],
        'dhb'=>[
            'value'=>5,
            'show'=>'Δh<sub>B</sub>',
            'type'=>'m+'
        ],
        'dhbt'=>[
            'value'=>5,
            'show'=>'Δh<sub>Bt</sub>',
            'type'=>'m+'
        ],
        'dhz'=>[
            'value'=>5,
            'show'=>'Δh<sub>z</sub>',
            'type'=>'m+'
        ],
        'ho'=>[
            'value'=>5,
            'show'=>'h<sub>o</sub>',
            'type'=>'dm+'
        ],
        'hs1'=>[
            'value'=>15,
            'show'=>'h<sub>c</sub>',
            'type'=>'dm+'
        ],
        'OS1'=>[
            'value'=>0,
            'show'=>'ОС<sub>1</sub>',
            'type'=>'dm+'
        ],
        'OS2'=>[
            'value'=>0,
            'show'=>'ОС<sub>2</sub>',
            'type'=>'dm+'
        ],
        'OS3'=>[
            'value'=>0,
            'show'=>'ОС<sub>3</sub>',
            'type'=>'dm+'
        ],
        'OS4'=>[
            'value'=>0,
            'show'=>'ОС<sub>4</sub>',
            'type'=>'dm+'
        ],
        'n'=>[
            'value'=>5,
            'show'=>'n',
            'type'=>'dm+'
        ],
        'Oisr'=>[
            'value'=>0,
            'show'=>'O<sub>iср</sub>',
            'type'=>'dm'
        ],
        'Tstart'=>[
            'value'=>0,
            'show'=>'T<sub>ст</sub>',
            'type'=>'time'
        ],
        'PU'=>[
            'value'=>0,
            'show'=>'ПУ',
            'type'=>'deg'
        ],
        'V'=>[
            'value'=>0,
            'show'=>'V',
            'type'=>'deg'
        ],
        'e'=>[
            'value'=>0,
            'show'=>'e',
            'type'=>'deg'
        ],
        'B'=>[
            'value'=>0,
            'show'=>'B',
            'type'=>'deg'
        ],'temp'=>[
            'value'=>0,
            'show'=>'t',
            'type'=>'deg'
        ],'star1Num'=>[
            'value'=>0,
            'show'=>'t',
            'type'=>'deg'
        ],'star2Num'=>[
            'value'=>0,
            'show'=>'t',
            'type'=>'deg'
        ],'star3Num'=>[
            'value'=>0,
            'show'=>'t',
            'type'=>'deg'
        ],'star4Num'=>[
            'value'=>0,
            'show'=>'t',
            'type'=>'deg'
        ],'tau1'=>[
            'value'=>0,
            'show'=>'τ<sub>1</sub>',
            'type'=>'dm'
        ],'tau2'=>[
            'value'=>0,
            'show'=>'τ<sub>2</sub>',
            'type'=>'dm'
        ],'tau3'=>[
            'value'=>0,
            'show'=>'τ<sub>3</sub>',
            'type'=>'dm'
        ],'tau4'=>[
            'value'=>0,
            'show'=>'τ<sub>4</sub>',
            'type'=>'dm'
        ],'b1'=>[
            'value'=>0,
            'show'=>'&delta;<sub>1</sub>',
            'type'=>'dm'
        ],'b2'=>[
            'value'=>0,
            'show'=>'&delta;<sub>2</sub>',
            'type'=>'dm'
        ],'b3'=>[
            'value'=>0,
            'show'=>'&delta;<sub>3</sub>',
            'type'=>'dm'
        ],'b4'=>[
            'value'=>0,
            'show'=>'&delta;<sub>4</sub>',
            'type'=>'dm'
        ],'A1'=>[
            'value'=>0,
            'show'=>'A<sub>1</sub>',
            'type'=>'deg'
        ],'A2'=>[
            'value'=>0,
            'show'=>'A<sub>2</sub>',
            'type'=>'deg'
        ],'A3'=>[
            'value'=>0,
            'show'=>'A<sub>3</sub>',
            'type'=>'deg'
        ],'A4'=>[
            'value'=>0,
            'show'=>'A<sub>4</sub>',
            'type'=>'deg'
        ],'ho1'=>[
            'value'=>0,
            'show'=>'ho<sub>1</sub>',
            'type'=>'dm'
        ],'ho2'=>[
            'value'=>0,
            'show'=>'ho<sub>2</sub>',
            'type'=>'dm'
        ],'ho3'=>[
            'value'=>0,
            'show'=>'ho<sub>3</sub>',
            'type'=>'dm'
        ],'ho4'=>[
            'value'=>0,
            'show'=>'ho<sub>4</sub>',
            'type'=>'dm'
        ],'hc1'=>[
            'value'=>0,
            'show'=>'hc<sub>1</sub>',
            'type'=>'dm'
        ],'hc2'=>[
            'value'=>0,
            'show'=>'hc<sub>2</sub>',
            'type'=>'dm'
        ],'hc3'=>[
            'value'=>0,
            'show'=>'hc<sub>3</sub>',
            'type'=>'dm'
        ],'hc4'=>[
            'value'=>0,
            'show'=>'hc<sub>4</sub>',
            'type'=>'dm'
        ],'n1'=>[
            'value'=>0,
            'show'=>'n<sub>1</sub>',
            'type'=>'dm+'
        ],'n2'=>[
            'value'=>0,
            'show'=>'n<sub>2</sub>',
            'type'=>'dm+'
        ],'n3'=>[
            'value'=>0,
            'show'=>'n<sub>3</sub>',
            'type'=>'dm+'
        ],'n4'=>[
            'value'=>0,
            'show'=>'n<sub>4</sub>',
            'type'=>'dm+'
        ],'Tgr1'=>[
            'value'=>0,
            'show'=>'T<sub>Гр1</sub>',
            'type'=>'date'
        ],'Tgr2'=>[
            'value'=>0,
            'show'=>'T<sub>Гр2</sub>',
            'type'=>'date'
        ],'Tgr3'=>[
            'value'=>0,
            'show'=>'T<sub>Гр3</sub>',
            'type'=>'date'
        ],'Tgr4'=>[
            'value'=>0,
            'show'=>'T<sub>Гр4</sub>',
            'type'=>'date'
        ],'dlat'=>[
            'value'=>0,
            'show'=>'Δ&phi;',
            'type'=>'m+'
        ],'lato'=>[
            'value'=>0,
            'show'=>'&phi;<sub>o</sub>',
            'type'=>'lat'
        ],'domega'=>[
            'value'=>0,
            'show'=>'Δ&omega;',
            'type'=>'m+'
        ],'dlng'=>[
            'value'=>0,
            'show'=>'Δ&lambda;',
            'type'=>'m+'
        ],'lngo'=>[
            'value'=>0,
            'show'=>'&lambda;<sub>o</sub>',
            'type'=>'lng'
        ],'P0'=>[
            'value'=>0,
            'show'=>'P<sub>0</sub>',
            'type'=>'deg'
        ]

    ];

    public $Args=[];

    public $formName;
    public $names=[];

    public $name;
    public $value;
    public $show;
    public $type;
    public $REQUEST;

    /**
     * Argument constructor.
     * @param $name
     * @param $valume
     * @param $show
     * @param $type
     */
    public function __construct()
    {
    }
    public static function open($Arg){
        $Ar = new Argument();
        $Ar->Args=$Arg;
        return $Ar;
    }

    public function set($name, $value){
        if(!isset($this->Args[$name])) {
            if(!isset(Library::$L[$name])){
                $name1=explode('_',$name)[0];

                if(isset(Library::$L[$name1])){
                    $this->Args[$name]=Library::$L[$name1];
                }
            }else {
                $this->Args[$name] = Library::$L[$name];
            }
        }
            $this->Args[$name]['value']=$value;
    }

    public function show($name){
        return $this->Args[$name]['show'];
    }
    public function value($name){
        return $this->Args[$name]['value'];
    }
    public function search($name){
        if(isset($this->Args[$name])){
            return true;
        }else{
            return false;
        }
    }
    public function type($name){
        if(isset($this->Args[$name])) {
            return $this->Args[$name]['type'];
        }else{
            if(!isset(Library::$L[$name])){
                $name1=explode('_',$name)[0];

                if(isset(Library::$L[$name1])){
                    return Library::$L[$name1]['type'];
                }
            }else {
                return Library::$L[$name]['type'];
            }

        }
    }

    public function setR($name){
        if(!isset($this->Args[$name])) {
            if(!isset(Library::$L[$name])){
                $name1=explode('_',$name)[0];

                if(isset(Library::$L[$name1])){
                    $this->Args[$name]=Library::$L[$name1];
                }
            }else {
                $this->Args[$name] = Library::$L[$name];
            }
        }
        $type = $this->Args[$name]['type'];
        $this->set($name,$this->REQ->get($name,$type));
    }

    public function add($name){
        $this->Args[$name]=Library::$L[$name];
    }

    public $SIG=[];

    public function Calc($r){

        $explode = explode('=',$r);

        $q = count($explode);

//        $condition=false;
//        $g=0;
//        while (!$condition) {

            for ($z = 0; $z < count($explode) - 1; $z++) {

                ///Достаем переменные
                $leftPart = explode('=', $r)[$z + 0];
                $rightPart = explode('=', $r)[$z + 1];

                preg_match_all('/[a-z,A-Z,0-9,_]+/', $rightPart, $res0, PREG_OFFSET_CAPTURE);
                $resultName = $res0[0][0][0];
                preg_match_all('/[a-z,A-Z,0-9,_]+/', $leftPart, $args, PREG_OFFSET_CAPTURE);
                preg_match_all('/[=,+,-]/', $leftPart, $signs, PREG_OFFSET_CAPTURE);

                //Наименования
                $names = [];
                for ($i = 0; $i < count($args[0]); $i++) {
                    $names[] = $args[0][$i][0];
                }
                $names[] = $resultName;

                //Знаки
                $signsR = [];
                for ($i = 0; $i < count($signs[0]); $i++) {
                    $signsR[] = $signs[0][$i][0];
                }
                $signsR[] = '=';

                //Значения
                $values = [];
                $valuesS = [];

                $name = $args[0][$i][0];
                for ($i = 0; $i < count($args[0]); $i++) {
                    $array = json_decode($this->taskSQL[$this->taskId]['consts']);
                    if (array_search($names[$i], $array) > -1) {
                        $this->getR($names[$i], false);
                    }
//                if(array_search($names[$i],json_decode($this->taskSQL[$this->taskId]['consts']))>-1&&!$this->getR($names[$i], false)) {
                    if (!$this->search($names[$i])) {
                        $this->randoMAE($names[$i]);
                    }
//                }
                    if ($i > 0 && $signsR[$i - 1] == '-') {
                        $values[$i] = -$this->value($names[$i]);
                    } else {
                        $values[$i] = $this->value($names[$i]);
                    }
                    $valuesS[$names[$i]] = $values[$i];
                }
                $valuesSumm = array_sum($values);
                $valuesSumm = $this->remakeDegree2($valuesSumm, $this->type($resultName));

                $this->set($resultName, $valuesSumm);


                for ($i = 0; $i < count($values); $i++) {
                    if ($z != $q || $i > 0) {
                        $sign = '';
                        if ($i < count($signsR)) {
                            $sign = $signsR[$i];
                        }
                        $this->addTRAnswer3(['sign' => $sign, 'name' => $names[$i]]);
                    }
                }


                $value = $this->showValue($resultName);

                if ($z == $q-2) {
                    $this->addTRAnswer3(['sign' => '', 'name' => $resultName]);
                }

            }


    }

    public $TRNames=[];

    public function addTRAnswer3($a){
        array_push($this->TRNames, ['name'=>$a['name'], 'sign'=>$a['sign']]);
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
        }elseif ($type=='hm'){
            return $d;
        }elseif ($type=='is'){
            return $d;
        }elseif ($type=='numberM'){
            return $d;
        }elseif ($type=='number'){
            return $d;
        }

    }



    public function NavTriangle($num){

        $sLat = sin(deg2rad($this->value('lat')));
        $sB = sin(deg2rad($this->value('b_'.$num)));
        $cLat = cos(deg2rad($this->value('lat')));
        $cB = cos(deg2rad($this->value('b_'.$num)));
        $cT = cos(deg2rad($this->value('tpr_'.$num)));
        $sH = $sLat*$sB+$cLat*$cB*$cT;
        $h = rad2deg(asin($sH));
        $cH = cos(deg2rad($h));
        $cA =($sB-$sLat*$sH)/($cLat*$cH);
        $A = round(rad2deg(acos($cA)),1);

        $this->set('ho_'.$num,$h);


        if ($this->value('tpr_'.$num)<0){
            $A=360-$A;
        }
        $A=$this->remakeDegree2($A, 'deg');

        $this->set('Ao_'.$num,$A);
    }



    public function showValue($name)
    {
        $type = $this->type($name);
        $lat = $this->value($name);
        if($lat===''){
            return ' ';
        }
        if($type=='date'){
            return date('H:i:s, d.m.Y', $lat);
        }elseif($type=='time'){
            return date('H:i:s', $lat);
        }elseif($type=='hm'){
            return date('H:i', $lat);
        }elseif($type=='minsec'){
            return "00:".date('i:s', $lat);
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


        if ($type == 'deg+'||$type == 'dm+'||$type=='m+'||$type=='numberM') {
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
        }


        return $result;
    }



    public function checkSign($sign){
        $trClass='';
        if($sign=='+'||$sign=='-'){
            $sign="<p class='sign'>{$sign}</p>";
        }elseif ($sign=='='){
            $sign='';
            $trClass="line";
        }elseif ($sign=='|'){
            $sign='';
            $trClass='justShow';
        }elseif ($sign=='||'){
            $sign='';
            $trClass='stopLine';
        }
        return ['sign'=>$sign,'line'=>$trClass];
    }


    public function getTable(){

        $table = "<table class='tableIn tableConst'><tr>";

        $td=0;

        for ($r = 0; $r < count($this->TRNames); $r++) {
            if($td>2){
                $td=0;
                $table.="</tr><tr>";
            }
            $td++;

            $char = $this->show($this->TRNames[$r]['name']);
            $value = $this->showValue($this->TRNames[$r]['name']);
            $table .= "<td>{$char}</td><td>{$value}</td>";
        }
        $table .= "</tr></table><br><br>";



        return $table;

    }

    public function random($name){
        $randomArr = Library::$L[$name]['random'];
        $i=rand(0,count($randomArr)-1);
        $value = rand($randomArr[$i][0], $randomArr[$i][1]);
        if($this->type($name)=='N'){
            $value=$value*3600;
        }
        $this->set($name, $value);
//        $this->set($name, 123123123);
    }

    public function check($name){
        $result = $this->value($name)-$this->getR($name, true);
        $delta = 0;
        switch ($this->type($name)){
            case 'deg':
            case 'dm':
            case 'dm+':
            case 'm+':
            case 'm':
            case 'lat':
            case 'lng':
                $delta=0.1;
                break;
            case 'hm':
                $delta = 2;
                $time1 = date('h', $this->value($name))*60+date('i', $this->value($name));
                $time2 = date('h', $this->getR($name, true))*60+date('i', $this->getR($name, true));
                $result = $time1-$time2;
                break;
            case 'numberM':
                $delta=1;
                    $result = $result/60;

        }

        if(abs($result)<=$delta){
            return [true,$this->value($name)." -- ".$this->getR($name, true)];
        }else{
            return [false,$this->value($name)." -- ".$this->getR($name, true)];
        }
    }


public function makeQuest($values){
    $table = "<table class='tableIn tableTask'><form action='Check' target='Check'>".csrf_field()."<input name='taskId' value='{$this->taskId}' style='display: none;'>";

    $answers=[];
    for ($r = 0; $r < count($this->TRNames); $r++) {
        if(array_search($this->TRNames[$r]['name'], $values)>-1) {
            $table .= $this->newInput($this->TRNames[$r]['name'],false, $this->TRNames[$r]['sign']);
        }else{
            $table.=$this->newInput($this->TRNames[$r]['name'],true,$this->TRNames[$r]['sign']);
            $answers[]=[$this->TRNames[$r]['name'], $this->check($this->TRNames[$r]['name'])[0], $this->check($this->TRNames[$r]['name'])[1]];
        }

    }
    for($i=0;$i<count($this->invNames);$i++){
        $table.=$this->addInvisible($this->invNames[$i]['name']);
    }
    $table .= "<tr><td colspan='4' style='border-right: none'><input type='submit' class='inpButton' value='Проверить'></td></tr></form></table>";


    return [$table, $answers];

}


public $Answers=[];

    public function newInput($name, $changed, $sign)
    {
//
        if($sign=='||') {
            return "<tr class = 'stopLine'><td></td><td></td><td class='inputs'></td><td></td></tr>";
        }
        if($changed){
            $chan = '';
            $chanClass='';
        }else{
            $chan = 'readonly';
            $chanClass = 'const';
        }
        $type = $this->type($name);
        $value = $this->value($name);
        switch ($type) {
            case 'deg':
            case 'deg+':
                $value = round($value, 1);
                $string = "<input type='number' name='{$name}' value='{$value}' class='inpXD {$chanClass}' step='any' $chan>";
                break;
            case 'dm':
            case 'dm+':
                $deg = floor($value);
                $min = round(($value - $deg)*60, 1);
                $string = "<input type='number' name='{$name}D' value='{$deg}' class='inpD {$chanClass}'  $chan>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD {$chanClass}' step='any' $chan>";
                break;
            case 'm+':
                $deg = floor($value);
                $min = $value*60;
                $string = "<input type='number' name='{$name}D' value='0' class='inpD ' style='display: none;'  $chan>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD {$chanClass}' step='any' $chan>";
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
                $string = "<input type='number' name='{$name}D' value='{$deg}' class='inpD {$chanClass}' $chan>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD {$chanClass}' step='any' $chan>
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
                $string = "<input type='number' name='{$name}D' value='{$deg}' class='inpD {$chanClass}' $chan>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD {$chanClass}' step='any' $chan>
                           <select name='{$name}N' class='inpN' >
                               <option {$N1}>E</option>
                               <option {$N2}>W</option>
                           </select>";
                break;
            case 'date':
                $date = date('Y-m-d', $value);
                $time = date('H:i:s', $value);
                $string = "<input type='time' name='{$name}time' value='{$time}' step='1' class='{$chanClass}' $chan>
                            <input type='date' class='inpDate {$chanClass}' name='{$name}date' value='{$date}' $chan>
                           ";
                break;
            case 'time':
                $time = date('H:i:s', $value);
                $string = "<input type='time' name='{$name}' value='{$time}' step='1' class='{$chanClass}' $chan>";
                break;
            case 'hm':
                $time = date('H:i', $value);
                $string = "<input type='time' name='{$name}' value='{$time}' class='{$chanClass}' $chan>";
                break;
            case 'minsec':
                $time = date('i:s', $value);
//                $time='01:01';
//                $name='ansd';
                $string = "<input type='time' name='$name' value='{$time}' class=' {$chanClass}' $chan>";
//                $string = "alert($name)";
                break;
            case 'text':
                $string = "<input name='{$name}' value='{$value}' class='inpText {$chanClass}' $chan>";
                break;
            case 'number':
                $string = "<input type='number' name='{$name}' value='{$value}' step='1' class='inpM {$chanClass}'  $chan>";
                break;
            case 'numberM':
                $val = round($value/60,0);
                $string = "<input type='number' name='{$name}' value='{$val}' step='1' class='inpM {$chanClass}'  $chan>";
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
                $value=$value/3600;
                $string = "<input type='number' name='{$name}D' value='{$value}' class='inpD {$chanClass}' $chan>
                           <select name='{$name}N' class='inpN' >
                               <option {$N1}>E</option>
                               <option {$N2}>W</option>
                           </select>";
                break;
            default:
                $string='';
        }

        $sign = $this->checkSign($sign);
//
//        $TR = "<tr{$sign['line']} ><td>{$value}</td><td>{$sign['sign']}</td><td>{$value}</td></tr>";
        array_push($this->Answers, $name);
        return "<tr class = 'Inp_$name {$sign['line']}'><td>{$this->show($name)}</td><td>{$sign['sign']}</td><td class='inputs'>".$string."</td><td></td></tr>";
    }

    public function addInvisible($name){

            $chan = 'readonly';
            $chanClass = 'const';

        $type = $this->type($name);
        $value = $this->value($name);
        switch ($type) {
            case 'deg':
            case 'deg+':
                $string = "<input type='number' name='{$name}' value='{$value}' class='inpXD {$chanClass}' step='any' $chan>";
                break;
            case 'dm':
            case 'dm+':
                $deg = floor($value);
                $min = round(($value - $deg)*60, 1);
                $string = "<input type='number' name='{$name}D' value='{$deg}' class='inpD {$chanClass}'  $chan>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD {$chanClass}' step='any' $chan>";
                break;
            case 'm+':
                $deg = floor($value);
                $min = $value*60;
                $string = "<input type='number' name='{$name}D' value='0' class='inpD ' style='display: none;'  $chan>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD {$chanClass}' step='any' $chan>";
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
                $string = "<input type='number' name='{$name}D' value='{$deg}' class='inpD {$chanClass}' $chan>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD {$chanClass}' step='any' $chan>
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
                $string = "<input type='number' name='{$name}D' value='{$deg}' class='inpD {$chanClass}' $chan>
                           <input type='number' name='{$name}M' value='{$min}' class='inpD {$chanClass}' step='any' $chan>
                           <select name='{$name}N' class='inpN' >
                               <option {$N1}>E</option>
                               <option {$N2}>W</option>
                           </select>";
                break;
            case 'date':
                $date = date('Y-m-d', $value);
                $time = date('H:i:s', $value);
                $string = "<input type='time' name='{$name}time' value='{$time}' step='1' class='{$chanClass}' $chan>
                            <input type='date' class='inpDate {$chanClass}' name='{$name}date' value='{$date}' $chan>
                           ";
                break;
            case 'time':
                $time = date('H:i:s', $value);
                $string = "<input type='time' name='{$name}' value='{$time}' step='1' class='{$chanClass}' $chan>";
                break;
            case 'hm':
                $time = date('H:i', $value);
                $string = "<input type='time' name='{$name}' value='{$time}' class='{$chanClass}' $chan>";
                break;
            case 'minsec':
                $time = date('i:s', $value);
//                $time='01:01';
//                $name='ansd';
                $string = "<input type='time' name='$name' value='{$time}' class=' {$chanClass}' $chan>";
//                $string = "alert($name)";
                break;
            case 'text':
                $string = "<input name='{$name}' value='{$value}' class='inpText {$chanClass}' $chan>";
                break;
            case 'number':
                $string = "<input type='number' name='{$name}' value='{$value}' step='1' class='inpM {$chanClass}'  $chan>";
                break;
            case 'numberM':
                $val = round($value/60,0);
                $string = "<input type='number' name='{$name}' value='{$val}' step='1' class='inpM {$chanClass}'  $chan>";
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
                $string = "<input type='number' name='{$name}D' value='{$value}' class='inpD {$chanClass}' $chan>
                           <select name='{$name}N' class='inpN' >
                               <option {$N1}>E</option>
                               <option {$N2}>W</option>
                           </select>";
                break;
            default:
                $string='';
        }
        $value = $this->value($name);
        return "<tr style='display: none;' class = 'Inp_$name'><td></td><td></td><td class='inputs'>".$string."</td><td></td></tr>";
    }

    public function getAnswers(){
        $script = '<script>';
        for($i=0;$i<count($this->Answers);$i++) {
            $name = $this->Answers[$i];
            $value = $this->value($this->Answers[$i]);
            $script.= "Answer['$name']='$value';";
        }
        return $script."</script>";
    }


    public function setFromMAE($name){
        $this->set($name, $this->MAE->Args[$this->Args[$name]['MAE']]);
    }

    public function randoMAE($name)
    {
        $name2=$name;
        if (!isset(Library::$L[$name])) {
            if(strripos($name, '_')) {
                $name2 = explode('_', $name)[0];
                }
        }

             if (isset(Library::$L[$name2]['MAE'])&&isset($this->MAE)) {
                $MAEName = Library::$L[$name2]['MAE'];
                $this->set($name, $this->MAE->Args[$MAEName]);
            }elseif (isset(Library::$L[$name2]['random'])) {

                $randomArr = Library::$L[$name2]['random'];
                $i = rand(0, count($randomArr) - 1);
                $value = rand($randomArr[$i][0], $randomArr[$i][1]);
                switch ($this->type($name2)){
                    case 'N':
                        if($this->search('lng')){
                            $value = round($this->value('lng')/15,0)+rand(-1,1);
                        }
                        $value = round($value * 3600,0);
                        break;
                    case 'dm':
                    case 'dm+':
                    case 'lat':
                        $value = $value/100;
                        break;
                    case 'lng':
                        if($this->search('N')){
                            $value = $this->value('N')*15/3600+rand(-1500,1500)/100;
                        }else{
                            $value = $value/100;
                        }
                        break;
                    default;
                }
//                if ($this->type($name2) == 'N') {
//
//                }
                $this->set($name, $value);
            }else {
                        $this->set($name, 5);
                    }


            }


    public function justShow($name){
        if(strripos($name,'||')>-1){
            $sign='||';
            $name = str_replace('|','',$name);
            $this->TRNames[] = ['name' => $name, 'sign' => $sign];
        }else {

            if (strripos($name, '|') > -1) {
                $sign = '|';
                $name = str_replace('|', '', $name);

            } else {
                $sign = '';
            }

            $array = json_decode($this->taskSQL[$this->taskId]['consts']);
            if (array_search($name, $array) > -1) {
                $this->getR($name, false);
            }
            if (!$this->search($name)) {
                $this->randoMAE($name);
            }
            $show = $this->show($name);
            $value = $this->showValue($name);
            $result = "<tr class='justShow'><td>$show</td><td></td><td>$value</td></tr>";
            $this->TRs[] = $result;
            $this->TRNames[] = ['name' => $name, 'sign' => $sign];
        }
    }



    public function getR($name, $result){


        $type = $this->type($name);
        $REQUEST = $this->REQUEST;



        if($type=='date'){
            if (isset($REQUEST[$name.'date']) && isset($REQUEST[$name.'time'])) {
                $datetime = $REQUEST[$name.'date'] . " " . $REQUEST[$name.'time'];

                if(count(explode(":",$REQUEST[$name.'time']))==2){
                    $datetime.=":00";
                }
            } else {
                return false;
            }

            $format = "Y-m-d H:i:s";
            $dateobj = \DateTime::createFromFormat($format, $datetime);
            $time = $dateobj->getTimestamp();

            $value = $time;
        }elseif ($type=='dm'||$type=='dm+'){
            if (isset($_REQUEST[$name.'D'])) {
                $D = $_REQUEST[$name.'D'];
                $M = $_REQUEST[$name.'M'];
            } else {
                return false;
            }
            $value = round($D + $M / 60,3);
        }elseif ($type=='m'||$type=='m+'){
            if (isset($_REQUEST[$name.'M'])) {
                $D = 0;
                $M = $_REQUEST[$name.'M'];
            } else {
                return false;
            }
            $value = round($M/60,3);

        }elseif ($type=='time'){
            if (isset($_REQUEST[$name])) {
                $time = $_REQUEST[$name];
                if(count(explode(":",$REQUEST[$name]))==2){
                    $time.=":00";
                }
            } else {
                return false;
            }
            $format = "Y-m-d H:i:s";
            $dateobj = \DateTime::createFromFormat($format, "1970-1-1 " . $time);
            $value = $dateobj->getTimestamp();

        }elseif ($type=='hm'){
            if (isset($_REQUEST[$name])) {
                $time = $_REQUEST[$name];
                if(count(explode(":",$REQUEST[$name]))==2){
                    $time.=":00";
                }
            } else {
                return false;
            }
            $format = "Y-m-d H:i:s";
            $dateobj = \DateTime::createFromFormat($format, "1970-1-1 " . $time);
            $value = $dateobj->getTimestamp();

        }elseif ($type=='minsec'){
            if (isset($_REQUEST[$name])) {
                $time = $_REQUEST[$name];
                if(count(explode(":",$REQUEST[$name]))==2){
                    $time="00:".$time;
//                    $time = '00:00:00';

                }
            } else {
                return false;
            }
            $format = "Y-m-d H:i:s";
            $dateobj = \DateTime::createFromFormat($format, "1970-1-1 " . $time);
            $value = $dateobj->getTimestamp();

        }elseif ($name=='B'){
            if (isset($_REQUEST['B'])) {
                $B = $_REQUEST['B'];
            } else {
                return false;
            }
            $value = $B;

        }elseif ($name=='V'){
            if (isset($_REQUEST[$name])) {
                $V = $_REQUEST[$name];
            } else {
                return false;
            }
            $value =  $V;

        }elseif ($name=='e'){
            if (isset($_REQUEST[$name])) {
                $e = $_REQUEST[$name];
            } else {
                return false;
            }
            $value = $e;

        }elseif ($name=='starNum'){
            if (isset($_REQUEST[$name])) {
                $sn = $_REQUEST[$name];
            } else {
                return false;
            }
            $value = $sn;

        }elseif ($name=='temp'){
            if (isset($_REQUEST[$name])) {
                $temp = $_REQUEST[$name];
            } else {
                return false;
            }
            $value = $temp;

        }elseif ($type=='deg'||$type=='deg+'){
            if (isset($_REQUEST[$name])) {
                $deg = $_REQUEST[$name];
            } else {
                return false;
            }
            $value = round($deg,1);

        }elseif ($type=='numberM'){
            if (isset($_REQUEST[$name])) {
                $deg = $_REQUEST[$name];
            } else {
                return false;
            }
            $value = round($deg*60,3);

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
                return false;
            }
            $value = round($N,0);



        }elseif ($type=='lat'){
            if (isset($_REQUEST[$name.'D'])) {
                $D = $_REQUEST[$name.'D'];
                $M = $_REQUEST[$name.'M'];
                if ($_REQUEST[$name.'N'] == 'S') {
                    $value =round(-$D-$M/60,3);
                }else{
                    $value = round($D+$M/60,3);
                }
            }else{
                return false;
            }

        }elseif ($type=='lng'){
            if (isset($_REQUEST[$name.'D'])) {
                $D = $_REQUEST[$name.'D'];
                $M = $_REQUEST[$name.'M'];
                if ($_REQUEST[$name.'N'] == 'W') {
                    $value = round(-$D-$M/60,3);
                }else{
                    $value = round($D+$M/60,3);
                }
            }else{
                return false;
            }

        }elseif ($type=='text'){
            if (isset($_REQUEST[$name])) {
                $text = $_REQUEST[$name];
            } else {
                return false;
            }
            $value = $text;
        }else{
            return false;
        }



        if($result){
            return $value;
        }else {
            $this->set($name, $value);
            return true;
        }
    }





    public function tmW_tmE(){
        if($this->value('tmW')>180){
            $this->set('tmE', (360-$this->value('tmW')));
            $this->justShow('tmE');
        }
    }

    public function makeMAE(){
//        $time = $this->value('Tgr');
        $this->MAE = new MAE($this->value('Tgr'));
    }
    public function getMAEdH(){
//        $time = $this->value('Tgr');
    }

    public $correction;

    public function makeCorrection(){
        $this->correction = new Corrections($this->value('Oisr'), $this->value('e'));
    }

    public $taskId;

    public function makedGKK($A){
        $this->set('GKK',$A+round(rand(-30,30)/10,1));

    }

    public $taskSQL=[
        'get_tb'=>['task'=>'Tstart+dT=Tgr&&%makeMAE&&St+dS=Sgr+lng=Sm+tau=tmW&&%tmW_tmE&&|b',
            'consts'=>'["Tstart","dT", "lng", "tau"]',
            'title'=>'Определение координат светила',
            'first'=>'task'
            ],
        'get_ho'=>['task'=>'%getCorrections(OS)&&OS+dhi+dhd=hv+dhp+dhbt=hdop+dhz=ho',
            'consts'=>'["OS","PU", "V", "e", "B", "temp", "Oisr", "Ao", "Tgr", "Tgr_1"]',
            'title'=>'Определение обсервованной широты и переноса ВЛП',
            'first'=>'consts'],
        'get_hA'=>['task'=>'tpr_1&&b_1&&lat&&%NavTriangle(1)&&ho_1&&%makedGKK(Ao_1)&&Ao_1-GKK=dGKK',
            'consts'=>'["tpr_1", "b_1", "lat", "GKK"]',
            'title'=>'Решение параллактического треугольника, определение поправки ГКК',
            'first'=>'task',
            'condition'=>['ho_1>0']

        ],
        'get_T'=>['task'=>'Ts-N=Tgr',
            'consts'=>'["Ts", "N"]',
            'title'=>'Определение времени на меридиане Гринвича',
            'first'=>'task'
        ],
        'get_tb_P'=>['task'=>'Ts+dT=Tgr&&%makeMAE&&tt+dt1+dt2=tgr+lng=tmW&&%tmW_tmE&&|b',
            'consts'=>'["Ts","dT", "lng"]',
            'title'=>'Определение координат светила',
            'first'=>'task'
        ],
        'get_tvzk'=>['task'=>'%getTkTv&&%getlngH&&Tkm-lngH=Tkgr+N=Tks&&||N&&Tvzt1+Tvzdlat=Tvzm-lngH=Tvzgr+N=Tvzs',
            'consts'=>'["Tgr0", "lng", "N", "lat0"]',
            'title'=>'Определение времени восх/зах и кульминации',
            'first'=>'consts'
        ],
        'OMS'=>['task'=>'%makeVLP&&%OMS',
            'consts'=>'["Ao_1", "Ao_2","Ao_3", "Ao_4", "n_1", "n_2","n_3", "n_4", "lat", "lng"]',
            'title'=>'Определение времени восх/зах и кульминации',
            'first'=>'task'
        ]
    ];
    public $taskTitle;

    public function makeVLP(){
//        $SQ = rand(3,4);
//        $this->set('SQ', $SQ);
//        for($i=1;$i<=$SQ;$i++){
//            $this->set('Ao_'.$i, rand(10,3590)/10);
//            $this->set('n_'.$i, rand(10,50)/10);
//        }
//        $this->taskSQL['OMS']['consts'] = '["Ao_1", "Ao_2","Ao_3", "Ao_4", "ho_1", "ho_2","ho_3", "ho_4"]';

        $SQ = 4;
        $this->set('SQ', $SQ);
        $As = [45,145,235,315];
        $ns = [5,5,5,5];

        for($i=1;$i<=$SQ;$i++){
            $this->set('Ao_'.$i, $As[$i-1]+rand(-10,10));
            $this->set('n_'.$i, rand(30,50)/10);
        }

    }

    public function getTkTv(){
        $this->MAE = new MAE($this->value('Tgr0'));
        $this->MAE->getTv($this->value('lat0'));
    }

    public function getlngH(){
        $this->set('lngH', abs($this->value('lng')/15*3600));
}

    public $invNames = [];

    public function operator($taskId)
    {

        $taskTitle = $this->taskSQL[$taskId]['title'];
        $this->taskId = $taskId;
        $first = $this->taskSQL[$taskId]['first'];

        $task = $this->taskSQL[$taskId]['task'];
        $consts = json_decode($this->taskSQL[$taskId]['consts']);

        $g=0;
        $cond = false;
        while (!$cond) {

        if ($first === 'consts') {
            for ($f = 0; $f < count($consts); $f++) {
                $this->justShow($consts[$f]);
            }
        }

        $constTable = $this->getTable();
        $show = '';
        $this->invNames = $this->TRNames;

        $this->TRNames = [];
        $check = [];


        $tasks = explode("&&", $task);

        for ($i = 0; $i < count($tasks); $i++) {
            if (strripos($tasks[$i], '=') > -1) {
                $this->Calc($tasks[$i]);
            } elseif (strripos($tasks[$i], '%') > -1) {
                $funk = str_replace('%', '', $tasks[$i]);
                if (strripos($funk, '(') > -1) {
                    $arg = explode('(', $funk)[1];
                    $arg = str_replace(')', '', $arg);
                    $funk = str_replace('(' . $arg . ')', '', $funk);
                    if ($this->search($arg)) {
                        $this->$funk($this->value($arg));
                    } else {
                        $this->$funk($arg);
                    }
                } else {
                    $this->$funk();
                }
            }else {
                $this->justShow($tasks[$i]);
            }
        }


        if(isset($this->taskSQL[$taskId]['condition'])) {
            $condition = $this->taskSQL[$taskId]['condition'][0];
            preg_match_all('/[=,>,<]/', $condition, $sign, PREG_OFFSET_CAPTURE);

            $left = explode($sign[0][0][0], $condition)[0];
            $right = explode($sign[0][0][0], $condition)[1];
            if (is_int($right*1)){
                $arg2 = $right;
            }else{
                $arg2 = $this->value($right);
            }

            if ($this->value($left) > $arg2) {
                $cond = true;
            } else {
                $this->TRNames = [];
                $this->Args = [];
                $g++;
            }
            if ($g > 70) {
                $cond = true;
            }
        }else{
            $cond=true;
        }


    }

//    $show.="<script>alert({$g})</script>";

            $const = $consts;
            $quest = $this->makeQuest($const);
            $show.= $quest[0];
            $check = $quest[1];



        $this->TRNames= '';
        if($first==='task'){
            for ($f = 0; $f < count($consts); $f++) {
                $this->justShow($consts[$f]);
            }
            $constTable = $this->getTable();
            }
            $this->TRs=[];
//        $show.="<script>alert('".json_encode($this->SIG)."')</script>";

        if(isset($this->OMS)) {
            $show .= "<br>".$this->OMS;
        }
        return ['show'=>$constTable.$show, 'check'=>$check, 'title'=>$taskTitle];
    }

    public function getCorrections($h){
        $cor = new Corrections();
//        $this->correction = $cor;
        $this->set('dhi', $cor->get_i($this->value('Oisr')));
        $this->set('dhd', $cor->get_dhd($this->value('e'))/60);
        $this->set('dhid' , ($this->value('dhi')+$this->value('dhd')));
        $hb = $h+$this->value('dhi')+$this->value('dhd');
        $this->set('dhp', $cor->get_dhp($hb));
        $this->set('dhb', $cor->get_dhb($this->value('B'), $hb));
        $this->set('dht', $cor->get_dht($this->value('temp'), $hb));
        $this->set('dhbt', $this->value('dhb'), $this->value('dht'));
//        $hdop = $hb+$this->value('dhp')/60+$this->value('dhbt')/60;
        $this->set('dhz', $cor->get_dhz($this->value('V'), $this->value('Ao'), $this->value('PU'), $this->value('Tgr'), $this->value('Tgr_1')));
    }

    public $OMS;

    public function OMS(){
        $SVG = new SVGMaker();
        $scale = 10;
        $SVG->scale = $scale;
        if ($scale < 30) {
            $grid = 1;
        } else {
            $grid = $scale / 10;
            $grid = 2;
        }

        $SVG->addGrid($grid);


        $SQ = $this->value('SQ');

        for($i=0;$i<$this->value('SQ');$i++) {

            $AArr[]=$this->value('Ao_'.($i+1));;
            $nArr[]=$this->value('n_'.($i+1));

        }
        for($i=0;$i<$SQ;$i++) {
            $SVG->addAN($AArr[$i], $nArr[$i] / 60);
        }

        ///Точки пересечения
        $CrossArr = [];
        $An = 0;
        $An2 = 0;
        $CrossQ = [0,1,3,6];
        for ($c = 1; $c <= $CrossQ[$SQ-1]; $c++) {

            $An2++;
            if ($An2 >= count($AArr)) {
                $An++;
                $An2 = $An + 1;
            }

            $A1_ = $AArr[$An];
            $A2_ = $AArr[$An2];
            $n1_ = $nArr[$An];
            $n2_ = $nArr[$An2];
            $cr1 = $SVG->crossing($A1_, $n1_, $A2_, $n2_);

            if($SQ==3) {
                $CrossArr[] = $cr1;
            }elseif ($SQ==4){
                $CrossArr[$An][] = $cr1;
                $CrossArr[$An2][] = $cr1;


            }

        }


        $AllCrossArr = [];
        $MiddleArr = [];

        if($SQ==4) {

            //Выбор основных сторон и нахождение их середин
            for ($g = 0; $g < 4; $g++) {

                $Dn = 0;
                $Dn2 = 0;

                $DMin = 0;
                $fArr = [-1, -1];
                $dAArr = [];
                $crossArr = [];
                for ($d = 0; $d < 3; $d++) {
                    $Dn2++;
                    if ($Dn2 >= count($CrossArr[$g])) {
                        $Dn++;
                        $Dn2 = $Dn + 1;
                    }
                    // $D = sqrt(pow(($CrossArr[$g][$Dn2]['x'] - $CrossArr[$g][$Dn]['x']), 2) + pow(($CrossArr[$g][$Dn2]['y'] - $CrossArr[$g][$Dn]['y']), 2));
                    $D = 1;
                    $sin = sin(deg2rad($CrossArr[$g][$d]['dA']));
                    $dAArr[] = abs($sin * $D);
                    $crossArr[] = $d;

                }


                $crossArrMain = $dAArr;


                $cross1 = max($dAArr);
                array_splice($dAArr, array_search($cross1, $dAArr), 1);
                $cross2 = max($dAArr);

                $fArr = [$crossArr[array_search($cross1, $crossArrMain)], $crossArr[array_search($cross2, $crossArrMain)]];

                $x12 = ($CrossArr[$g][$fArr[0]]['x'] + $CrossArr[$g][$fArr[1]]['x']) / 2;
                $y12 = ($CrossArr[$g][$fArr[0]]['y'] + $CrossArr[$g][$fArr[1]]['y']) / 2;
                $AllCrossArr[] = abs($CrossArr[$g][$fArr[0]]['x']);
                $AllCrossArr[] = abs($CrossArr[$g][$fArr[1]]['x']);
                $AllCrossArr[] = abs($CrossArr[$g][$fArr[0]]['y']);
                $AllCrossArr[] = abs($CrossArr[$g][$fArr[1]]['y']);

                $MiddleArr[] = ['x' => $x12, 'y' => $y12];
            }

        }elseif($SQ==3){

            //Выбор основных сторон и нахождение их середин

            for($g=0;$g<3;$g++) {
                $g1=$g;
                $g2=$g+1;
                if($g2>2){
                    $g2=0;
                }

                $x12 = ($CrossArr[$g1]['x'] + $CrossArr[$g2]['x']) / 2;
                $y12 = ($CrossArr[$g1]['y'] + $CrossArr[$g2]['y']) / 2;
                $AllCrossArr[] = abs($CrossArr[$g1]['x']);
                $AllCrossArr[] = abs($CrossArr[$g1]['x']);
                $AllCrossArr[] = abs($CrossArr[$g2]['y']);
                $AllCrossArr[] = abs($CrossArr[$g2]['y']);
                $MiddleArr[] = ['x' => $x12, 'y' => $y12];
            }

        }

        $points = [];

        if($SQ==4) {

            /// Рассчитываем четыре прямы из середины первой стороны четырехугольника и записываем их середины
            for ($s = 1; $s < 4; $s++) {


                $x1 = $MiddleArr[0]['x'];
                $y1 = $MiddleArr[0]['y'];
                $x2 = $MiddleArr[$s]['x'];
                $y2 = $MiddleArr[$s]['y'];

                $x12 = ($x1 + $x2) / 2;
                $y12 = ($y1 + $y2) / 2;

                $points[$s] = $x12 + $y12;
            }

            $mainMiddle = [0, 1, 2, 3];

            /// Рассчитываем еще 4 прямые и сравниваем середины с предыдущим пунктом, если середины совпадают - всё хорошо

            for ($s = 1; $s < 4; $s++) {


                $x1 = $MiddleArr[1]['x'];
                $y1 = $MiddleArr[1]['y'];
                $x2 = $MiddleArr[$s]['x'];
                $y2 = $MiddleArr[$s]['y'];

                $x12 = ($x1 + $x2) / 2;
                $y12 = ($y1 + $y2) / 2;

                $result = $x12 + $y12;

                for ($d = 1; $d < 4; $d++) {
                    if (round($result, 4) == round($points[$d], 4)) {
                        $mainMiddle = [0, $d, 1, $s];
                    }
                }
            }




            /// Рисуем полученнные выше линии
            $x1 = $MiddleArr[$mainMiddle[0]]['x'];
            $y1 = $MiddleArr[$mainMiddle[0]]['y'];
            $x2 = $MiddleArr[$mainMiddle[1]]['x'];
            $y2 = $MiddleArr[$mainMiddle[1]]['y'];

            $SVG->addLine($x1, $y1, $x2, $y2);

            $x1 = $MiddleArr[$mainMiddle[2]]['x'];
            $y1 = $MiddleArr[$mainMiddle[2]]['y'];
            $x2 = $MiddleArr[$mainMiddle[3]]['x'];
            $y2 = $MiddleArr[$mainMiddle[3]]['y'];

            $SVG->addLine($x1, $y1, $x2, $y2);




        }elseif($SQ==3){


            for($g=0;$g<3;$g++) {
                $g1 = $g;
                $g2 = $g + 1;
                if ($g2 > 2) {
                    $g2 = 0;
                }
                $x1 = $CrossArr[$g1]['x'];
                $y1 = $CrossArr[$g1]['y'];
                $x2 = $MiddleArr[$g2]['x'];
                $y2 = $MiddleArr[$g2]['y'];

                $SVG->addLineColor($x1, $y1, $x2, $y2, '#F2A30F');
            }

        }

        if($SQ==4) {
            /// Рисуем точку ОМС
            $x12 = ($x1 + $x2) / 2;
            $y12 = ($y1 + $y2) / 2;
            $SVG->addPoint($x12, $y12);
        }else{


            $CrossPoint = [];

            for($i=0;$i<3;$i++) {

                $i1 = $i;
                $i2 = $i+1;
                $i3 = $i+2;

                if($i2>2){
                    $i2=$i2-3;
                }
                if($i3>2){
                    $i3 = $i3-3;
                }

                $x1 = $CrossArr[$i1]['x'];
                $y1 = $CrossArr[$i1]['y'];
                $x2 = $MiddleArr[$i2]['x'];
                $y2 = $MiddleArr[$i2]['y'];

                $A1 = $y1 - $y2;
                $B1 = $x2 - $x1;
                $C1 = $x1 * $y2 - $x2 * $y1;



                $x1 = $CrossArr[$i1]['x'];
                $y1 = $CrossArr[$i1]['y'];
                $x2 = $CrossArr[$i3]['x'];
                $y2 = $CrossArr[$i3]['y'];

                $A2 = $y1 - $y2;
                $B2 = $x2 - $x1;
                $C2 = $x1 * $y2 - $x2 * $y1;



                $x1 = $CrossArr[$i1]['x'];
                $y1 = $CrossArr[$i1]['y'];
                $x2 = $CrossArr[$i2]['x'];
                $y2 = $CrossArr[$i2]['y'];

                $A3 = $y1 - $y2;
                $B3 = $x2 - $x1;
                $C3 = $x1 * $y2 - $x2 * $y1;



                $psi  = rad2deg(atan($A1 / $B1));
                $psi2 = rad2deg(atan($A2 / $B2));
                $psi3 = rad2deg(atan($A3 / $B3));

                $phi = rad2deg(acos(($B1 * $B2 + $A1 * $A2) / (sqrt($B1 * $B1 + $A1 * $A1) * sqrt($B2 * $B2 + $A2 * $A2))));

                $this->set('sign',rand(0,1));
                if($this->value('sign')==0){
                    $psi4 = $psi3 + $phi;
                }else{
                    $psi4 = $psi3 - $phi;
                }



//                    $show.="<script>alert('$psi , $psi2 , $psi3 , $psi4')</script>";

                $k = tan(deg2rad($psi4));
                $x1 = $CrossArr[$i1]['x'];
                $y1 = $CrossArr[$i1]['y'];

                $b = $y1 + $k * $x1;

                $x1 = 45;
                $y1 = -$k * $x1 + $b;
                $x2 = -50;
                $y2 = -$k * $x2 + $b;

                $A4 = $y1 - $y2;
                $B4 = $x2 - $x1;
                $C4 = $x1 * $y2 - $x2 * $y1;


                $x = 8;
                $y = -$A4 / $B4 * $x - $C4 / $B4;

                // $SVG->addLine($x1, $y1, $x2, $y2);





                $x1 = $CrossArr[$i2]['x'];
                $y1 = $CrossArr[$i2]['y'];
                $x2 = $CrossArr[$i3]['x'];
                $y2 = $CrossArr[$i3]['y'];



                $A5 = $y1 - $y2;
                $B5 = $x2 - $x1;
                $C5 = $x1 * $y2 - $x2 * $y1;


                //$SVG->addLine($x1, $y1, $x2, $y2);


//                    $x1 = ($C5/$B5-$C4/$B4)/($A4/$B4-$A5/$B5);
                $x1 = -($C4*$B5 - $C5*$B4)/($A4*$B5-$A5*$B4);

                $y1 = -$A4/$B4*$x1-$C4/$B4;



                $x2 = $CrossArr[$i1]['x'];
                $y2 = $CrossArr[$i1]['y'];



                $SVG->addLineColor($x1, $y1, $x2, $y2, '#18CDCA');
                $CrossPoint[]=[$x1, $y1, $x2, $y2];
            }
            $crossPoint = $this->crossPoint($CrossPoint);
            $SVG->addPoint($crossPoint['x'], $crossPoint['y']);

            $x12 = $crossPoint['x'];
            $y12 = $crossPoint['y'];



        }

        $this->observation($x12 / 60, -$y12 / 60);
        $tv = $this->observationView();



        $show = $SVG->getSVG();
        $this->OMS = $show;
        return $show;
    }
    public function crossPoint($Arr){

        $x11=$Arr[0][0];
        $y11=$Arr[0][1];
        $x12=$Arr[0][2];
        $y12=$Arr[0][3];
        $x21=$Arr[1][0];
        $y21=$Arr[1][1];
        $x22=$Arr[1][2];
        $y22=$Arr[1][3];


        $A1 = $y11 - $y12;
        $B1 = $x12 - $x11;
        $C1 = $x11 * $y12 - $x12 * $y11;


        $A2 = $y21 - $y22;
        $B2 = $x22 - $x21;
        $C2 = $x21 * $y22 - $x22 * $y21;



        $x1 = -($C1*$B2 - $C2*$B1)/($A1*$B2-$A2*$B1);

        $y1 = -$A1/$B1*$x1-$C1/$B1;

        return ['x'=>$x1, 'y'=>$y1, 'A1'=>$A2, 'B1'=>$B2, 'C1'=>$C2];
    }

    public function observation($domega, $dlat){
        $this->set('domega', $domega);
        $this->set('dlat', round($dlat, 3));
        $this->Calc('lat+dlat=lato');
        $this->set('dlng',round($this->value('domega') / cos(deg2rad($this->value('lat'))),3));
        $this->Calc('lng+dlng=lngo');
    }


    public function observationView(){
        $tv = new TaskTable('Расчеты', 350);
        $tv->Args=$this->Args;
        $tv->Calc('lat+dlat=lato');
        $tv->addTR($this->show('dlng') . ' = ' . $this->show('domega') . 'sec(' . $this->show('lat') . ')');
        $tv->addTR($this->show('dlng') . ' = ' . $tv->showDeg($this->value('domega'), 'm+') . 'sec(' . round($this->value('lat'), 3) . ')');
        $tv->Calc('lng+dlng=lngo');
        return $tv;
    }

}







