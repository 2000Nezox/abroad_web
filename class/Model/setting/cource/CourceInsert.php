<?php


class CourceInsert
{
    public function insert($data):bool
    {
        try{
            $sql = "INSERT INTO study_abroad_plan(target_school, start_study_abroad, end_study_abroad, target_amount) VALUES(?,?,?,?)";
            $db = $this->prepare($sql);
            foreach ($data as $key => $value) {
                $db->bindValue($key);
            }
            $ans = $result = $db->execute();
            return $ans;
        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }

    }

}