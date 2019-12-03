<?php
require_once('C:\xampp\htdocs\abroad_web\class\Model\account\operation\ListDB.php');

class CategoryLearningDB extends ListDB
{
    public function category_list($lst)
    {
        $category_list = [];
        foreach ($lst as $key=>$value){
            try{
                $sql = sprintf('
                    SELECT
                        %s
                    FROM
                         %s
                    ;
                ',$value,$key);
                $stmt = $this->db->query($sql);
                $rows = $stmt->fetchAll();
                $category_list[$key] = $rows;
            }catch (PDOException $e){
                echo $e->getMessage();
            }
        }
        return $category_list;
    }
}