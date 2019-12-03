<?php
require_once('C:\xampp\htdocs\abroad_web\class\Model\account\operation\CategoryLearningDB.php');
require_once('C:\xampp\htdocs\abroad_web\class\Utili\DBReturnValueConversion.php');


class TeacherCategoryLearning
{
    private $lst;
    public function __construct()
    {
        $this->lst = [
            'school' => 'school_name',
            'country' => 'country_name'
        ];
    }

    public function category_get(){
        $db = new CategoryLearningDB('teacher');
        $ans = $db->category_list($this->lst);
        return json_encode($ans);
    }
}