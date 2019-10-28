<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザ登録</title>
    <script type="text/javascript"src="js/jquery-3.4.1.min.js"></script>
    <script type="text/css" src="css/Registration.css"></script>
    <link rel="stylesheet" type="text/css" href="css/Registration.css">
</head>
<body>
    <h1>ASO English +</h1>
    <p>管理者登録</p>
<form action="" method="post">
    <div>
        <label class="l">教職員番号
        <input class="h" type="text" name="name" value="" placeholder="半角数字で入力してください">
        </label>
    </div>
    <br>
    <div>
        <label id="name">姓名
        <input class="h" type="text" name="pass" value="" placeholder="麻生花子">
        </label>
    </div>
    <label class="l">所属学校名</label>
    <select name="schoolname" id="schoolname">
        <option value="">麻生情報ビジネス専門学校</option>
        <option value="">--</option>
        <option value="">--</option>
        <option value="">--</option>
        <option value="">--</option>
        <option value="">--</option>
        <option value="">--</option>
        <option value="">--</option>
    </select>
    <label class="l1">担当国名</label>
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
        <label id="e-mail">メールアドレス
            <input class="h" type="text" name="pass" value="" placeholder="麻生花子">
        </label>
    </div>
    <div>
        <label class="l">パスワード
            <input id="pass" type="text" name="pass" value="" placeholder="半角英数字で入力してください">
        </label>
    </div>
    <div>
        <input id="cpass" type="text" name="pass" value="" placeholder="確認のためもう一度入力してください">
    </div>
        <input id="check" type="submit" name ="check" value = "確認">
    <p1>by KUGA Tech</p1>
</form>
</body>
</html>