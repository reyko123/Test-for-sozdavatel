<?php

/**
 * Угол между стрелками часов
 */

class php5
{
    private $hours;
    private $minuts;

    function __construct(){
    $this->hours = $_POST['hours'];
    $this->minuts = $_POST['minuts'];
    }
    // Расчет градусов + проверки
    private function getDegree()
    {
        if($_POST['degree']) {
            if($this->hours>24) {
                exit("В сутках, к сожалению, всего 24 часа");
            } else {
            $h = $this->hours;
            }

            if($this->minuts>60) {
                exit("В часу всего 60 минут");
            } else {
            $m = $this->minuts;
            }

            $res = ($h+($m/60))*30 -$m*6;
            if($res>360) {
                $res = $res - 360;
            }
            return $res;
        }
    }

    public function printRes()
    {
        echo $this->getDegree();
    }
}
