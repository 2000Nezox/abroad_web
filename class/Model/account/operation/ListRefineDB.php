<?php
require_once($_SERVER['DOCUMENT_ROOT'].'\abroad_web\class\Model\account\operation\ListDB.php');


class ListRefineDB extends ListDB

{
    public function refineList($sql,$attribute, $content)
    {
        try{
            $sql = sprintf($sql, $this->name,$attribute,$content);
//            var_dump($sql);
            $stmt = $this->db->query($sql);
            $rows = $stmt->fetchAll();
            return $rows;
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}