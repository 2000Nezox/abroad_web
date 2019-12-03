<?php
require_once('C:\xampp\htdocs\abroad_web\class\Model\account\operation\ListAcquisitionDB.php');
require_once('C:\xampp\htdocs\abroad_web\class\Utili\DBReturnValueConversion.php');

class TearcherListAcquisition
{

    public function allLearned()
    {
        $sql = '
            SELECT
                teacher.teacher_number,name,school_name,country_name,email
            FROM
                teacher
            INNER JOIN school ON teacher.school_number = school.school_number
            INNER JOIN teacher_responsible_country ON teacher.teacher_number = teacher_responsible_country.teacher_number
            INNER JOIN country ON teacher_responsible_country.country_number = country.country_number;';
        $db = new ListAcquisitionDB('teacher');
        $ans = $db->normalList($sql);
        return $ans;
    }

}