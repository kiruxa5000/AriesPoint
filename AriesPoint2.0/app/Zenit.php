<?php
/**
 * Created by PhpStorm.
 * User: zolkinka
 * Date: 02.02.18
 * Time: 21:56
 */

namespace App;
use App\Request;
use App\MainTable;
use App\Argument;
use App\Library;


////Класс для создания и управления основной таблицей ввода и данными в ней хранящимися

class Zenit extends Argument
{
    public $REQUEST;
    public $REQ;
    public $Ar;
    public $MainTable;

    /**
     * Zenit constructor.
     * @param $REQUEST
     */
    public function __construct($REQUEST)
    {
        $this->REQUEST = $REQUEST;
        $this->REQ = new Request($REQUEST);
        $this->Ar = new Argument();
        $this->MainTable = new MainTable();
    }

    public function addTRInput($names){

}
    public function input($name){
       return $this->MainTable->newInput($name,$this->value($name),$this->type($name));
    }


}