<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 03.02.18
 * Time: 14:06
 */

namespace App;



class Calculator extends Argument
{

    public function Calc($r){

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
                    $values[$i] = -$this->value($args[0][$i][0]);
                }else{
                    $values[$i] = $this->value($args[0][$i][0]);
                }
                $valuesS[$names[$i]] = $values[$i];
            }
            $valuesSumm=array_sum($values);
            $valuesSumm = $this->remakeDegree2($valuesSumm,$this->value($names[$i]));

            $this->set($resultName,$valuesSumm);

        }

    }



}