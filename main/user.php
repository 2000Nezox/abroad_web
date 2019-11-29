<?php
require_once("../class/Utili/CsrfMeasures.php");
require_once("../class/Controll/account/login/LoginConfirmation.php");
require_once("../class/Controll/account/login/LoginAuthentication.php");
require_once ("../class/Controll/account/operation/UserListAcquisition.php");

session_start();

//echo $_POST["token"];
//ログイン画面からの遷移か判定
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

//ここから読み込みを開始
$db = new UserListAcquisition();
$ans = $db->allLearned();



?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main_index.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/account/user.js"></script>
    <script src="../js/Utili/TableInsertionProcess.js"></script>
<!--    <script src="../js/ajex.js"></script>-->
</head>
<body>
<?php include ("../sharedfile/header.php");?>
<ul class="main-header sub-header">
    <li id="sub-header-1"><a href="user.php">ユーザー</a></li>
    <li id="sub-header-2"><a href="teacher.php">管理者</a></li>
</ul>
<div id="main-user">
    <table class="tablecategory">
        <thead>
        <tr>
            <th class="table">学籍番号</th>
            <th>学校名</th>
            <th>学科</th>
            <th>担任名</th>
            <th>学年</th>
            <th>名前</th>
            <th>なまえ</th>
            <th>留学予定</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td>
                <select name="school_name" id="refine-select1">
                    <option value="all">全件</option>
                    <option value="麻生情報ビジネス専門学校 福岡校">麻生情報ビジネス専門学校 福岡校</option>
                </select>
            </td>
            <td>
                <select name="" id="refine-select2">
                    <option value=""></option>
                </select>
            </td>
            <td>
                <select name="" id="refine-select3">
                    <option value=""></option>
                </select>
            </td>
            <td>
                <select name="" id="refine-select4">
                    <option value=""></option>
                </select>
            </td>
            <td>
                <select name="" id="refine-select5">
                    <option value=""></option>
                </select>
            </td>
            <td>
                <select name="" id="refine-select6">
                    <option value=""></option>
                </select>
            </td>
            <td>
                <select name="" id="refine-select7">
                    <option value=""></option>
                </select>
            </td>
<!--            <td>-->
<!--                <select id="">-->
<!--                    <option value="">---</option>-->
<!--                </select>-->
<!--            </td>-->
<!--            <td>-->
<!--                <select>-->
<!--                    <option value="">---</option>-->
<!--                </select>-->
<!--            </td>-->
<!--            <td>-->
<!--                <select>-->
<!--                    <option value="">---</option>-->
<!--                </select>-->
<!--            </td>-->
<!--            <td>-->
<!--                <select>-->
<!--                    <option value="">---</option>-->
<!--                </select>-->
<!--            </td>-->
<!--            <td>-->
<!--                <select>-->
<!--                    <option value="">---</option>-->
<!--                </select>-->
<!--            </td>-->
<!--            <td>-->
<!--                <select>-->
<!--                    <option value="">---</option>-->
<!--                </select>-->
<!--            </td>-->
<!--            <td>-->
<!--                <select>-->
<!--                    <option value="">---</option>-->
<!--                </select>-->
<!--            </td>-->
        </tr>
        </tbody>
    </table>
    <div class="box">
        <table class="tablebody" id="table_body">
            <!-- ここはphpでデータベースから持ってきて埋め込む-->
            <!-- 以下イメージ、上記の機能が完了後は削除-->
            <tr>
                <td>1801017</td>
                <td>麻生情報ビジネス専門学校</td>
                <td>情報システム専攻科</td>
                <td>久家まさと</td>
                <td>2年</td>
                <td>酒井　春華</td>
                <td>サカイ　ハルカ</td>
                <td>あり</td>
            </tr>
            <!-- こんなかんじ -->
            <?php
                foreach ($ans as $value){
                    if(is_null($value[9])){
                        $value[9] = "いいえ";
                    }else{
                        $value[9] = "はい";
                    }
                    echo "
                        <tr>
                            <td>$value[0]</td>
                            <td>$value[1]</td>
                            <td>$value[2]</td>
                            <td>$value[3]</td>
                            <td>$value[4]年</td>
                            <td>$value[5]　$value[6]</td>
                            <td>$value[7]　$value[8]</td>
                            <td>$value[9]</td>
                        </tr>
                    ";
                }
            ?>
        </table>
    </div>

    <div class="button-csv">
        <button>CSV出力</button>
    </div>
</div>


</body>
</html>