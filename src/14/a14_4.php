<?php

/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 10:22
 */
class a14_4
{
public $name,$height;

    /**
     * a14_4 constructor.
     * @param $name
     * @param $height
     */
    public function __construct($name, $height)
    {
        $this->name = $name;
        $this->height = $height;
    }

    function baseBasketBall(){
        if($this->name!=""&&$this->height>180){
            echo "ok";
        }else{
            echo "err";
        }
    }
}

$a=new a14_4(null,181);
$a->baseBasketBall();