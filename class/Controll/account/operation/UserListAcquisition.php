<?php
require_once('C:\xampp\htdocs\abroad_web\class\Model\account\operation\UserListAcquisitionDB.php');
require_once ('C:\xampp\htdocs\abroad_web\class\Utili\DBReturnValueConversion.php');

class UserListAcquisition
{

    public function allLearned()
    {
        $db = new UserListAcquisitionDB();
        $ans = $db->normalList();
        return $ans;
    }

}