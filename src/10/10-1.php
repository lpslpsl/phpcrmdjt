<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/5
 * Time: 16:39
 */
date_default_timezone_set("Asia/Hong_Kong");
echo "timestamp:".mktime()."<p>";
echo "date".date("y-m-d",mktime())."<p>";
echo "hour".date("H-i-s",mktime()).'<p>';