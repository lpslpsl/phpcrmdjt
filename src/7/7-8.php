<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/2
 * Time: 15:20
 */
$str="sad.asf3r.sffd.dfgfd.dfh";
$strs=explode(".",$str);
//print_r($strs);
//echo count($strs);
echo array_search("a",$strs,true);