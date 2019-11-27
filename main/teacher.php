<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/teacher.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/logout.js"></script>
    <!--    <script src="../js/ajex.js"></script>-->
</head>
<body>
<?php include ("../sharedfile/header.php");?>
<ul class="main-header sub-header">
    <li id="sub-header-1"><a href="user.php">ユーザー</a></li>
    <li id="sub-header-2"><a href="teacher.php">管理者</a></li>
</ul>
<div id="main-user">
    <table class="tablecategory">
        <thead>
        <tr>
            <th>教員番号</th>
            <th>学校名</th>
            <th>姓　名</th>
            <th>担当国名</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td>
                <select>
                    <option value="">---</option>
                </select>
            </td>
            <td>
                <select>
                    <option value="">---</option>
                </select>
            </td>
            <td>
                <select>
                    <option value="">---</option>
                </select>
            </td>
        </tr>
        </tbody>
    </table>
    <div class="box">
        <table class="tablebody">
            <!-- ここはphpでデータベースから持ってきて埋め込む-->
            <!-- 以下イメージ、上記の機能が完了後は削除-->
            <tr>
                <td>1801017</td>
                <td>麻生情報ビジネス専門学校</td>
                <td>情報システム専攻科</td>
                <td>久家まさと</td>

            </tr>
            <!-- こんなかんじ -->
            <?php
            //                for($i = 1; $i <= 30; $i++){
            //                    echo '            <tr>
            //                <td>1801017</td>
            //                <td>麻生情報ビジネス専門学校</td>
            //                <td>情報システム専攻科</td>
            //                <td>久家まさと</td>
            //                <td>2年</td>
            //                <td>酒井　春華</td>
            //                <td>サカイ　ハルカ</td>
            //                <td>あり</td>
            //            </tr>
            //            ';
            //                }
            ?>
        </table>
    </div>

    <div class="button-csv">
        <button>CSV出力</button>
    </div>
</div>


</body>
</html>