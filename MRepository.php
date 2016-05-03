<?php

require_once ('Task.php');
require_once ('rb.php');


try
{
    R::setup('mysql:host=localhost; dbname=01php', 'root', '');
}
catch (Exception $ex)
{
    return $ex;
}

class MRepository
{
    private $tasks = [];

    public function save(Task $task)
    {
        
    }

    public function getAll($item)
    {
        $tasks = R::findAll($item);
        return $tasks;
    }

    public function getByID($id)
    {
    }

    public function delete($id = null)
    {
    }
}