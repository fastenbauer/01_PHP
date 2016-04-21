<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 19.04.2016
 * Time: 11:03
 */

require_once ('rb');

R::setup('mysql:host=localhost; dbname=01php', 'root', '');

class ItemRepository
{
    private $tasks = [];

    public function save(Task $task)
    {
        $this->tasks[(string)$task->getId()] = $task;
    }

    public function getAll()
    {
        return $this->tasks;
    }

    public function getByID($id)
    {
        if (isset($this->tasks[(string)$id]))
            return $this->tasks[(string)$id];
        else
            return null;
    }

    public function deleteByID($id = null)
    {
        if ($id == null)
            unset($this->tasks);
        elseif (isset($this->tasks[(string)$id]))
            unset($this->tasks[(string)$id]);
    }
}