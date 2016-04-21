<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 21.04.2016
 * Time: 10:04
 */

interface MRepository
{
    public function save();
    public function getAll();
    public function getByID($id);
    public function deleteByID($id = null);
}