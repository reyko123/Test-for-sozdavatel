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

    private function getDegree()
    {
    if($_POST['degree']) {
        $h = $this->hours;
        $m = $this->minuts;
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
