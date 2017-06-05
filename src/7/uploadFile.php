<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/2
 * Time: 15:27
 */
if ($_FILES["file"]["error"] > 0) {
    echo "ERROR:" . $_FILES["file"]["error"];
} else {
    echo "upLoad" . $_FILES["file"]["name"] . "<br>";
        echo "TYPR:" . $_FILES["file"]["type"] . "<br>";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
}