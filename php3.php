<?php



class php3
{
    private $num1;
    private $num2;

    function __construct()
    {
        $this->num1 = isset($_POST['num1']) ? $_POST['num1'] :'' ;
        $this->num2 = isset($_POST['num2']) ? $_POST['num2'] :'' ;
    }

    private function getValue()
    {
        if ($_POST['select'] == '+') {
            $res = $this->num1 + $this->num2;
        } elseif ($_POST['select'] == '-') {
           $res = $this->num1 - $this->num2;
       }  elseif ($_POST['select'] == '*') {
            $res = $this->num1 * $this->num2;
        } elseif ($_POST['select'] == '/') {
            $res = $this->num1 / $this->num2;
        }
        return $res;
    }

    public function setRes()
    {
        if ($_POST['count'] && (!$this->num1 || !$this->num2)){
            echo 'Введите оба числа';
        } else {
            echo $this->getValue();
        }

    }
}
