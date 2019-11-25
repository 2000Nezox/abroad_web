<?php
    require_once('./Model/AuthenticationDB.php');
    require_once ('./Model/ModelBase.php');
    require_once ('./Controll/LoginAuthentication.php');

    session_start();
    $conninfo = [
        'host'     => 'localhost',
        'dbname'   => 'abroad',
        'dbuser'   => 'root',
        'password' => 'password'
    ];
    ModelBase::setConnectionInfo($conninfo);
    $db = new AuthenticationDB();
//    $lst = $db->allList();
//    print_r($lst);
//    echo(password_hash("password",PASSWORD_DEFAULT));
//    echo (\n);

    $login_test = new LoginAuthentication("password",1700002);
    $ans = $login_test->authentication();
    print_r($ans)


?>