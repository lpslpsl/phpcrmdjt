<?php
/**简单的创建图片
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/6
 * Time: 14:03
 */
$img=imagecreate(200,60);
$white=imagecolorallocate($img,225,66,159);
imagegif($img);