<?php
require_once('ModelBase.php');

class AuthenticationDB extends ModelBase
{
    private $name = 'user';

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
//            var_dump($stmt);
//            $stmt->bindValue(':condition',$condition);
//            $stmt->bindValue(':body',$body);
            $rows = $stmt->fetchAll();
            return $rows;
        }catch (PDOException $e){
            echo $e->getMessage();
        }

    }



    // 商品追加
    public function passwordAdd($data)
    {
        $sql = sprintf('INSERT INTO %s ', $this->name);
        $res = $this->db->query($sql);
        return $res;
    }

}