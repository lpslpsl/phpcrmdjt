<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 14:21
 */
$str="this is an example";
echo "加密前".$str;
//$cryptstr=crypt($str);
$cryptstr=crypt($str,"tm");
echo "加密后".$cryptstr;
