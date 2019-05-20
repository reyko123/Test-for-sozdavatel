<?php
include "php1.php";
include "php2.php";

$php1 = New php1();
$php2 = New php2();



?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <!-- 1ое задание -->
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

        <!-- 2ое задание -->
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
            <?= $_POST['day']?>
            <?$php2->setMes() ?>
        </div>

  </body>
</html>
