<?php

/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 10:09
 */
class demo14_3
{
const BOOK_NAME="计算机图书";
    public $obj_name;

    public function setObjName($obj_name)
    {
        $this->obj_name = $obj_name;
    }

    /**
     * @return mixed
     */
    public function getObjName()
    {
        return $this->obj_name;
    }

}

$c_book=new demo14_3();
$c_book->setObjName("php类");
echo demo14_3::BOOK_NAME;
echo "<br>".$c_book::BOOK_NAME;
echo "<br>".$c_book->getObjName();