<?php
require_once('C:\xampp\htdocs\abroad_web\class\Model\ModelBase.php');

class AuthenticationDB extends ModelBase
{
    private $name = 'teacher';

    //全部習得
    public function allList()
    {
        $sql = sprintf('SELECT * FROM %s', $this->name);
        $stmt = $this->db->query($sql);
        $rows = $stmt->fetchAll();
        return $rows;
    }

    // 条件で習得
    public function getList($condition, $body)
    {
        try{
            $sql = sprintf('SELECT * FROM %s where %s = %s', $this->name,$condition,$body);
            $stmt = $this->db->query($sql);
            $rows = $stmt->fetchAll();
            return $rows;
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }


}