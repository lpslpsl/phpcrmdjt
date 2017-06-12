<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/12
 * Time: 14:17
 */
$fp=fopen("tm.txt","rb");
echo fread($fp,5);
echo "<p>";
echo fread($fp,filesize("tm.txt"));