<?php

require_once('C:\xampp\htdocs\abroad_web\class\Model\account\login\AuthenticationDB.php');


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
//        print_r($this->user_id."わからない");
        $hash_ans = new AuthenticationDB();
        $ans = $hash_ans->getList('teacher_number', "$this->user_id");
//        var_dump($ans);
        $this->hash = $ans[0]["password"];
//        echo ($this->hash);
        if (password_verify($this->password, $this->hash)) {
            session_regenerate_id(True);
            $_SESSION['user_id'] = $this->user_id;
//            echo('OK');
            return True;
        } else {
            return false;
        }
    }


}