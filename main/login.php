<?php
require_once("../class/Controll/CsrfMeasures.php");

session_start();
$sessionid = CsrfMeasures::input();

//print_r($sessionid)

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログインページ</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/setting_list.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<diV class="login-form">
    <h1>ASO English +</h1>
    <p>by KUGA Tech</p>
    <form method="post" action="user.php">
        <div class="login-form1">
            <input class="h" type="text" name="user" value="" placeholder="教職員番号">
            <input class="h" type="text" name="password" value="" placeholder="パスワード">
            <input type="hidden" name="token" value="<?php echo $sessionid ?>" >
        </div>
            <input id="login" type="submit" name ="check" value = "ログイン">
    </form>
</diV>
</body>
</html>