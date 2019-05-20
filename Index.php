<?php
include "Contrib.php";

$contr = New Contrib();



?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <div class="">
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
            <? $contr->setContribution() ?>
        </div>

  </body>
</html>
