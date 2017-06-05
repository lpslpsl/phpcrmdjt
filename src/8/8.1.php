
<form name="form1" method="post" action="8.1.php">
    <textarea name="a" cols="20" rows="3" wrap="soft">ruanhuiche ,shuchuhoubuhuanhang</textarea>
    <textarea name="b" cols="20" rows="3" wrap="hard">yinghuiche ,shuchuhoubuhuanhang</textarea>
    <input type="submit" name="submit" value="tijiao">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/2
 * Time: 16:46
 */
echo nl2br($_POST["a"]);
echo nl2br($_POST["b"]);