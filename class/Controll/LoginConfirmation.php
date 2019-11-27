<?php


class LoginConfirmation
{
    public static function Confirmation($url){
//        var_dump($_SESSION);
        if (!empty($_SESSION["user_id"])){
//        if (False){
//            header("Location: ");
            print_r("ログインしています");
            var_dump($_SESSION);
            return;
        }else{
            print_r("ログインしていません");
            var_dump($_SESSION);
//            header("Location:$url");
//            exit();
        }
    }
}