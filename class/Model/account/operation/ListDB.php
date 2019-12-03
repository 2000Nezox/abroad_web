<?php
require_once ('C:\xampp\htdocs\abroad_web\class\Model\ModelBase.php');

class ListDB extends ModelBase
{
    protected $name;

    public function __construct($e)
    {
        parent::__construct();
        $this->name = $e;
    }
}