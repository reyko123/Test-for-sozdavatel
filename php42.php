<?php

/**
 * Вывод изображений
 */

class php42
{

    public function PrintImage()
    {
        $images = [];
        $images = scandir ('./images');
        foreach ($images as $key => $value) {
            if ($value !='.' && $value != '..'){
                echo "<img src=". './images/'.  $value. ">". "<br />";
            }
        }
    }

}
