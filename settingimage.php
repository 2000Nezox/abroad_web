<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>設定</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main_index.css">
    <link rel="stylesheet" href="./css/settingimage.css">
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
    <label>プロフィール設定</label>
    <br>
    <label>留学先設定</label>
    <br>
    <label id="box">留学支援画面設定</label>
    <br>
    <label>過去の講座</label>
</div>

<div class="rightzentai">
    <div class="l1">
        <th><select name="country" id="country">
                <option value="">フィリピン</option>
                <option value="">--</option>
                <option value="">--</option>
                <option value="">--</option>
                <option value="">--</option>
                <option value="">--</option>
                <option value="">--</option>
                <option value="">--</option>
            </select></th>
    </div>
    <!-- 画像入れるところ -->
    <table border="1" class="list">
        <tr>
            <td></td>
        </tr>
    </table>
    <input id="add" type="submit" name ="add" value = "追加">
</div>
</body>
</html>

