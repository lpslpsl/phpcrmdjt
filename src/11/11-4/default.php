<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/6
 * Time: 11:00
 */
session_start();
$_SESSION["user"] = $_POST["user"];
$_SESSION["pwd"] = $_POST["pwd"];
if ($_SESSION["user"] == "") {
    echo "<script>
    alert(\"请通过正确途径登陆\")；
</script>";

} ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html">
    <link href="../CSS/style.css" rel="stylesheet">
    <title>判断操作权限</title>
    <style type="text/css">

    </style>
</head>
<body>
<table width="856" align="center">

    hello
</table>

<a href="safe.php">注销</a>
</body>
</html>
