<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 08.01.18
 * Time: 15:58
 */

namespace App;



use Symfony\Component\Console\Input\Input;

class Task26 extends \App\Task
{


    public $KERNEL = ['getTime','getSm','getAPolaris','getDKK'];

    public function __construct()
    {

    }

    public function randomTask()
    {
        $h=-1;
        while ($h<0) {
            $d01 =rand(0, 8);
            $d=$this->arrD[$d01];
            $d1= $this->arrMonth[$d];
            $d2= $this->arrDate[$d];



            $this->VAL['d']=$d;
            $this->VAL['datetime']=mktime(rand(0,23), rand(0,59), rand(0,59), $d1, $d2, 2004);
            $this->datetime = $this->VAL['datetime'];
            $this->VAL['Ts']=mktime(rand(0,23), rand(0,59), rand(0,59), $d1, $d2, 2004);
            $this->VAL['date']=date ( 'd/m/Y', $this->VAL['datetime'] );
            $this->VAL['time']=date ( 'H:i', $this->VAL['datetime'] );
            $this->VAL['Ts']=date ( 'H', $this->VAL['datetime'] );
            // $this->MAE = new MAE($this->VAL['Ts'],$this->VAL['d'],false);

            $this->SHOW['Ts']=date ( 'H:i, d/m/Y', $this->VAL['datetime'] );
            $this->SHOW['date']=date ( 'd/m/Y', $this->VAL['datetime'] );
            $this->SHOW['time']=date ( 'H:i', $this->VAL['datetime'] );


            $stars = [1,2,3,6,7,11];
            $star = $stars[rand(0,5)];
            $this->VAL['star']=$star;

            $this->VAL['lat']=rand(600,3400)/100;
            $this->VAL['lng']=rand(-18000,18000)/100;
            $this->VAL['N']=round($this->VAL['lng']/180*12)+rand(-2,2);

            $this->SHOW['lat']=$this->showDeg($this->VAL['lat'],'lat');
            $this->SHOW['lng']=$this->showDeg($this->VAL['lng'],'lng');
            $this->SHOW['N']=$this->showDeg($this->VAL['N'],'N');



            $this->getTimeMain();
            $this->getSmMain();
            $this->getAPolarisMain();
            $h = rand(-2,2)/100;
            $gkk=$this->VAL['A']+rand(-30,30)/10;
            $this->VAL['gkk']=$this->remakeDegree($gkk,360);

            $this->SHOW['gkk']=$this->showDeg($this->VAL['gkk'],'deg');

            $this->getDKKMain();
        }

    }

    public function openTask($object)
    {
        $d=$object->d;

        $this->d=$d;
        $this->stage = $object->stage;
        $this->datetime = $object->datetime;


        $this->VAL['d']=$d;
        $this->VAL['datetime']=$object->datetime;
        $this->VAL['Ts']=$object->datetime;
        $this->VAL['date']=date ( 'd/m/Y', $this->VAL['datetime'] );
        $this->VAL['time']=date ( 'H:i', $this->VAL['datetime'] );
        $this->VAL['Ts']=date ( 'H', $this->VAL['datetime'] );


        $this->SHOW['Ts']=date ( 'H:i, d/m/Y', $this->VAL['datetime'] );
        $this->SHOW['date']=date ( 'd/m/Y', $this->VAL['datetime'] );
        $this->SHOW['time']=date ( 'H:i', $this->VAL['datetime'] );

        $this->VAL['star']=$object->star;



        $this->lat = $object->lat;
        $this->lng = $object->lng;
        $this->N = $object->N;

        $this->VAL['lat']=$object->lat;
        $this->VAL['lng']=$object->lng;
        $this->VAL['N']=$object->N;

        $this->SHOW['lat']=$this->showDeg($object->lat,'lat');
        $this->SHOW['lng']=$this->showDeg($object->lng,'lng');
        $this->SHOW['N']=$this->showDeg($object->N,'N');

        $this->getTimeMain();
        $this->getSmMain();
        $this->getAPolarisMain();
        $this->kk = $object->kk;
        $this->VAL['gkk']=$object->kk;
        $this->SHOW['gkk']=$this->showDeg($object->kk,'deg');
        $this->getDKKMain();

        TaskTable::$SHOW=$this->SHOW;

    }

    public function showObj(){
        $obj = clone $this;
        $obj->lat = $this->showDeg($this->VAL['lat'], 'lat');
        $obj->lng=$this->showDeg($this->VAL['lng'], 'lng');
        $obj->kk = $this->showDeg($this->VAL['gkk'], 'deg');
        $obj->N = $this->showDeg($this->VAL['N'], 'N');
        return $obj;
    }

    public function getObject()
    {
        $object = [
            'd'=>$this->VAL['d'],
            'datetime'=>$this->VAL['datetime'],
            'lat'=>$this->VAL['lat'],
            'lng'=>$this->VAL['lng'],
            'N'=>$this->VAL['N'],
            'kk'=>$this->VAL['gkk'],
            'star'=>$this->VAL['star']
        ];
        return json_encode($object);
    }


}