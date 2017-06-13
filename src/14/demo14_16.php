<?php

/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 11:11
 */
class demo14_16
{
private $object_type="book";

    /**
     * @return string
     */
    public function getObjectType()
    {
        return $this->object_type;
    }

    /**
     * @param string $object_type
     */
    public function setObjectType($object_type)
    {
        $this->object_type = $object_type;
    }

    public function __clone()
    {
      $this->object_type="other";
    }
}
$book1=new demo14_16();
$book2=clone  $book1;
echo "book1".$book1->getObjectType();
echo "book2".$book2->getObjectType();