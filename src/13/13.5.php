<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/12
 * Time: 14:22
 */
$filepath="13-5.txt";
$str="此情可待成追忆，只是当时已惘然";
echo "写入文件";
$fopen=fopen("$filepath","wb") or die("文件不存在");
fwrite($fopen,$str);
fclose($fopen);
readfile($filepath);
echo "put 写入";
file_put_contents($filepath,$str);
readfile($filepath);