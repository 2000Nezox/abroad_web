<?php
require_once ('C:\xampp\htdocs\abroad_web\class\Model\account\operation\UserListAcquisitionDB.php');

class UserListRefine
{
    public function refinement_function($attribute, $content){
        $db = new UserListAcquisitionDB();
        $ans = $db->refineList($attribute, $content);
        return $ans;
    }
}