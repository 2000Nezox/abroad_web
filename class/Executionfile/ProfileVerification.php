<?php
session_start();
if(CsrfMeasures::validation()){
    //パスワードがあっているか判定をする
    $login_verification = new LoginAuthentication($_POST["user"],$_POST["password"]);
    if($login_verification->authentication()){
        print_r("ログインが完了しました");
    }else{
//        print_r("エラーっっｆ");
        header("Location:".__FILE__."login.php");
        exit();
    }
}else{
    //ログインしているかどうか判定
    print_r("ログイン画面からの遷移ではありません");
    LoginConfirmation::Confirmation("login.php");
}

