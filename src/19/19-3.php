<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/14
 * Time: 10:41
 */
$dbms="mysql";
$host="localhost";
$dbname="crmdjt";
$user="root";
$pass="";
$dsn="$dbms:host=$host;dbname=$dbname";
$pdo=new PDO($dsn,$user,$pass);
$query="select * from test";
$result=$pdo->prepare($query);
$result->execute();
echo $result->fetchColumn(0)."\n";
echo $result->fetchColumn(0)."\n";
echo $result->fetchColumn(0);
