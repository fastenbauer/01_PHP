<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 19.04.2016
 * Time: 11:10
 */

class category
{
    private static $ids = 0;

    private $id;
    public function getId() {
        return $this->id;
    }

    public $title;

    public function __construct(array $data)
    {
        $this->id = ++self::$ids;
        if(isset($data['title']))
            $this->title = $data['title'];
    }
}