<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/6
 * Time: 13:51
 */
session_start();
unset($_SESSION["user"]);
unset($_SESSION["pwd"]);
session_destroy();
header("location:index.php");