<?php
require_once ('C:\xampp\htdocs\abroad_web\class\Model\UserListAcquisitionDB.php');

class UserListAcquisition
{
    public function allLearned()
    {
        $db = new UserListAcquisitionDB();
        $ans = $db->normalList();
//        var_dump($ans);
//        print_r($ans);
        return $ans;
    }

}