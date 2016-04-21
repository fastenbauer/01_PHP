<?php

require_once ('Task.php');
require_once ('rb.php');

R::setup('mysql:host=localhost; dbname=01php', 'root', '');

class MRepository
{
    private $tasks = [];

    public function save(Task $task)
    {
        $this->tasks[(string)$task->getId()] = $task;
    }

    public function getAll($item)
    {
        $tasks = R::findAll($item);
        return $tasks;
    }

    public function getByID($id)
    {
        if (isset($this->tasks[(string)$id]))
            return $this->tasks[(string)$id];
        else
            return null;
    }

    public function delete($id = null)
    {
        if ($id == null)
            unset($this->tasks);
        elseif (isset($this->tasks[(string)$id]))
            unset($this->tasks[(string)$id]);
    }
}