<form method="post">
    <table width="300">
        <tr>
            <td height="30" align="center" valign="middle">请选择</td>
        </tr>
        <tr>
            <td align="center" valign="middle">
                <select name="select[]" size="5" multiple>
                    <option value="程序开发范例宝典1">程序开发范例宝典1</option>
                    <option value="程序开发范例宝典2">程序开发范例宝典2</option>
                    <option value="程序开发范例宝典3">程序开发范例宝典3</option>
                    <option value="程序开发范例宝典4">程序开发范例宝典4</option>
                    <option value="程序开发范例宝典5">程序开发范例宝典5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td height="30" align="center" valign="middle">
                <input type="submit" name="submit" value="提交">
            </td>
        </tr>
    </table>
</form>
<?php
/**
 * 多选菜单列表
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/5
 * Time: 13:21
 */
if($_POST["submit"]=="提交"){
    var_dump($_POST["select"]);
}