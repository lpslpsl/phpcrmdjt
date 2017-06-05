<?php
/**
 * Created by PhpStorm.
 * User: dangxiaohui
 * Date: 2017/5/25
 * Time: 9:58
 */
function examlple(&$m){
    $m=$m*5+10;
    echo $m;
}

$x=10;
examlple($x);
echo  "x=".$x;