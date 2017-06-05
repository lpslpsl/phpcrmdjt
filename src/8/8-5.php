<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form name="form1" method="post" action="8-5.php">
    username:<input type="text" name="user" size="5">
    pwd$nbsp:<input type="password" name="pwd" id="pwd" size="6">
    <input type="submit" name="sub" value="submit" id="submit">
</form>
<?php
if($_POST["sub"]=="submit"){
echo "username:".$_POST["user"]."pwd:".$_POST["pwd"];
}
?>
</body>
</html>