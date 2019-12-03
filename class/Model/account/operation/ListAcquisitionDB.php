<?php
require_once($_SERVER['DOCUMENT_ROOT'].'\abroad_web\class\Model\account\operation\ListDB.php');


class ListAcquisitionDB extends ListDB
{
    public function normalList($sql)
    {
        try{
            $sql = sprintf($sql, $this->name);
            $stmt = $this->db->query($sql);
            $rows = $stmt->fetchAll();
            return $rows;
        }catch (PDOException $e){
            $e->getMessage();
        }
    }
}