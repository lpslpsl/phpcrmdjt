<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="150" height="30" align="right" >choose file:

            </td>
            <td width="150"><input type="file" name="upfile"/></td>
            <td width="100"> <input type="submit" name="submit"></td>
        </tr>
    </table>

</form>
<?php
/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/12
 * Time: 15:59
 * 文件上传
 */
if(!empty($_FILES)){

    foreach($_FILES["upfile"] as $name=>$value){
        echo $name."=".$value;
    }
}
