<form method="post" name="form1" action="8-3.php">
<table width="300">
    <tr>
        <td height="30">
            content:
            <input type="text" name="user" size="20">
            <input type="submit" name="submit" value="commit">

        </td>
    </tr>
</table>

</form>

<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/5
 * Time: 9:48
 */
echo $_POST["user"];