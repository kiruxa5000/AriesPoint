<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 01.02.18
 * Time: 9:11
 */

namespace App;


class SVGMaker
{

    public $lines=[];
    public $VLPs = 0;

    public $VLPColors=[
        '#4F80E1',
        '#FF5349',
        '#1DCD63',
        '#FAB145'
    ];

    public $scale=0;


    /**
     * SVGMaker constructor.
     */
    public function __construct()
    {
    }




    public function addAN($A, $n){
        if($n<0){
            $sign = true;
        }else{
            $sign = false;
        }
        $this->addA($A, $this->VLPColors[$this->VLPs], $sign);
//        $this->addVLP($A, 150 , $this->VLPColors[$this->VLPs]);
        $this->addVLP($A, $n*300*60/$this->scale , $this->VLPColors[$this->VLPs]);
        $this->VLPs++;
    }


    public function addA($A, $color, $minor){

        if(($A>=0&&$A<=90)||($A>270&&$A<=360)) {
            $A1y2 = 300 + 300 * tan(deg2rad($A));
            $x1 = 300;
            $y1 = 300;
            if($minor){
                $x1 = 300 - 300 * tan(deg2rad($A));
                $y1 = 600;
            }
            $A1Line = "<line x1='$x1' y1='$y1' x2='$A1y2' y2='0' stroke-width='2' stroke-dashoffset='5' stroke-dasharray='5' stroke='$color'/> ";
        }elseif ($A>90&&$A<=270){
            $x1 = 300;
            $y1 = 300;

            if($minor){
                $x1 = 300 + 300 * tan(deg2rad($A));
                $y1 = 0;
            }
            $A1y2 = 300 - 300 * tan(deg2rad($A));
            $A1Line = "<line x1='$x1' y1='$y1' x2='$A1y2' y2='600' stroke-width='2' stroke-dashoffset='5' stroke-dasharray='5' stroke='$color'/> ";
        }else{
            $A1Line='';
        }
        $this->lines[]=$A1Line;
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function addDescription($arr=[]){



        $start = "<svg width='600' height='220' style='border: 1px solid'> ";
        $string='';


        for($i=0;$i<count($arr);$i++) {
            $y = $i*50+20;
            $y2 = $y+5;
            $y3 = $y+25;
            $y4 = $y+30;

            $num = $i+1;
            $A=round($arr[$i]['A'],0);
            $n = round($arr[$i]['n']*60, 1);

            $string .= " 
<line x1='10' y1='{$y}' x2='50' y2='$y' stroke-width='2' stroke-dashoffset='5' stroke-dasharray='5' stroke='{$this->VLPColors[$i]}'/>
<text x='65' y='{$y2}' font-weight='700'>А{$num}</text><text x='115' y='{$y2}'> {$A}° от направления на N</text> 
<line x1='10' y1='$y3' x2='50' y2='$y3' stroke-width='2' stroke='{$this->VLPColors[$i]}'/>
<text x='65' y='$y4' font-weight='700'>ВЛП{$num}</text><text x='115' y='{$y4}'> Перпендикулярна A{$num} и откладывается от центра {$n}' </text> 
";
        }
        $show = $start;
        $show.=$string;

        $show.="</svg>  ";
        return $show;
    }

    public function addGrid($num){
        $ds=0;
        for($v=0;$v<$this->scale/$num*2;$v++) {
            $x = ($num*$v-$this->scale)*300/$this->scale+300;
            if($x!=300){
                $this->lines[] = "<line x1='$x' y1='0' x2='$x' y2='600' stroke-width='1' stroke='#dddddd'/> ";
            }
            if($v!=0) {
                if($this->scale>25){

                }else {
                    $text = $v - round($this->scale / $num);
                    if($text>0) {
                        $x0 = $x - 4;
                    }else{
                        $x0 = $x - 8;

                    }
                    $this->lines[] = "<text x='$x0' y='15' stroke='#dddddd'>{$text}</text> ";
                }
            }
        }
        for($v=0;$v<$this->scale/$num*2;$v++) {
            $y = ($num*$v-$this->scale)*300/$this->scale+300;
            if($y!=300) {
                $this->lines[] = "<line x1='0' y1='$y' x2='600' y2='$y' stroke-width='1' stroke='#dddddd'/> ";
            }


            if($v!=0) {
                if($this->scale>25){

                }else {
                    $text = $v - round($this->scale / $num);
                    $text=-$text;
                    $y0 = $y+4;
                    $this->lines[] = "<text x='575' y='$y0' stroke='#dddddd'>{$text}</text> ";
                }
            }
        }
    }



    public function addVLP($A, $n, $color){

        $sin = sin(deg2rad($A));
        if($sin==0){
            $sin=0.0000000000001;
        }

        if(($A>=0&&$A<=90)||($A>=180&&$A<=270)){
            $n = -$n/$sin;
        }else{
            $n = -$n/$sin;
        }


        $tan = tan(deg2rad($A));
        if($tan==0){
            $tan=0.0000000000001;
        }

        if(($A>=0&&$A<=90)||($A>270&&$A<=360)) {
            $A1x1 = 300 - $n;
            $A1x2 = 300 - 300 / $tan-$n;
            $A1x3 = 300 + 300 / $tan-$n;
            $A1Line = "<line x1='$A1x2' y1='0' x2='$A1x3' y2='600' stroke-width='2' stroke='$color'/> ";
        }elseif ($A>90&&$A<=270){

            $A1x2 = 300 - 300 / $tan-$n;
            $A1x3 = 300 + 300 / $tan-$n;
            $A1Line = "<line x1='$A1x2' y1='0' x2='$A1x3' y2='600' stroke-width='2' stroke='$color'/> ";
        }else{
            $A1Line = '';
        }
        $this->lines[]=$A1Line;
    }

    public function addPoint($x, $y){
        $x = 300+$x*300/$this->scale;
        $y = 300+$y*300/$this->scale;
        $this->lines[] = "<circle cx=$x cy=$y r=10 fill='#ffffff' stroke-width='2' stroke='#323232'/>";

        $this->lines[] = "<circle cx=$x cy=$y r=5 fill='#323232' stroke-width='1' stroke='#ffffff'/>";
    }
    public function addLine($x1, $y1, $x2, $y2){
        $x1 = 300+$x1*300/$this->scale;
        $y1 = 300+$y1*300/$this->scale;
        $x2 = 300+$x2*300/$this->scale;
        $y2 = 300+$y2*300/$this->scale;

        $this->lines[] = "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' stroke-width='2' stroke='#323232'/>";
    }

    public function addLineColor($x1, $y1, $x2, $y2, $color){
        $x1 = 300+$x1*300/$this->scale;
        $y1 = 300+$y1*300/$this->scale;
        $x2 = 300+$x2*300/$this->scale;
        $y2 = 300+$y2*300/$this->scale;

        $this->lines[] = "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' stroke-width='1.5' stroke='$color'/>";
    }

    public function getSVG(){

        $A1 = 30;

        $start = "<svg width='600' height='600' style='border: 2px solid #323232'> ";



        $string = " 
<line x1='300' y1='0' x2='300' y2='600' stroke-width='2' stroke='rgb(0,0,0)'/>  
<line x1='0' y1='300' x2='600' y2='300' stroke-width='2' stroke='rgb(0,0,0)'/>";

        $string.="<text x='305' y='15' font-weight='700'>Δφ</text>";
        $string.="<text x='575' y='315' font-weight='700'>Δω</text>";
        $show = $start;
        $show.=$string;

        for($i=0;$i<count($this->lines);$i++){
            $show.=$this->lines[$i];
        }
        $show.="</svg>  ";
        return $show;
    }


    public function crossing($A1, $n1, $A2, $n2){

        $sin1 = sin(deg2rad($A1));
        if($sin1==0){
            $sin1=0.0000000000001;
        }

        if(($A1>=0&&$A1<=90)||($A1>=180&&$A1<=270)){
            $n1 = -$n1/$sin1;
        }else{
            $n1 = -$n1/$sin1;
        }
        if($n1==0){
            $n1=0.000000001;
        }

        $sin2 = sin(deg2rad($A2));
        if($sin2==0){
            $sin2=0.0000000000001;
        }

        if(($A2>=0&&$A2<=90)||($A2>=180&&$A2<=270)){
            $n2 = -$n2/$sin2;
        }else{
            $n2 = -$n2/$sin2;
        }
        if($n2==0){
            $n2=0.000000001;
        }

        $tan1 = tan(deg2rad($A1));
        if($tan1==0){
            $tan1=0.00000000000000001;
        }
        $tan2 = tan(deg2rad($A2));
        if($tan2==0){
            $tan2=0.00000000000000001;
        }
        $tans = (1/$tan1-1/$tan2);
        if($tans==0){
            $tans=0.00000000000000001;
        }
        $y1 = -($n1-$n2)/$tans;
        $x1 = $y1/$tan1+$n1;

        if($A2-$A1>180){
            $A02=$A1+360;
            $A01=$A2;
        }elseif ($A2-$A1<-180){
            $A02=$A2+360;
            $A01 = $A1;
        }else{
            $A01=$A1;
            $A02=$A2;
        }
        $dA = abs($A02-$A01);

        return ['x'=>-$x1, 'y'=>-$y1, 'dA'=>$dA];
    }



}