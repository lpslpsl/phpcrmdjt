<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/12
 * Time: 14:14
 */
$fopen=fopen("tm.txt","rb");
$count=0;
while(false!==($char=fgetc($fopen))){
    $count++;
    echo $char;
}
echo $count;
fclose($fopen);