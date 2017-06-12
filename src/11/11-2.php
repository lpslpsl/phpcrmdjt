<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/6
 * Time: 9:47
 */
if(!isset($_COOKIE["visittime"])){
    setcookie("visittime",date("y-m-d H:i:s"));
    echo "首次访问";
}else{
    setcookie("visittime",date("y-m-d H:i:s"),time()+60);
    echo "上次访问时间".$_COOKIE["visittime"];

}
echo "你本次访问的时间为".date("y-m-d H:i:s");