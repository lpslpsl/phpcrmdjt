<form action="default.php" method="post" name="form1">
    <table width="521">
        <tr>
            <td valign="top" background="images/login.jpg">
                <table width="521">
                    <tr>
                        <td height="24" align="right">用户名:</td>
                        <td height="24" align="left"><input type="text" size="20" name="user" id="user"></td>
                    </tr>
                    <tr>
                        <td height="24" align="right">密码:</td>
                        <td height="24" align="left"><input type="password" name="pwd" id="pwd" size="20"></td>
                    </tr>
                    <tr align="center">
                        <td>
                            <input type="submit" name="submit" value="登陆" onclick="return check(form)">
                            <input type="reset" name="reset" value="重置">
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</form>
<script>
    function check(form) {
        if (form.user.value == "") {
            alert("username can't be null");
        }
        if (form.pwd.value == "") {
            alert("please input password")；
        }
    }
</script>
<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/6
 * Time: 11:00
 */