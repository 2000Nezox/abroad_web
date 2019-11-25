<?php

//require_once('../Model/AuthenticationDB.php');
class LoginAuthentication
{
    public $password;
    public $user_id;
    public $hash;

    public function __construct($password,$user_id)
    {
        $this->password = $password;
        $this->user_id = $user_id;
    }

    public function authentication(){
        $hash_ans = new AuthenticationDB();
        $ans = $hash_ans->getList('student_number',"$this->user_id");
//        var_dump($ans);
        $this->hash = $ans[0]["password"];
//        echo ($this->hash);
        if(password_verify($this->password,$this->hash)){
            session_regenerate_id(True);
            setcookie('user_id',$this->user_id);
            echo ('OK');
            return true;
        }else{
            return false;
        }
    }


}