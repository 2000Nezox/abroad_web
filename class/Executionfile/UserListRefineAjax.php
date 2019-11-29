<?php
require_once('../Controll/account/operation/UserListRefine.php');
require_once('../Controll/account/operation/UserListAcquisition.php');
require_once ('../Utili/DBReturnValueConversion.php');

if($_POST['content'] == 'all'){
    $class = new UserListAcquisition();
    $ans = $class->allLearned();
//    print_r($ans);
    $json_li = DBReturnValueConversion::dbConversion($ans);

//    print_r("全件");
    print_r($json_li);
}else{
    $class = new UserListRefine();
    $ans = $class->refinement_function($_POST['attribute'],$_POST['content']);
    $json_li = DBReturnValueConversion::dbConversion($ans);
    print_r($json_li);
}

//return $json_li;
