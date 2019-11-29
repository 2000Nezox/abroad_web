<?php
require_once('C:\xampp\htdocs\abroad_web\class\Model\ModelBase.php');

class UserListAcquisitionDB extends ModelBase
{
    private $name = 'user';

    //全部習得
    public function normalList()
    {
        $sql = sprintf('
            SELECT
            student_number,school_name,department_name,name,grade,kanji_sei,kanji_mei,kana_sei,kana_mei,study_abroad_plan
            FROM
            %s
                INNER JOIN
            affiliation_management
            ON  affiliation_management.affilation_number = user.affiliation_number
                INNER JOIN
            school 
            ON  affiliation_management.school_number = school.school_number
                INNER JOIN
            department
            ON  affiliation_management.department_number = department.department_number
                INNER JOIN
            teacher
            ON affiliation_management.responsible_number = teacher.teacher_number;'
            , $this->name);
        $stmt = $this->db->query($sql);
        $rows = $stmt->fetchAll();
        return $rows;
    }


    public function refineList($attribute, $content)
    {
        try{
            $sql = sprintf('
            SELECT
            student_number,school_name,department_name,name,grade,kanji_sei,kanji_mei,kana_sei,kana_mei,study_abroad_plan
            FROM
            %s
                INNER JOIN
            affiliation_management
            ON  affiliation_management.affilation_number = user.affiliation_number
                INNER JOIN
            school
            ON  affiliation_management.school_number = school.school_number
                INNER JOIN
            department
            ON  affiliation_management.department_number = department.department_number
                INNER JOIN
            teacher
            ON affiliation_management.responsible_number = teacher.teacher_number
            WHERE %s = "%s";'
                , $this->name,$attribute,$content);
//            var_dump($sql);
            $stmt = $this->db->query($sql);
//            var_dump($stmt);
            $rows = $stmt->fetchAll();
//            var_dump($rows);
            return $rows;
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}