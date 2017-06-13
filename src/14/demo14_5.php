<?php

/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 10:26
 */
class demo14_5
{
public $name,$height;

    /**
     * demo14_5 constructor.
     * @param $name
     * @param $height
     */
    public function __construct($name, $height)
    {
        $this->name = $name;
        $this->height = $height;
    }
    function  baseBasketball(){
        if($this->name!=""&&$this->height>180){
            echo "ok";
        }else{
            echo "err";
        }
    }
function __destruct()
{
echo "对象被销毁".date("y-i-d H:m:s");
}
}
$demo=new demo14_5("as",189);
$demo->baseBasketball();
