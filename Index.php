<?php
include "php1.php";
include "php2.php";
include "php3.php";
include "php4.php";
include "php42.php";
include "php5.php";

$php1 = New php1();
$php2 = New php2();
$php3 = New php3();
$php4 = New php4();
$php42 = New php42();
$php5 = New php5();
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Тествое php</title>
    </head>
    <body>
        <!-- 1ое задание - вклад-->
        <div>
            <p>1ое задание - вклад</p>
        </div>
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
            <p>2ое задание - месяцы</p>
        </div>
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
        <div>
            <p>3ее задание - калькулятор</p>
        </div>
        <div>
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
        <div>
            <?$php3->setRes();?>
        </div>

        <!-- 4ое задание - галерея-->
        <div>
            <p>4ое задание - галерея</p>
        </div>
        <div>
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="image">
                <input type="hidden" name="MAX_FILE_SIZE" value="10000">
                <input type="submit" name="send" value="Отправить">
                </form>
        </div>
        <div>
            <?$php4->moveUpload();?>
        </div>
        <div>
            <? $php42->PrintImage();?>
        </div>

        <!-- 5ое задание - градусы между стрелками -->
        <div>
            <p>5ое задание - градусы между стрелками</p>
        </div>
        <div>
            <form method="post">
                <input type="number" name="minuts" placeholder="минуты" >
                <br />
                <input type="number" name="hours" placeholder="часы" >
                <br />
                <input type="submit" name="degree" value="Расчитать" >
            </form>
        </div>
        <div>
            <?$php5->printRes()?>
        </div>
    </body>
</html>
