<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 22.01.18
 * Time: 22:52
 */

namespace App;


use Symfony\Component\HttpKernel\EventListener\AddRequestFormatsListener;
use App\Argument;

class TaskGAK extends Task
{
    public $minH;


public static function openTask($ARG)
{
    $task = new TaskGAK();
    $task->ARG=$ARG;
    return $task;
}

    public function Main()
    {
        $Z = new Zenit($_REQUEST);
        $REQ = new Request($_REQUEST);

        $show = '';

        $mt = new MainTable();
        $mt->setForm('main', '');
        $mt->addInvisibleInput('t', 'GAK');

        $Z->MainTable->setForm('main', '');
        $Z->MainTable->addInvisibleInput('t', 'GAK');

        if(isset($_REQUEST['type'])){
            $type = $_REQUEST['type'];
            $typeMain = json_decode($type);
        }else{
            $type = '[]';
            $typeMain=[];
        }


        if(isset($_REQUEST['type3'])){
            $typeMain[0] = $_REQUEST['type3'];
        }
        if(isset($_REQUEST['type4'])){
            $typeMain[1] = $_REQUEST['type4'];
        }
        $mt->addInvisibleInput('type', json_encode($typeMain));
        $type = json_decode($type);




        $Z->setR('Ts');
        $Z->setR('Star_1');
        $Z->setR('OS1');
        $Z->setR('dT_1');
        $Z->setR('PU');
        $Z->setR('star1Num');
        $mt->addTR([

            $Z->show('Ts'),
            $mt->newInput('time', $Z->value('Ts'), 'datetime'),
            $mt->newInput('Star_1', $Z->value('Star_1'), 'text').$mt->newInput('star1Num', $Z->value('star1Num'), 'number'),
            $Z->show('dT_1'),
            $Z->input('dT_1'),
            $Z->show('OS1'),
            $Z->input('OS1'),
            $Z->show('PU'),
            $Z->input('PU')

        ]);



        $Z->setR('N');
        $Z->setR('OS2');
        $Z->setR('Star_2');
        $Z->setR('dT_2');
        $Z->setR('star2Num');
        $Z->setR('V');



        $mt->addTR([$Z->show('N'),
            $mt->newInput('N', $Z->value('N')/3600, 'N'),
            $Z->input('Star_2').$mt->newInput('star2Num', $Z->value('star2Num'), 'number'),
            $Z->show('dT_2'),
            $Z->input('dT_2'),
            $Z->show('OS2'),
            $Z->input('OS2'),
            $Z->show('V'),
            $Z->input('V')
        ]);


        $Z->setR('lat');
        $Z->setR('OS3');
        $Z->setR('dT_3');
        $Z->setR('e');
        $Z->setR('star3Num');
        $Z->setR('Star_3');
        $Z->setR('n_3');
        $Z->setR('Ao_3');


        $type1 = '';
        $type2 = '';
        $type3 = 'selected';

        if(isset($_REQUEST['type3'])){
            if($_REQUEST['type3']=='A'){
                $type1 = '';
                $type2 = 'selected';
                $type3 = '';
            }elseif($_REQUEST['type3']=='OC'){
                $type1 = 'selected';
                $type2 = '';
                $type3 = '';
            }
        }

        $select = "<select name='type3'><option $type1>OC</option><option $type2>A</option><option $type3></option></select>";
        $star3 = ['','','','',''];

        if(count($type)>0){
            if($type[0]=='OC') {
                $star3 = [
                    $Z->input('Star_3') . $mt->newInput('star3Num', $Z->value('star3Num'), 'number'),

                    $Z->show('dT_3'),
                    $Z->input('dT_3'),
                    $Z->show('OS3'),
                    $Z->input('OS3')];
            }elseif($type[0]=='A'){
                $star3 = [
                    $Z->input('Star_3') . $mt->newInput('star3Num', $Z->value('star3Num'), 'number'),
                    $Z->show('Ao_3'),
                    $Z->input('Ao_3'),
                    $Z->show('n_3'),
                    $Z->input('n_3')];

                $Z->set('dT_3', 0);

            }else{
                $Z->set('dT_3', 0);

            }
        }



        $mt->addTR([
            $Z->show('lat'),
            $Z->input('lat').$select,
            $star3[0],
            $star3[1],
            $star3[2],
            $star3[3],
            $star3[4],
            $Z->show('e'),
            $Z->input('e')
        ]);


        $Z->setR('lng');
        $Z->setR('OS4');
        $Z->setR('dT_4');
        $Z->setR('Star_4');
        $Z->setR('B');
        $Z->setR('star4Num');
        $Z->setR('n_4');
        $Z->setR('Ao_4');

        $type1 = '';
        $type2 = '';
        $type3 = 'selected';

        if(isset($_REQUEST['type4'])){
            if($_REQUEST['type4']=='A'){
                $type1 = '';
                $type2 = 'selected';
                $type3 = '';
            }elseif($_REQUEST['type4']=='OC'){
                $type1 = 'selected';
                $type2 = '';
                $type3 = '';
            }
        }

        $select = "<select name='type4'><option $type1>OC</option><option $type2>A</option><option $type3></option></select>";
        $star4 = ['','','','',''];

        if(count($type)>1){
            if($type[1]=='OC') {
                $star4 = [
                    $Z->input('Star_4') . $mt->newInput('star4Num', $Z->value('star4Num'), 'number'),
                    $Z->show('dT_4'),
                    $Z->input('dT_4'),
                    $Z->show('OS4'),
                    $Z->input('OS4')];
            }elseif($type[1]=='A'){
                $star4 = [
                    $Z->input('Star_4') . $mt->newInput('star4Num', $Z->value('star4Num'), 'number'),
                    $Z->show('Ao_4'),
                    $Z->input('Ao_4'),
                    $Z->show('n_4'),
                    $Z->input('n_4')];

                $Z->set('dT_4', 0);
            }else{
                $Z->set('dT_4', 0);

            }
        }

        $mt->addTR([
            $Z->show('lng'),
            $Z->input('lng').$select,
            $star4[0],
            $star4[1],
            $star4[2],
            $star4[3],
            $star4[4],
            $Z->show('B'),
            $Z->input('B')
        ]);



        $Z->setR('Tstart');
        $Z->setR('temp');
        $Z->setR('Oisr');
        $timeqwe = $Z->value('Tstart');


        $mt->addTR([
            '',
            '',
            '',
            $Z->show('Tstart'),
            $Z->input('Tstart'),
            $Z->show('temp'),
            $Z->input('temp'),
            $Z->show('Oisr'),
            $Z->input('Oisr'),

        ]);

        $mt->addTR(['','Данные из МАЕ <span class="datetimer"></span>','']);


        $Z->setR('St');

        $dtArr=[];




        $mt->addTR([
            $Z->show('St').'<span class="StH descr"></span>',
            $Z->input('St'),''
        ]);


        for($g=1;$g<5;$g++) {
            if ($g<3||($g > 2 && count($type) > ($g-3) && $type[($g-3)] == 'OC')) {
                if ($Z->value('star' . $g . 'Num') < 0) {

                    $Z->setR('tt_' . $g);
                    $Z->setR('dtt');
                    $Z->setR('dbt');
                    $Z->setR('b_' . $g);
                    $Z->setR('P0');

                    $mt->addTR([
                        $Z->show('tt_' . $g) . '<span class="ttH descr"></span><span class="descr planetName"></span>',
                        $Z->input('tt_' . $g),
                        $Z->show('b_' . $g) . " " .
                        $Z->input('b_' . $g),
                        $Z->show('dtt') . $Z->input('dtt'),
                        $Z->show('dbt') . $Z->input('dbt'),
                        $Z->show('P0') . $Z->input('P0')

                    ]);

                } else {

                    $Z->setR('tau_' . $g);
                    $Z->setR('b_' . $g);

                    $mt->addTR([
                        $Z->show('tau_' . $g)."<span class='descr starNum_$g'></span>",
                        $Z->input('tau_' . $g),
                        $Z->show('b_' . $g) . " " .
                        $Z->input('b_' . $g),"<td></td>","<td></td>","<td></td>"

                    ]);
                }
            }
        }
        $Z->setR('Tkm');
        $Z->setR('Tvzt1');
        $Z->setR('Tvzt2');
        $Z->setR('Tvzds');
        $mt->addTR([
            $Z->show('Tkm'),
            $Z->input('Tkm'),
        ]);

        $mt->addTR([
            $Z->show('Tvzt1')."<span class='tvz1 descr'></span>",
            $Z->input('Tvzt1'),
            $Z->show('Tvzt2')."<span class='tvz2 descr'></span>".
            $Z->input('Tvzt2')

        ]);


        $Z->setR('GKK');
        $Z->setR('VLP');
        $mt->addTR([
            $Z->show('GKK'),
            $Z->input('GKK').$Z->show('VLP').$Z->input('VLP'),

        ]);

        $Z->setR('sign');
        $mt->addTR([
            "знак ". $Z->input('sign')
        ]);


        $mt->addTR([
            '',
            $mt->newSubmit('Рассчитать'),

        ]);



        $table = $mt->getTable();


        $show .= $table;
        $allSteps =[];
        $type = $typeMain;
        $SQ=0;
//        $REQW = $_REQUEST['latD'];
//        $show.="<script>alert('$REQW')</script>";

        $CHECK = $Z->value('lng')+$Z->value('lat');
//        $CHECK=1;
        $error='';
        if(isset($_REQUEST['date'])&&$CHECK!=0) {
            $Al_GAK = new Al_GAK($Z->Args);


            for ($f = 0; $f < 2; $f++) {
                $SQ++;
                $Z->Args=$Al_GAK->kernelCalc(($f + 1));
                $allSteps[] = $Al_GAK->View($f+1);
            }

            for ($f = 0; $f < count($type); $f++) {
                if ($type[$f] == 'OC') {
                    $SQ++;
                    $Z->Args = $Al_GAK->kernelCalc(($f + 3));
                    $allSteps[] = $Al_GAK->View($f+3);

                } elseif ($type[$f] == 'A') {
                    $SQ++;

                    $allSteps[] = $Al_GAK->kernelViewS(($f + 3));

                }
            }

            $Al_GAK->set('SQ', $SQ);

            $show .= TaskTable::makeTable('Расчет Времни Гринвича', $allSteps, 'getTime');
            $show .= TaskTable::makeTable('Расчет часового угла и склонения', $allSteps, 'getT');
            $show .= TaskTable::makeTable('Решение параллактического треугольника', $allSteps, 'getA');
            $show .= TaskTable::makeTable('Поправка высоты', $allSteps, 'getH');
            $show .= TaskTable::makeTable('Определение переноса ВЛП', $allSteps, 'getN');
            $show .= TaskTable::makeTable('Элементы ВЛП', $allSteps, 'NA');
            $show .= TaskTable::makeTable('Время кульминации', $allSteps, 'Tk');
            $show .= TaskTable::makeTable('Восх/Зах', $allSteps, 'Tvz');
            $show .= TaskTable::makeTable('Поправка гирокомпаса', $allSteps, 'dGKK');



            for($i=1;$i<5;$i++){
                if($Al_GAK->value('dT_'.$i)>=0) {
                    $x = $Al_GAK->value('Tstart')+$Al_GAK->value('dT_'.$i);
                    $Tstart = new \DateTime();
                    $Tstart->setDate(date('Y',$Al_GAK->value('Tgr')),date('m',$Al_GAK->value('Tgr')),date('d',$Al_GAK->value('Tgr')));
                    $Tstart->setTime(date('H',$x),date('i',$x),date('s',$x));
                    $dtArr[] =$Tstart->getTimestamp();
                }
            }
            $minH =   min($dtArr);
            $JJ = json_encode($dtArr);
            $JJ = $Al_GAK->value('Tkgr');













//            $SQ = 3;





            /////////////////////////////////////////////////////РИсование//////////////////////////////////////////////

            for($i=0;$i<$SQ;$i++) {

                $AArr[]=$Z->value('Ao_'.($i+1));;
                $nArr[]=$Z->value('n_'.($i+1)) * 60;

            }

                $SVG = new SVGMaker();


                $CrossArr = [];
                $An = 0;
                $An2 = 0;


                $CrossQ = [0,1,3,6];
                ///Точки пересечения
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

//                $count = $CrossArr[2];
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



                    $scale = round(max($AllCrossArr)) + 1;
//                    $scale = 29;
                    $SVG->scale = $scale;
                if ($scale < 30) {
                    $grid = 1;
                    $error='';
                } else {
                    $grid = $scale / 10;
                    $error='<p class="errorMassage">Масштаб: 1кл='.$grid.'Возможна ошибка</p>';

                    $grid = 2;


                }

                $SVG->addGrid($grid);
                for($i=0;$i<$SQ;$i++) {
                    $SVG->addAN($AArr[$i], $nArr[$i] / 60);
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


                    if($Z->value('sign')==0){
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


                $getSVG = urlencode($SVG->getSVG());
                $show .= $SVG->getSVG();
                $show.="<br>";

                $descript = [];
                for($d=0;$d<$SQ;$d++){
                    $descript[]=['A'=>$Al_GAK->value('Ao_'.($d+1)), 'n'=>$Al_GAK->value('n_'.($d+1))];
                }

                $description = $SVG->addDescription($descript);
                $show.=$description;
                $getSVG.=urlencode("<br>".$description);


                $Al_GAK->observation($x12 / 60, -$y12 / 60);
                $tv = $Al_GAK->observationView();

                $show.="<br>";
                $show .= $tv->getTable();

                $Z->Args = $Al_GAK->Args;
            }else{
                $getSVG = '';

            }



        $object = json_encode($Z->Args);

        $resultView = "
        <form action='/result' method='post' target='_blank'><input type='submit'>
        ". csrf_field() ."
        <input name='object' value='{$object}'>
        <input name='svg' value='{$getSVG}'>
        </form>";
        $show.=$error;
        $show.=$resultView;
        return $show;


    }



    public function graph(){




    }


    public function getRequest($REQUEST, $type, $names){
        if($type=='datetime'){
            if (isset($REQUEST[$names[0]]) && isset($REQUEST[$names[1]])) {
                $datetime = $REQUEST[$names[0]] . " " . $REQUEST[$names[1]];

                if(count(explode(":",$REQUEST[$names[1]]))==2){
                    $datetime.=":00";
                }
            } else {
                $datetime = '2003-02-01 12:10:12';
            }

            $format = "Y-m-d H:i:s";
            $dateobj = \DateTime::createFromFormat($format, $datetime);
            $time = $dateobj->getTimestamp();

            return $time;
        }elseif ($type=='dm'){
            if (isset($_REQUEST[$names[0]])) {
                $D = $_REQUEST[$names[0]];
                $M = $_REQUEST[$names[1]];
            } else {
                $D = 20;
                $M = 10;
            }
            return $D + $M / 60;
        }elseif ($type=='time'){
            if (isset($_REQUEST[$names[0]])) {
                $time = $_REQUEST[$names[0]];
                if(count(explode(":",$REQUEST[$names[0]]))==2){
                    $time.=":00";
                }
            } else {
                $time = '00:00:00';
            }
            $format = "Y-m-d H:i:s";
            $dateobj = \DateTime::createFromFormat($format, "1970-1-1 " . $time);
            return $dateobj->getTimestamp();
        }elseif ($type=='B'){
            if (isset($_REQUEST['B'])) {
                $B = $_REQUEST['B'];
            } else {
                $B = 750;
            }
            return $B;
        }elseif ($type=='V'){
            if (isset($_REQUEST[$names[0]])) {
                $V = $_REQUEST[$names[0]];
            } else {
                $V = 10;
            }
            return $V;
        }elseif ($type=='e'){
            if (isset($_REQUEST[$names[0]])) {
                $e = $_REQUEST[$names[0]];
            } else {
                $e = 15;
            }
            return $e;
        }elseif ($type=='starNum'){
            if (isset($_REQUEST[$names[0]])) {
                $sn = $_REQUEST[$names[0]];
            } else {
                $sn = 0;
            }
            return $sn;
        }elseif ($type=='temp'){
            if (isset($_REQUEST[$names[0]])) {
                $temp = $_REQUEST[$names[0]];
            } else {
                $temp = 15;
            }
            return $temp;
        }elseif ($type=='deg'){
            if (isset($_REQUEST[$names[0]])) {
                $deg = $_REQUEST[$names[0]];
            } else {
                $deg = 0;
            }
            return $deg;
        }elseif ($type=='N'){
            if (isset($_REQUEST[$names[0]])) {
                $N1 = $_REQUEST[$names[0]];
                $N2 = $_REQUEST[$names[1]];
                if($N2=='W'){
                    $N = -$N1;
                }else{
                    $N = $N1;
                }
            } else {
                $N = 0;
            }
            return $N;


        }elseif ($type=='lat'){
            if (isset($_REQUEST[$names[0]])) {
                $D = $_REQUEST[$names[0]];
                $M = $_REQUEST[$names[1]];
                if ($_REQUEST[$names[2]] == 'S') {
                    return -$D-$M/60;
                }else{
                    return $D+$M/60;
                }
            }else{
                return 0;
            }
        }elseif ($type=='lng'){
            if (isset($_REQUEST[$names[0]])) {
                $D = $_REQUEST[$names[0]];
                $M = $_REQUEST[$names[1]];
                if ($_REQUEST[$names[2]] == 'W') {
                    return -$D-$M/60;
                }else{
                    return $D+$M/60;
                }
            }else{
                return 0;
            }
        }
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



}