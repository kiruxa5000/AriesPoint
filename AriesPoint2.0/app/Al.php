<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 26.01.18
 * Time: 11:39
 */

namespace App;

//Almucantar
class Al
{






    public function Calc($r,$tv){

        $explode = explode('=',$r);


        for($z=0;$z<count($explode)-1;$z++){


            ///Достаем переменные
            $leftPart = explode('=',$r)[$z+0];
            $rightPart = explode('=',$r)[$z+1];

            preg_match_all('/[a-z,A-Z,0-9]+/', $rightPart, $res0, PREG_OFFSET_CAPTURE);
            $resultName = $res0[0][0][0];
            preg_match_all('/[a-z,A-Z,0-9]+/', $leftPart, $args, PREG_OFFSET_CAPTURE);
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
                    $values[$i] = -$this->ARG[$args[0][$i][0]]['value'];
                }else{
                    $values[$i] = $this->ARG[$args[0][$i][0]]['value'];
                }
                $valuesS[$names[$i]] = $values[$i];
            }





            $valuesSumm=array_sum($values);
            $valuesSumm = $this->remakeDegree2($valuesSumm,$this->ARG[$names[$i]]['type']);

            $this->ARG[$resultName]['value']=$valuesSumm;


            for($i=0;$i<count($values);$i++) {
                if($z==0||$i>0) {
                    $sign = '';
                    if ($i < count($signsR)) {
                        $sign = $signsR[$i];
                    }
                    $value = $this->showDeg($this->ARG[$names[$i]]['value'], $this->ARG[$names[$i]]['type']);

                    $tv->addTRAnswer3(['sign' => $sign, 'value' => $value, 'char'=>$this->ARG[$names[$i]]['show']]);
                }
            }


            $value = $this->showDeg($this->ARG[$resultName]['value'],$this->ARG[$resultName]['type']);
            $tv->addTRAnswer3(['sign'=>'','value'=>$value, 'char'=>$this->ARG[$resultName]['show']]);


        }





        return $tv;



    }

    public function NavTriangle($num, $tv,$hN,$AN){

        $sLat = sin(deg2rad($this->ARG['lat']['value']));
        $sB = sin(deg2rad($this->ARG['b'.$num]['value']));
        $cLat = cos(deg2rad($this->ARG['lat']['value']));
        $cB = cos(deg2rad($this->ARG['b'.$num]['value']));
        $cT = cos(deg2rad($this->ARG['tpr']['value']));
        $sH = $sLat*$sB+$cLat*$cB*$cT;
        $h = rad2deg(asin($sH));
        $cH = cos(deg2rad($h));
        $cA =($sB-$sLat*$sH)/($cLat*$cH);
        $A = rad2deg(acos($cA));

        $this->ARG[$hN]['value']=$h;



        if ($this->ARG['tpr']['value']<0){
            $A=360-$A;
        }
        $A=$this->remakeDegree($A, 360);

        $this->ARG[$AN]['value']=$A;

        $s1='sin(h<sub>c</sub>)=sin(ϕ<sub>c</sub>)sin(δ<sub>с</sub>)+cos(ϕ<sub>c</sub>)cos(δ<sub>с</sub>)cos(t<sub>m</sub>)';
        $s2 = 'sin(hc)=('.round($sLat,5).')('.round($sB,5).') + ('.round($cLat,5).')('.round($cB,5).')('.round($cT,5).')';
        $s3 = "hc = ".$this->showDeg($h,'dm+');
        $s4 = "cos(A)=(sin(δ<sub>с</sub>)-sin(ϕ<sub>c</sub>)sin(h<sub>c</sub>))/(cos(ϕ<sub>c</sub>)cos(h<sub>c</sub>))";
        $s5='cos(A)=(('.round($sB,5).')-('.round($sLat,5).')('.round($sH,5).'))/(('.round($cLat,5).')('.round($cH,5).'))';
        $s6='A='.$this->showDeg($A, 'deg');

        $tv->addTR($s1);
        $tv->addTR($s2);
        $tv->addTR($s3);
        $tv->addTR($s4);
        $tv->addTR($s5);
        $tv->addTR($s6);



        return $tv;
    }

    public function TRShow($name, $tv){
        $value = $this->showDeg($this->ARG[$name]['value'],$this->ARG[$name]['type']);
        $tv->addTRAnswer3(['sign'=>'','value'=>$value, 'char'=>$this->ARG[$name]['show']]);
        return $tv;

    }
}