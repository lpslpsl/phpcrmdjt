<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/14
 * Time: 11:12
 */
$dbms="mysql";
$host="localhost";
$dbname="crmdjt";
$user="root";
$pass="";
$dsn="$dbms:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "select * from test";
    $result = $pdo->prepare($query);
    $result->execute();
    while ($res = $result->fetch(PDO::FETCH_ASSOC)) {
        echo $res["name"] . "\n";
    }
} catch (PDOException $e) {
    echo "".$e->getMessage();
}