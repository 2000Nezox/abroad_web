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
                <dl>
                    <dt>姓名</dt>
                    <dd>久家政人</dd>
                    <dt>所属学校名</dt>
                    <dd>麻生情報ビジネス専門学校</dd>
                    <dt>メールアドレス</dt>
                    <dd>1111111@s.asojuku.ac.jp</dd>
                    <dt>担当国名</dt>
                    <dd>麻生の先生ではありません</dd>
                </dl>
            </div>
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
        </div>
    </div>
</body>
</html>
