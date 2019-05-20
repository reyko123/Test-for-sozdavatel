<?php
include "php1.php";
include "php2.php";
include "php3.php";

$php1 = New php1();
$php2 = New php2();
$php3 = New php3();



?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <!-- 1ое задание - вклад-->
      <div>
         <form  method="post">
             <input type="number" name="summ" placeholder="сумма вклада" >
             <br />
             <input type="number" name="i" placeholder="ставка по депозиту (%)" >
             <br />
             <input type="number" name="months" placeholder="срок депозита (мес)" >
             <br />
             <input type="submit" name="go" value="Расчитать" >
          </form>
        </div>
        <div>
            <? $php1->setContribution() ?>
        </div>

        <!-- 2ое задание - месяцы-->
        <div>
            <form  method="post">
                <input type="number" name="mes" placeholder="месяц" >
                <br />
                <input type="number" name="day" placeholder="день" >
                <br />
                <input type="submit" name="otpr" value="Тест" >
             </form>
        </div>
        <div>
            <?$php2->setMes() ?>
        </div>

        <!-- 3ее задание - калькулятор-->
        <div >
            <form  method="post">
                <input type="number" name="num1" >
                <select name="select">
                      <option  selected>+</option>
                      <option>-</option>
                      <option>*</option>
                      <option>/</option>
                </select>
                <input type="number" name="num2">
                <br />
                <input type="submit" name="count" value="Посчитать" >
            </form>
        </div>
        <div >
            <? $php3->setRes();?>
        </div>
  </body>
</html>
