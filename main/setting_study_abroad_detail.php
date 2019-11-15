<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>設定</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/setting_list.css">
    <link rel="stylesheet" href="../css/setting_study_abroad_detail.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/header.js"></script>
</head>
<body>
<?php include('../sharedfile/header.php') ?>
<?php include ('../sharedfile/setting_list.php') ?>

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
            <input id="add" type="submit" name ="add" value = "追加">
        </div>

        </div>
    </div>
</div>
</body>
</html>

