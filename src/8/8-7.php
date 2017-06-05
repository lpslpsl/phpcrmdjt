<form name="form1" action="8-7.php" method="post">
    <table width="445">
        <tr>
            <td width="443" height="41" align="center" valign="top">select
                <input type="checkbox" name="mrbook[]" value="rumen">rumen
                <input type="checkbox" name="mrbook[]" value="anli">anli
                <input type="checkbox" name="mrbook[]" value="jiangjie">jiangjie
                <input type="checkbox" name="mrbook[]" value="shili">shili

                <input value="submit" type="submit">
            </td>

        </tr>
    </table>
</form>
<?php
/**
 * 多选form表单提交demo
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/5
 * Time: 10:16
 */
if($_POST["mrbook"]!=null){
    echo "your selected:";
  for($i=0;$i<count($_POST["mrbook"]);$i++){
      echo $_POST["mrbook"][$i];
  }
}