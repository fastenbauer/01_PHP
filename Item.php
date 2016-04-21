<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 19.04.2016
 * Time: 11:02
 */

namespace RedBeanPHP;


class item
{
    private static $ids = 0;

    private $id;
    public function getId()
    {
        return $this->id;
    }
    public $description;
    public $date;
    public $category;

    public function __construct(array $data)
    {
        $this->id = ++self::$ids;
        if(isset($data['title']))
            $this->description = $data['title'];
        if(isset($data['tofinish']))
            $this->date = $data['tofinish'];
        if(isset($data['category']))
            $this->category = $data['category'];
    }
}