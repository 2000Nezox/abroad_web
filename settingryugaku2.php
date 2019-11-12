<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>設定</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main_index.css">
    <link rel="stylesheet" href="./css/settingryugaku2.css">
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
    <label id="box">留学先設定</label>
    <br>
    <label>留学支援画面設定</label>
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
        <br>
        <table border="1" class="list">
            <tr>
                <td id="yoko1">留学先学校名</td>
                <td id="yoko2">コース名</td>
                <td id="yoko3">期間</td>
                <td id="yoko4">参考金額(万)</td>
                <td id="yoko5">備考</td>
            </tr>
        </table>

        <!-- DB入力欄仮 -->
        <div id="box1">
            <table border="1" class="list2">
                <tr>
                    <td id="yoko6">IDEAセブ</td>
                    <td id="yoko7">ー</td>
                    <td id="yoko8">2週間</td>
                    <td id="yoko9">16</td>
                    <td id="yoko10">URL等を入力</td>
                </tr>
            </table>
        </div>
        <!-- 右画面下 -->
        <div id="box2">
            <th><select name="country" id="country2">
                    <option value="">国名</option>
                    <option value="">--</option>
                    <option value="">--</option>
                    <option value="">--</option>
                    <option value="">--</option>
                    <option value="">--</option>
                    <option value="">--</option>
                    <option value="">--</option>
                </select></th>
            <div >
                <input class="koumoku" type="text" name="pass" value="" placeholder="学校名">

                <input class="koumoku" id="koumoku1" type="text" name="pass" value="" placeholder="コース名">

                <th><select name="period" id="period">
                        <option value="">期間</option>
                        <option value="">--</option>
                        <option value="">--</option>
                        <option value="">--</option>
                        <option value="">--</option>
                        <option value="">--</option>
                        <option value="">--</option>
                        <option value="">--</option>
                    </select></th>
                <input id="koumoku2" type="text" name="pass" value="" placeholder="参考費用"><h>万円</h>
                <input id="koumoku3" type="text" name="pass" value="" placeholder="備考">
                <input id="delete" type="submit" name ="delete" value = "削除">
                <input id="change" type="submit" name ="change" value = "変更">
            </div>

        </div>
    </div>
</div>
</body>
</html>

