<?php
require_once 'C:\xampp\htdocs\abroad_web\class\Model\ModelBase.php';

class CourceInsertDB extends ModelBase
{
    public function insert($data):bool
    {
        try{
            $sql = 'INSERT INTO study_abroad_plan(target_school, start_study_abroad, target_amount, period, plan_name) VALUES(:school,:start,:target_amount,:period,:cource_name)';
            $ans =  $this->db->prepare($sql);
            foreach ($data as $key => $value) {
                var_dump($value);
                if ($key === 'cource_name'){
                    $ans->bindValue(':'.$key,"$value");
                }
              $ans->bindValue(':'.$key,$value);
            }
            $result = $ans->execute();
            var_dump($ans->errorCode());
            return $result;
        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }

    }

}