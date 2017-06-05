<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/5/26
 * Time: 10:10
 */

$str="XXsdkmalx;oijwlmmxl,xasfd";
$str1="*";
$str2="x";
echo  str_ireplace($str2,$str1,$str);//不区分大小写的
echo  str_replace($str2,$str1,$str);//区分大小写的
echo  substr_replace($str2,$str1,$str,1);//从位置1开始替换,默认是替换整个
