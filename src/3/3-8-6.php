<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/5/25
 * Time: 10:34
 */
$num=123;
$math=&$num;
echo "math:".$math."num:".$num;
unset($num);
echo "math:".$math."num:".$num;