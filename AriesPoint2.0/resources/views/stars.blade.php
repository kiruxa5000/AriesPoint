<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 08.01.18
 * Time: 11:12
 */
for ($i=0;$i<500;$i++){
    $x=rand(10,990)/10;
    $y=rand(10,990)/10;
    echo "<div class='star' style='left:$x%; top:$y%;'></div>";
}