<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 02.02.18
 * Time: 17:04
 */

namespace App;


use PhpParser\Node\Arg;

class Al_GAK extends Argument
{


public $ARG=[];

public $arrPHI = [
    74,
72,
70,
68,
66,
64,
62,
60,
58,
56,
54,
52,
50,
45,
40,
30,
20,
10,
0,
-10,
-20,
-30,
-40,
-45,
-50,
-52,
-54,
-56,
-58,
-60
];

public $Ar;

    /**
     * Al_GAK constructor.
     * @param $Ar
     */
    public function __construct($Ar)
    {
        $this->Args = $Ar;
    }


    public function kernelCalc($num){
       $this->Calc('Ts-N=Tgr');
        $this->Calc('Tstart+dT_'.$num.'=Tgr_'.$num);
        $Tgr_ = new \DateTime();
        if(date('H',$this->value('Tgr_'.$num))-date('H',$this->value('Tgr'))>12){
            $day = date('d', $this->value('Tgr'))-1;
        }elseif(date('H',$this->value('Tgr_'.$num))-date('H',$this->value('Tgr'))<0&&date('H',$this->value('Tgr_'.$num))==0){
            $day = date('d', $this->value('Tgr'))+1;
        }else{
            $day = date('d', $this->value('Tgr'));
        }
        $Tgr_->setDate(date('Y',$this->value('Tgr')),date('m',$this->value('Tgr')),$day);
        $Tgr_->setTime(date('H',$this->value('Tgr_'.$num)),date('i',$this->value('Tgr_'.$num)),date('s',$this->value('Tgr_'.$num)));
        $this->set('Tgr_'.$num, $Tgr_->getTimestamp());
//        $this->value('Tgr_'.$num);

        if ($this->value('star' . $num . 'Num') < 0) {
        $this->set('dtt1_'.$num, 14.98333 / 60 * (date('i', $this->value('Tgr_' . $num)) + date('s', $this->value('Tgr_' . $num)) / 60));
            $this->set('dtt2_'.$num, $this->value('dtt') / 60 * (date('i', $this->value('Tgr_' . $num)) + date('s', $this->value('Tgr_' . $num)) / 60));
        }else {
            $this->set('dS_'.$num, 15.04167 / 60 * (date('i', $this->value('Tgr_' . $num)) + date('s', $this->value('Tgr_' . $num)) / 60));
        }
        if ($this->value('star' . $num . 'Num') < 0) {
            $this->Calc('tt_'.$num.'+dtt1_'.$num.'+dtt2_'.$num.'=tgr_'.$num.'+lng=tm_'.$num);
            $this->set('dbt_'.$num, ($this->value('dbt')/60*date('i', $this->value('Tgr_' . $num))));
        } else {
            $dtArr=[];
            for($i=1;$i<5;$i++){
                if($this->value('dT_'.$i)>0) {
                    $x = $this->value('Tstart')+$this->value('dT_'.$i);
                    $Tstart = new \DateTime();
                    $Tstart->setDate(date('Y',$this->value('Tgr')),date('m',$this->value('Tgr')),date('d',$this->value('Tgr')));
                    $Tstart->setTime(date('H',$x),date('i',$x),date('s',$x));
                    $dtArr[] =$Tstart->getTimestamp();
                }
            }
            if(count($dtArr)>0) {
                $minH = min($dtArr);
            }else{
                $minH = 0;
            }

            if (( date('H',$this->value('Tgr_' . $num)) * 1 - date('H', $minH) * 1) != 0 ) {
                $this->set('St2', ($this->value('St') + 15.04167));
                $this->Calc('St2+dS_'.$num.'=Sgr_'.$num.'+lng=Sm_'.$num.'+tau_' . $num . '=tm_'.$num.'');
                $this->set('St_'.$num, ($this->value('St') + 15.04167));
            } else {
                $this->Calc('St+dS_'.$num.'=Sgr_'.$num.'+lng=Sm_'.$num.'+tau_' . $num . '=tm_'.$num.'');
                $this->set('St_'.$num, ($this->value('St') ));

            }
        }



        $tm = $this->value('tm_'.$num.'');
        $this->set('tmW_'.$num, $tm);
        if ($tm > 180) {
            $this->set('tpr_'.$num.'', 360 - $tm);
            $this->set('tmE_'.$num, 360 - $tm);
        } else {
            $this->set('tpr_'.$num.'',-$tm);
            $this->set('tmE_'.$num, 0);
        }

        if ($this->value('star' . $num . 'Num') < 0) {
            $this->Calc('b_' . $num . '+dbt_'.$num.'=bo_' . $num);
        }else{
            $this->set('bo_'.$num,$this->value('b_'.$num));
        }




        $this->NavTriangle($num);


        $correction = new Corrections($this->value('OS' . $num));
        $this->set('dhi', $correction->get_i($this->value('Oisr')));
        $this->set('dhd', $correction->get_dhd($this->value('e')) / 60);
        $this->set('dhid', $this->value('dhi') + $this->value('dhd'));
        $this->Calc('OS'.$num.'+dhid=hv_'.$num);

//        $this->set('dhp_'.$num, $correction->get_dhp($this->value('hv_' . $num)));
        $this->set('dhp_'.$num, $correction->get_dhp($this->value('hv_' . $num)));
        $this->set('dht', $correction->get_dht($this->value('temp'), $this->value('hv_' . $num)));
        $this->set('dhb', $correction->get_dhb($this->value('B'), $this->value('hv_' . $num)));
        $this->set('dhbt_'.$num, $this->value('dhb') + $this->value('dht'));
        $this->set('dhz_'.$num, $correction->get_dhz($this->value('V'), $this->value('Ao_' . $num), $this->value('PU'), $this->value('Tgr'), $this->value('Tgr_' . $num)) / 60);

        $this->set('hc_'.$num,0);


        if ($this->value('star' . $num . 'Num') < 0) {
            $P00 = $this->value('P0')*cos(deg2rad($this->value('lat')));
//            $P00 = $this->value('P0')*0.1;
            $this->set('dhp_'. $num, ($this->value('dhp_'.$num)+$P00));
//            $this->set('dhdop', $this->value('P0'));

            $this->Calc('OS' . $num . '+dhid+dhp_' . $num . '+dhbt_' . $num . '=dhdop_'.$num.'+dhz_' . $num . '=hc_' . $num);

        }else {
            $this->Calc('OS' . $num . '+dhid+dhp_' . $num . '+dhbt_' . $num . '=dhdop_'.$num.'+dhz_' . $num . '=hc_' . $num);
        }
        $this->set('n_'.$num,0);
        $this->Calc('hc_' . $num . '-ho_' . $num . '=n_' . $num);






//        $this->set('lngH', $this->makeTime($this->value('lng')/15));
        $this->set('lngH', abs($this->value('lng')/15*3600));
        $this->set('Tkgr', 1);
        if($this->value('lng')<0){
            $this->Calc('Tkm+lngH=Tkgr+N=Tks');
        }else{
            $this->Calc('Tkm-lngH=Tkgr+N=Tks');

        }


        $phi1=0;
        $phi2=1;

        for($f=0;$f<count($this->arrPHI);$f++){
            if($this->value('lat')>$this->arrPHI[$f]){
                $phi1 = $this->arrPHI[$f];
                if($this->value('lat')>0) {
                    $phi1 = $this->arrPHI[$f];
                    $phi2 = $this->arrPHI[$f - 1];
                }else{
                    $phi1 = $this->arrPHI[$f -1];
                    $phi2 = $this->arrPHI[$f];
                }
                break;
            }

        }

        $dlat = round(($this->value('Tvzt2')-$this->value('Tvzt1'))/($phi2-$phi1)*($this->value('lat')-$phi1),0);

        $this->set('Tvzdlat', $dlat);



        if($this->value('lng')<0){
            $this->Calc('Tvzt1+Tvzdlat+Tvzds=Tvzm+lngH=Tvzgr+N=Tvzs');
        }else{
            $this->Calc('Tvzt1+Tvzdlat+Tvzds=Tvzm-lngH=Tvzgr+N=Tvzs');

        }

        $VLP = $this->value('VLP');
        if($VLP==0){
            $VLP=1;
        }
        if($VLP==$num) {
            $this->Calc('Ao_' . $VLP . '-GKK=dGKK');
        }


        return $this->Args;

    }
 public function makeTime($HMS){
     $Tgr_ = new \DateTime();
     $Tgr_->setDate(date('Y',$this->value('Tgr')),date('m',$this->value('Tgr')),date('d',$this->value('Tgr')));
     $H = floor($HMS);
     $M = floor(($HMS-$H)*60);
     $S = round(($HMS-$H-$M/60)*3600);
     $Tgr_->setTime($H,$M,$S);
     return $Tgr_->getTimestamp();

 }
    public function observation($domega, $dlat){
        $this->set('domega', $domega);
        $this->set('dlat', $dlat);
        $this->Calc('lat+dlat=lato');
        $this->set('dlng',$this->value('domega') / cos(deg2rad($this->value('lat'))));
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


    public function kernel($num){

        $show='';

        $steps = [];
        //getTime

        $tv = new TaskTable('Расчет Тгр', 260);
        $tv->Ar=$this->Args;
        $this->add('Tgr');
        $this->add('Tgr'.$num);
        $tv->Calc('Ts-N=Tgr');
        $tv->Calc('Tstart+dt'.$num.'=Tgr'.$num);
        $steps['getTime'] = $tv->getTable();
        if(false) {
            //getT

            $this->Ar->add('dtt1');
            $dS = 15.04167 / 60 * (date('i', $this->Ar->value('Tgr'.$num)) + date('s', $this->Ar->value('Tgr'.$num)) / 60);
            $this->Ar->set('dtt1', 14.98333 / 60 * (date('i', $this->ARG['Tgr' . $num]['value']) + date('s', $this->ARG['Tgr' . $num]['value']) / 60));
            $this->ARG['dtt2']['value'] = $this->ARG['dtt']['value'] / 60 * (date('i', $this->ARG['Tgr' . $num]['value']) + date('s', $this->ARG['Tgr' . $num]['value']) / 60);


//        $this->ARG['St']['value'] = $StD + $StM / 60;
            $this->ARG['dS']['value'] = $dS;
            $tv = new TaskTable('Расчеты', 350);


            if ($this->ARG['star' . $num . 'Num']['value'] < 0) {
                $tv = $this->Calc('tt+dtt1+dtt2=tgr+lng=tm', $tv);
            } else {
                for($i=1;$i<5;$i++){
                    if($this->value('dT_'.$i)>=0) {
                        $x = $this->value('Tstart')+$this->value('dT_'.$i);
                        $Tstart = new \DateTime();
                        $Tstart->setDate(date('Y',$this->value('Tgr')),date('m',$this->value('Tgr')),date('d',$this->value('Tgr')));
                        $Tstart->setTime(date('H',$this->value('Tgr_'.$num)),date('i',$this->value('Tgr_'.$num)),date('s',$this->value('Tgr_'.$num)));

                        $dtArr[] =$Tstart->getTimestamp();
                    }
                }
                $minH =   min($dtArr);
                if (date('H', $this->ARG['Tgr' . $num]['value']) * 1 - $minH * 1 != 0) {
                    $tv->Calc('St2+dS=Sgr+lng=Sm+tau' . $num . '=tm');
                } else {
                    $tv->Calc('St+dS=Sgr+lng=Sm+tau' . $num . '=tm');
                }
            }



            $tv->TRShow('tpr');

            if ($this->value('star' . $num . 'Num') < 0) {
                $tv->Calc('b' . $num . '+dbt=b' . $num);
            } else {
                $tv->TRShow('b' . $num);
            }

            $steps['getT'] = $tv->getTable();




            $tv = new TaskTable('Параллактический треугольник', 300);
            $tv->NavTriangle($num);


            $steps['getA'] = $tv->getTable();



            $tv = new TaskTable('Поправки высот', 300);


            $correction = new Corrections($this->ARG['OS' . $num]['value']);
            $this->ARG['dhi']['value'] = $correction->get_i($this->ARG['Oisr']['value']);
            $this->ARG['dhd']['value'] = $correction->get_dhd($this->ARG['e']['value']) / 60;
            $this->ARG['dhid']['value'] = $this->ARG['dhi']['value'] + $this->ARG['dhd']['value'];

            $this->ARG['dhp']['value'] = $correction->get_dhp($this->ARG['OS' . $num]['value']);
            $this->ARG['dht']['value'] = $correction->get_dht($this->ARG['temp']['value'], $this->ARG['OS' . $num]['value']);
            $this->ARG['dhb']['value'] = $correction->get_dhb($this->ARG['B']['value'], $this->ARG['OS' . $num]['value']);
            $this->ARG['dhbt']['value'] = $this->ARG['dhb']['value'] + $this->ARG['dht']['value'];
            $this->ARG['dhz']['value'] = $correction->get_dhz($this->ARG['V']['value'], $this->ARG['A' . $num]['value'], $this->ARG['PU']['value'], $this->ARG['Tgr']['value'], $this->ARG['Tgr' . $num]['value']) / 60;


            $tv = $this->Calc('OS' . $num . '+dhid+dhp+dhbt+dhz=ho' . $num, $tv);


            $steps['getH'] = $tv->getTable();

            $tv = new TaskTable('Параметры ВЛП', 150);
            $tv = $this->Calc('ho' . $num . '-hc' . $num . '=n' . $num, $tv);

            $steps['getN'] = $tv->getTable();


            $tv = new TaskTable('Элементы ВЛП', 100);
            $tv = $this->TRShow('n' . $num, $tv);
            $tv = $this->TRShow('A' . $num, $tv);
            $steps['NA'] = $tv->getTable();


        }
        return $steps;
    }


    public function View($num){
        $show='';
        $steps = [];
        //getTime
        $tv = new TaskTable('Расчет Тгр', 260);
        $tv->Args=$this->Args;
        $tv->Calc('Ts-N=Tgr');
        $tv->Calc('Tstart+dT_'.$num.'=Tgr_'.$num);
        $steps['getTime'] = $tv->getTable();


        $tv = new TaskTable('Расчеты', 350);
        $tv->Args=$this->Args;



        if ($this->value('star' . $num . 'Num') < 0) {
            $tv->Calc('tt_'.$num.'+dtt1_'.$num.'+dtt2_'.$num.'=tgr_'.$num.'+lng=tm_'.$num);
        } else {
            $dtArr=[];
            for($i=1;$i<5;$i++){
                if($this->value('dT_'.$i)>0) {
                    $x = $this->value('Tstart')+$this->value('dT_'.$i);
                    $Tstart = new \DateTime();
                    $Tstart->setDate(date('Y',$this->value('Tgr')),date('m',$this->value('Tgr')),date('d',$this->value('Tgr')));
                    $Tstart->setTime(date('H',$x),date('i',$x),date('s',$x));

                    $dtArr[] =$Tstart->getTimestamp();
                }
            }
            if(count($dtArr)>0) {
                $minH = min($dtArr);
            }else{
                $minH = 0;
            }
            if (( date('H',$this->value('Tgr_' . $num)) * 1 - date('H', $minH) * 1) != 0 ) {
                $tv->Calc('St2+dS_'.$num.'=Sgr_'.$num.'+lng=Sm_'.$num.'+tau_' . $num . '=tm_'.$num);
            } else {
                $tv->Calc('St+dS_'.$num.'=Sgr_'.$num.'+lng=Sm_'.$num.'+tau_' . $num . '=tm_'.$num);
            }
        }



        $tv->TRShow('tpr_'.$num);

        if ($this->value('star' . $num . 'Num') < 0) {
            $tv->Calc('b_' . $num . '+dbt_'.$num.'=bo_' . $num);
        } else {
            $tv->TRShow('b_' . $num);
        }

        $steps['getT'] = $tv->getTable();




        $tv = new TaskTable('Параллактический треугольник', 300);
        $tv->Args=$this->Args;

        $tv->NavTriangle($num);


        $steps['getA'] = $tv->getTable();



        $tv = new TaskTable('Поправки высот', 300);
        $tv->Args=$this->Args;



        $tv->Calc('OS' . $num . '+dhid+dhp_'.$num.'+dhbt_'.$num.'+dhz_'.$num.'=hc_' . $num);

        $steps['getH'] = $tv->getTable();


        $tv = new TaskTable('Параметры ВЛП', 150);
        $tv->Args=$this->Args;

        $tv->Calc('ho_' . $num . '-hc_' . $num . '=n_' . $num);

        $steps['getN'] = $tv->getTable();


        $tv = new TaskTable('Элементы ВЛП', 100);
        $tv->Args=$this->Args;

        $tv->TRShow('n_' . $num, $tv);
        $tv->TRShow('Ao_' . $num, $tv);
        $steps['NA'] = $tv->getTable();

        $tv = new TaskTable('Время кульминации', 200);
        $tv->Args = $this->Args;
        $tv->Calc('Tkm-lngH=Tkgr+N=Tks');
        $steps['Tk']=$tv->getTable();
        $tv = new TaskTable('Восх/Зах', 200);
        $tv->Args = $this->Args;
        $tv->Calc('Tvzt1+Tvzdlat+Tvzds=Tvzm-lngH=Tvzgr-N=Tvzs');
        $steps['Tvz']=$tv->getTable();

        $VLP = $this->value('VLP');
        if($VLP==0){
            $VLP=1;
        }

        if($VLP==$num) {

            $tv = new TaskTable('Поправка ГКК', 200);
            $tv->Args = $this->Args;


            $tv->Calc('Ao_' . $VLP . '-GKK=dGKK');
            $steps['dGKK'] = $tv->getTable();

        }

        return $steps;

    }



    public function kernelViewS($num){

        $steps = [];


        $tv = new TaskTable('Элементы ВЛП',100);
        $tv->Args=$this->Args;

        $tv->TRShow('n_'.$num);
        $tv->TRShow('Ao_'.$num);
        $steps['NA'] = $tv->getTable();

        return $steps;
    }




}