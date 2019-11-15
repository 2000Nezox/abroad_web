<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>設定</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/setting_list.css">
    <link rel="stylesheet" href="../css/setting_course_history.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/header.js"></script>
</head>
<body>
<?php include('../sharedfile/header.php') ?>
<?php include ('../sharedfile/setting_list.php') ?>

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

