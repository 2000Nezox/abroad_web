<?php
require_once ('C:\xampp\htdocs\abroad_web\class\Controll\account\operation\Teacher\OwnProfileLearning.php');
//    require_once('./Controll/LoginAuthentication.php')
//    require_once('./Controll/account/operation/UserListAcquisition.php');

//    require_once ('./Controll/UserListRefine.php');
$lst = new OwnProfileLearning();
$category_data = json_decode($lst->getProfile(),true);
var_dump($category_data);
//    session_start();
////    $lst = new UserListAcquisition();
//    $ans = $lst->allLearned();
//    var_dump($ans);
//    var_dump(json_decode($ans));
//    $conninfo = [
//        'host'     => 'localhost',
//        'dbname'   => 'abroad',
//        'dbuser'   => 'root',
//        'password' => 'password'
//    ];
//    ModelBase::setConnectionInfo($conninfo);
//    $db = new AuthenticationDB();
////    $lst = $db->allList();
////    print_r($lst);
////    echo(password_hash("password",PASSWORD_DEFAULT));
////    echo (\n);
//
//    $login_test = new LoginAuthentication("password",1700002);
//    $ans = $login_test->authentication();
//    print_r($ans)
//
//    $db = new UserListRefine();
//    print_r($db->refine("school_name","麻生情報ビジネス専門学校 福岡校"));
//    $ans = $db->allLearned();


?>