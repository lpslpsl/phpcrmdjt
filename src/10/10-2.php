<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/5
 * Time: 17:00
 */
$newxt_week=time()+7*24*60*60;
echo "now:".date("Y-m-d");
echo "nextWeek:".date("Y-m-d",$newxt_week);