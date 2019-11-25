<?php


class LoginConfirmation
{
    public static function Confirmation($url){
        if (!empty($_COOKIE('user_id'))){
            header("Location: ");
            return;
        }else{
            header("Location:/$url");
            exit();
        }
    }
}