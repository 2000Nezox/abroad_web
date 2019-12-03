<?php
require_once ('..\class\Controll\account\login\LoginConfirmation.php');
require_once ('..\class\Controll\account\operation\Teacher\OwnProfileLearning.php');

session_start();
LoginConfirmation::Confirmation("login.php");

$db = new OwnProfileLearning();
$lst = $db->getProfile();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>設定</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/setting_list.css">
    <link rel="stylesheet" href="../css/setting.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/logout.js"></script>
</head>
<body>
    <?php include('../sharedfile/header.php') ?>
    <?php include ('../sharedfile/setting_list.php') ?>
    <div class="top-right">
        <div class="top-right1">
            <div class="setting-display">
                <?php
                foreach ($lst as $key=>$value){
                    echo " 
                        <dl>
                            <dt>姓名</dt>
                            <dd>$value[0]</dd>
                            <dt>所属学校名</dt>
                            <dd>$value[1]</dd>
                            <dt>メールアドレス</dt>
                            <dd>$value[2]</dd>
                            <dt>担当国名</dt>
                            <dd>$value[3]</dd>
                        </dl>";
                }

                ?>
            </div>
            <form action="../class/Executionfile/ProfileVerification.php">
                <div class="setting-input">

                        <dl>
                            <dt>メールアドレス</dt>
                            <dd><input type="email"></dd>
                            <dt>担当国名</dt>
                            <dd><input type="text"></dd>
                            <dt>パスワード</dt>
                            <dd>
                                <input type="password">
                                <input type="password">
                            </dd>
                        </dl>

                </div>
                <button>更新</button>
            </form>
        </div>
    </div>
</body>
</html>
