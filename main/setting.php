<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/setting.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/header.js"></script>
    <!--    <script src="../js/ajex.js"></script>-->
</head>
<body>
<?php include ("../sharedfile/header.php");?>
<ul class="main-header sub-header">
    <li id="sub-header-1">学生</li>
    <li id="sub-header-2">管理者</li>
</ul>
<div id="setting">
    <div class="sentaku">
        <br>
        <label id="box">プロフィール設定</label>
        <br>
        <label>留学先設定</label>
        <br>
        <label>留学支援画面設定</label>
        <br>
        <label>過去の講座</label>
    </div>

    <div class="rightzentai">
        <div class="l1">
                <th>姓名</th>
                <br>
                <th>所属学校名</th>
                <br>
                <th>メールアドレス</th>
                <br>
                <th>担当国名</th>
                <br>
        </div>
        <div>
            <label id="e-mail">メールアドレス
                <input class="h" type="text" name="pass" value="" placeholder="半角英数字で入力してください">
            </label>
        </div>
        <label class="l2">担当国名</label>
        <select name="country" id="country">
            <option value="">麻生事業部の教員ではありません</option>
            <option value="">--</option>
            <option value="">--</option>
            <option value="">--</option>
            <option value="">--</option>
            <option value="">--</option>
            <option value="">--</option>
            <option value="">--</option>
        </select>
        <div>
            <label class="l">パスワード
                <div>
                <input id="pass" type="text" name="pass" value="" placeholder="半角英数字で入力してください">
                </div>
            </label>
        </div>
        <div>
            <input id="cpass" type="text" name="pass" value="" placeholder="確認のためもう一度入力してください">
        </div>
        <br>
            <input id="updata" type="submit" name ="check" value = "更新">
    </div>
</div>
</body>
</html>