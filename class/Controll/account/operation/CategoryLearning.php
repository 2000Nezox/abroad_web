<?php
require_once ('C:\xampp\htdocs\abroad_web\class\Model\account\operation\UserListAcquisitionDB.php');
require_once ('C:\xampp\htdocs\abroad_web\class\Utili\DBReturnValueConversion.php');


class CategoryLearning
{
    private $lst;

    public function __construct()
    {
        $this->lst = [
            'school' => 'school_name',
            'department' => 'department_name',
            'teacher' => 'name'
        ];
    }

    public function category_get(){
        $db = new UserListAcquisitionDB();
        $ans = $db->category_list($this->lst);
        $ans['grade'] = ['1','2','3','4'];
        $ans['plan'] = ['はい','いいえ'];
        return json_encode($ans);
    }
}