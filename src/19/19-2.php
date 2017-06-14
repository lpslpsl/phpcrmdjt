<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/14
 * Time: 10:24
 */
$dbms="mysql";
$host="localhost";
$dbname="crmdjt";
$user="root";
$pass="";
$dsn="$dbms:host=$host;dbname=$dbname";
$pdo=new PDO($dsn,$user,$pass);
$query="select * from test ";
$result=$pdo->prepare($query);
$result->execute();
$res=$result->fetchAll(PDO::FETCH_ASSOC);
for($i=0;$i<count($res);$i++){
    echo $res[$i]["name"]."\n";
}
