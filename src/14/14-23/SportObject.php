<?php

/**
 * Created by PhpStorm.
 * User: $lps
 * Date: 2017/6/13
 * Time: 14:05
 */
class SportObject
{
private $count;

    /**
     * SportObject constructor.
     * @param $count
     */

    public function __construct($count)
    {
        $this->count = $count;
    }

    public function __toString()
    {
       return $this->count;
    }
}