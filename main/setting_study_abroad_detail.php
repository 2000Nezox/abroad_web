<?php
    require_once '../class/Controll/setting/cource/CourceGet.php';
    session_start();
    $ans = new CourceGet();
    $result =  $ans->get();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>設定</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/setting_list.css">
    <link rel="stylesheet" href="../css/setting_study_abroad_detail.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/logout.js"></script>
    <script src="../js/setting_study_abroad_detail.js"></script>
</head>
<body>
    <?php include('../sharedfile/header.php') ?>
    <?php include ('../sharedfile/setting_list.php') ?>

    <div class="course-list" >
            <table class="tablecategory">
                <tr>
                    <td>
                        <select id="country_refine">
                            <option value="all">全て</option>
                            <?php
                                echo $result['country']
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>留学先学校名</td>
                    <td>コース名</td>
                    <td>期間</td>
                    <td>参考金額（万）</td>
                    <td>参考</td>
                </tr>
            </table>
            <div class="box">
                <table class="tablebody" id="table_body">
                    <!-- ここはphpでデータベースから持ってきて埋め込む-->
                    <!-- 以下イメージ、上記の機能が完了後は削除-->
                    <?php
                        echo $result['data']
                    ?>
                </table>
            </div>
        <div class="setting-course-input">
            <div class="setting-course-input1">
                <div>
                    <ul>
                        <li>
                            <select id="input_country_select">
                                <?php
                                echo $result['country']
                                ?>
                            </select>
                        </li>
                        <li>
                            <select id="input_school_select"></select>
                        </li>
                        <li><input type="text" placeholder="コース名"></li>
                        <li><input type="text" placeholder="日数"></li>
                        <li><input type="text" placeholder="参考費用"><p>万円</p></li>
                    </ul>
                </div>
            </div>
            <div class="setting-course-input2">
                <textarea placeholder="参考を入力してください"></textarea>
                <button class="button1">削除</button>
                <button class="button2">追加</button>
            </div>
        </div>
    </div>

</body>
</html>

