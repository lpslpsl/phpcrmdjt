<?php

/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 11:15
 */
class demo14_19
{
    private $type;

    private function __get($name)
    {
        if (isset($this->$name)){
        echo "变量name的值为" . $name;
    }else{
        echo "变量".$name.".未定义初始化为0";
        $this->$name = 0;
    }
    }
    private function __set($name, $value)
    {
      if(isset($this->$name)){
        $this->$name=$value;
        echo "变量".$name."的值为".$value;
    }else{
        $this->$name=$value;
echo "变量$name 未定义被初始化为$value";
    }
    }

}
$var1=new demo14_19();
$var1->name;