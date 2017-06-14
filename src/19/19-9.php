<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/14
 * Time: 11:27
 * 事务
 */
$dbms = "mysql";
$user = "root";
$pass = "";
$host = "localost";
$dbname = "crmdjt";
$dsn = "$dbms:host=$host;dbname=$dbname";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->beginTransaction();
    $query = "insert into test (name) VALUES ('1351')";
    $result = $pdo->prepare($query);
    if ($result->execute()) {
        echo "数据添加成功";
    } else {
        echo "数据添加失败";
    }
    $pdo->commit();
} catch (PDOException $e) {
    echo $e->getMessage();
    die($e->getMessage());
    $pdo->rollBack();
}