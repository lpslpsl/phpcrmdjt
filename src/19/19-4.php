<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/14
 * Time: 10:46
 * pdo默认模式
 */
$dbms="mysql";
$host="localhost";
$dbname="crmdjt";
$user="root";
$pass="";
$dsn="$dbms:host=$host;dbname=$dbname";
$pdo=new PDO($dsn,$user,$pass);
$query="insert into test (name)  VALUES ('2')";
$result=$pdo->prepare($query);
$result->execute();
$code=$result->errorCode();
var_dump($code);
if(empty($code)){
    echo "success";
}else{
    echo "fail\n$query\n";
    var_dump($result->errorInfo());
}

for($i=0;$i<100000*1000;$i++){
    echo "$i\n";
}
