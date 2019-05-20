<?php



class Contrib
{

    public $profit; // профит, сколько получит
    public $summ; // сумма вклада
    public $i; // годовая ставка по депозиту
    public $months;  // срок депозита (количество месяцев)
    public $k; // число месяцев в году

    function __construct ()
    {
        $this->summ = isset($_POST['summ']) ? $_POST['summ'] :'' ;
        $this->i = isset($_POST['i']) ? $_POST['i'] : '';
        $this->months = isset($_POST['months']) ? $_POST['months'] : '';
        $this->k = 12;
    }

    private function  getContribution()
    {
        if ($_POST['summ'] && $_POST['i'] && $_POST['months']) {
            $this->profit = ($this->summ * $this->i * ($this->months / $this->k))  / 100;
            return  $this->profit;
        }else {
            echo 'Введите все данные';
        }

    }

     public function setContribution()
    {
        if (isset($_POST['go'])) {
            echo ($this->getContribution());
        }
    }
}
