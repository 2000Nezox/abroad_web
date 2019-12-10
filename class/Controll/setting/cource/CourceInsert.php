<?php


class CourceInsert
{
    private $db;

    public function __construct()
    {
        $this->db = new CourceInsert();
    }

    public function insert(): string
    {
        $data = [
            '' => $_POST[''],
            '' => $_POST[''],
            '' => $_POST[''],
            '' => $_POST[''],
        ];
        $ans = $this->db->insert($data);
        if ($ans) {
            return '成功しました';
        } else {
            return '失敗しました';
        }
    }
}