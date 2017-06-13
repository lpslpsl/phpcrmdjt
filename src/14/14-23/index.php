<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 14:06
 */
require_once "SportObject.php";
//function __autoload($class_name){
//    $class_path=$class_name."class.php";
//    if(file_exists($class_path)){
//        include_once ($class_path);
//    }else{
//        echo "类路径错误";
//    }
//}
$myvar=new SportObject("xx");
echo $myvar;