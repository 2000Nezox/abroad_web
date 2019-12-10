<?php
require_once 'C:\xampp\htdocs\abroad_web\class\Model\setting\cource\CourceInsertDB.php';

class CourceInsert
{
    private $db;

    public function __construct()
    {
        $this->db = new CourceInsertDB();
    }

    public function insert($data): string
{
    $ans = $this->db->insert($data);
    if ($ans) {
        return '成功しました';
    } else {
        return '失敗しました';
    }
}
}