<table width="500" border="1">
    <tr>
        <td width="253" height="100" align="right" valign="middle" scope="col">
使用readfile读取文件内容：
        </td>
        <td>
            <?php
            readfile("tm.txt");
            ?>
        </td>

    </tr>
    <tr>
        <td height="100" valign="middle" align="right">使用file读取文件内容

        </td>
        <td height="100" valign="middle" align="right">
            <?php
            $arr=file("tm.txt");
            foreach($arr as $cont){
                echo $cont;
            }
            ?>
        </td>
    </tr>
    <tr>
        <td height="100" align="right" valign="middle">
            使用file_get_contents()读取文件内容:
        </td>
        <td>
            <?php

            $chr=file_get_contents("tm.txt");
            echo $chr;
            ?>

        </td>
    </tr>
</table>
<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/12
 * Time: 13:58
 */