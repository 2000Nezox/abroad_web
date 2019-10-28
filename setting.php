<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>設定</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main_index.css">
    <link rel="stylesheet" href="./css/setting.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/header.js"></script>
</head>

<header id="site_heder">
    <div id="header">
        <span id="header-first">ASO ENGLISH +</span>
        <span id="header-last">by KUGA Tech</span>
    </div>
    <nav>
        <ul class="main-header">
            <li class="header-1">ユーザー</li>
            <li class="header-2">講座</li>
            <li class="header-3">通知</li>
            <li class="header-4">面談</li>
            <li class="header-5">設定</li>
        </ul>
    </nav>
</header>

<body>
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
</body>
</html>
