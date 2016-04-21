<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 19.04.2016
 * Time: 11:03
 */

namespace RedBeanPHP;

require_once ('rb.php');

class ToDoRepository
{
    private $items = [];

    function save(Item $item)
    {
        $this->items[(string)$item->getId()] = $item;
    }

    function getAll()
    {
        return $this->items;
    }

    function getByID($id)
    {
        if (isset($this->items[(string)$id]))
        {
            return $this->items[(string)$id];
        }
        else
        {
            return null;
        }
    }

    function delete($id = null)
    {
        if ($id == null)
        {
            unset($this->members);
        }
        else if (isset($this->items[(string)$id]))
        {
            unset($this->items[(string)$id]);
        }
    }
}