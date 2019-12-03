<?php

require_once($_SERVER['DOCUMENT_ROOT'].'\abroad_web\class\Model\account\login\AuthenticationDB.php');


class LoginAuthentication
{
    public $password;
    public $user_id;
    public $hash;

    public function __construct($user_id,$password)
    {
        $this->password = $password;
        $this->user_id = $user_id;
    }

    public function authentication()
    {
        $hash_ans = new AuthenticationDB();
        $ans = $hash_ans->getList('teacher_number', "$this->user_id");
        $this->hash = $ans[0]["password"];
        if (password_verify($this->password, $this->hash)) {
            session_regenerate_id(True);
            $_SESSION['user_id'] = $this->user_id;
            return True;
        } else {
            return false;
        }
    }


}