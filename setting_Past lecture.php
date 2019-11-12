<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>設定</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main_index.css">
    <link rel="stylesheet" href="./css/setting_Pastlecture.css">
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
    <label>留学支援画面設定</label>
    <br>
    <label id="box">過去の講座</label>
</div>

<div class="rightzentai">
    <div class="l1">
        <th><select name="country" id="country">
                <option value="">イベント</option>
                <option value="">--</option>
                <option value="">--</option>
                <option value="">--</option>
                <option value="">--</option>
                <option value="">--</option>
                <option value="">--</option>
                <option value="">--</option>
            </select></th>
        <br>
        <table border="1" class="list">
            <tr>
                <td id="yoko1">講座名</td>
                <td id="yoko2">開催日</td>
                <td id="yoko3">開催時</td>
                <td id="yoko4">開催場所</td>
                <td id="yoko5">詳細</td>
                <td id="yoko6">作成者</td>
            </tr>
        </table>

        <!-- DB表示仮 -->
        <div id="box1">
            <table border="1" class="list2">
                <tr>
                    <td>スポーツEnglish</td>
                    <td>2019/09/06</td>
                    <td>17:00~18:00</td>
                    <td>1155教室</td>
                    <td>詳細表示されます</td>
                    <td>水本**</td>
                </tr>
            </table>
        </div>
        <input id="output" type="submit" name ="output" value = "CSV出力">
</div>
</body>
</html>

