
<form action="8-6.php" method="post" name="form1">
gender:
    <input name="sex" type="radio" value="1" checked> male
    <input name="sex" type="radio" value="0">female
    <input type="submit" name="submit" value="subimt">

</form>
<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/5
 * Time: 10:10
 */
echo "gender".$_POST["sex"];