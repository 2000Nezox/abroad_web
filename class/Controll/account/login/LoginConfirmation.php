<?php

class LoginConfirmation
{
    public static function Confirmation($url){

        if (!empty($_SESSION["user_id"])){
            print_r("ログインしています");
//            var_dump($_SESSION);
            return;
        }else{
            print_r("ログインしていません");
//            var_dump($_SESSION);
        }
    }
}