<?php

class php2
{
    private $mes;
    function __construct()
    {
        $this->mes = isset($_POST['mes']) ? $_POST['mes'] :'' ;
    }

    private function getMes()
    {
        $month = [
            1 => 'января',
            2 => 'февраля',
            3 => 'марта',
            4 => 'апреля',
            5 => 'мая',
            6 => 'июня',
            7 => 'июля',
            8 => 'августа',
            9 => 'сентября',
            10 => 'октября',
            11 => 'ноября',
            12 => 'декабря'
        ];

       print_r ($month [$this->mes]);
    }

    public  function setMes()
    {
        if ($this->mes < 1 || $this->mes > 12) {
            echo 'введите месяц от 1 до 12';
        } else {
             $this->getMes();
        }
    }
}
