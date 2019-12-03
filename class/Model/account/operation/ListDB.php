<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'\abroad_web\class\Model\ModelBase.php');

class ListDB extends ModelBase
{
    protected $name;

    public function __construct($e)
    {
        parent::__construct();
        $this->name = $e;
    }
}