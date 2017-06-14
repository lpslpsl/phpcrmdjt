<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/14
 * Time: 9:58
 * 查询表中的所有元素
 */
$dbms="mysql";
$host="localhost";
$dbname="crmdjt";
$user="root";
$pass="";
$dsn="$dbms:host=$host;dbname=$dbname";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $query = "select * from tb_user";
//    $query = "insert into test (name) values('xxa')";
    $result = $pdo->prepare($query);
    $result->execute();
    while ($res = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "$res[user]"."\n";
    }
} catch (PDOException $e) {
die($e->getMessage());
}
