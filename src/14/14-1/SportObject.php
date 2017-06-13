<?php

/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 9:42
 */
class SportObject
{




    function beatBasketball($name, $height, $avoirdupois, $age, $sex){
    if($height>180&&$avoirdupois<=100){
        return $name."符合要求";
    }else{
        return $name."不符合要求";

    }
}
}

$sport=new SportObject();
echo $sport->beatBasketball("xx",181,111,25,"man");