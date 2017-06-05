<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/5/26
 * Time: 11:06
 */
$array=array(1=>"hello",2=>"world",4=>1);
$array1=([532,3,"yu",$array]);
foreach($array1 as $arr){

    print_r($arr)  ;
}
//print_r($array1);