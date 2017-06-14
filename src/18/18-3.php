<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 15:46
 */
$link=mysqli_connect("localhost","root","","crmdjt");
if($link){
    $sql="SELECT * FROM `tb_user`";
//    $sql="INSERT INTO `tb_user`(`user`) VALUES ('af;l') ";
$res= mysqli_query($link,$sql);
$row= mysqli_fetch_array($res);
    var_dump($row);
}