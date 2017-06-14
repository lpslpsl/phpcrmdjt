<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 15:37
 */
$link=mysqli_connect("localhost","root","","crmdjt")or die("失败".mysqli_connect_error());
if($link){
    echo "success";
}
