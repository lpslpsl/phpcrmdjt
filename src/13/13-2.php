<table border="1">
    <tr>
        <td align="right" valign="middle" scope="col">use fgets function</td>
        <td align="center" valign="middle" >
            <?php
            $fopen=fopen("13-1.php","rb");
            while(!feof($fopen)){
                echo fgets($fopen);
            }
            fclose($fopen);
            ?>
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle" scope="col">use fgetss function</td>
        <td align="center" valign="middle" >
            <?php
            $fopen=fopen("13-1.php","rb");
            while(!feof($fopen)){
                echo fgetss($fopen);
            }
            fclose($fopen);
            ?>
        </td>
    </tr>
</table>
<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/12
 * Time: 14:08
 */