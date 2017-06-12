<?php
/**给照片添加文字
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/6
 * Time: 14:08
 */
header("content-type:image/jpeg");
$im=imagecreatefromjpeg("image/photo.jpg");
$textcolor=imagecolorallocate($im,56,73,136);
$motto=iconv("gb2312","utf-8","长白山天池");
$font="c:/windows/fonts/micross.ttf";
imagettftext($im,220,0,480,340,$textcolor,$font,$motto);
imagejpeg($im);
imagedestroy($im);