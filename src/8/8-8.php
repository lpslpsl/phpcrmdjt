<form name="form1" method="post" action="8-8.php">
    <table width="280">
        <tr>
            <td width="80" height="20" align="ceter"><span>意见主题</span></td>
            <td width="194">
                <select name="select" size="3" >
                    <option value="gongsifazhan" selected>gongsifazhan</option>
                    <option value="guanlizhidu">guanlizhidu</option>
                    <option value="houqinfuwu">houqinfuwu</option>
                    <option value="houqinfuwu">houqinfuwu</option>
                    <option value="houqinfuwu">houqinfuwu</option>

                </select>
                <input type="submit" name="submit" value="sub">
            </td>

        </tr>
    </table>
</form>

<?php
/**获取下拉列表框的值
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/5
 * Time: 10:27
 */
if ($_POST["select"] != "") {
    for ($i = 0; $i < count($_POST["select"]); $i++) {
        echo $_POST["select"][$i];
    }
}
