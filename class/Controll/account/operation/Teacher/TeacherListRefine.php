<?php
require_once($_SERVER['DOCUMENT_ROOT'].'\abroad_web\class\Model\account\operation\ListRefineDB.php');

class TeacherListRefine
{
    public function refinement_function($attribute, $content){
            $sql = '
                SELECT
                    teacher.teacher_number,name,school_name,country_name,email
                FROM
                    %s
                INNER JOIN school ON teacher.school_number = school.school_number
                INNER JOIN teacher_responsible_country ON teacher.teacher_number = teacher_responsible_country.teacher_number
                INNER JOIN country ON teacher_responsible_country.country_number = country.country_number
                WHERE %s = "%s";';
            $db = new ListRefineDB('teacher');
            $ans = $db->refineList($sql,$attribute, $content);
            return $ans;
    }
}