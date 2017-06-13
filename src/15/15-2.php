<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 14:23
 */
$conn=mysqli_connect("localhost","root","")or die("数据库连接错误".mysqli_error());
mysqli_select_db($conn,"crmdjt") or die("访问数据库错误".mysqli_error());
mysqli_query($conn,"set names gb2312");
?>
<form method="post">
    <td> <input name="username" type="text" size="15"/></td>
    <td> <input name="submit" type="submit" /></td>
</form>
<?php
if(trim($_POST["username"])!=""){
    $usr=crypt(trim($_POST["username"]),"tm");
    $sql="select * from tb_user WHERE user ="."$usr.";
    $rst=mysqli_query($conn,$sql);
    if(mysql_num_rows($rst)>0){
        echo "<font color='red'>username has exites</font>";

    }else{
        echo "username can use";
    }
}
?>