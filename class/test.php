<?php
    require_once('./Model/account/operation/UserListAcquisitionDB.php');
    require_once ('./Model/ModelBase.php');
//    require_once('./Controll/LoginAuthentication.php')
    require_once ('./Controll/account/operation/CategoryLearning.php');

//    require_once ('./Controll/UserListRefine.php');

    session_start();
    $lst = new CategoryLearning();
    $ans = $lst->category_get();
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