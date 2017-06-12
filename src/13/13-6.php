<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/12
 * Time: 14:35
 */
$path="D://Android";
if(is_dir($path)){
$dir=scandir($path);
    foreach($dir as $value){
        echo $value. "<br>";
    }
}else
echo "目录错误";
