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
    <script src="../js/header.js"></script>
</head>
<body>
    <?php include('../sharedfile/header.php') ?>
    <?php include ('../sharedfile/setting_list.php') ?>

    <div class="course-list" >
            <table class="tablecategory">
                <!--            <thead>-->
                <!--            <tr>-->
                <!--                <th class="table">学籍番号</th>-->
                <!--                <th>開催名</th>-->
                <!--                <th>開催日</th>-->
                <!--                <th>開催時</th>-->
                <!--                <th>開催場所</th>-->
                <!--                <th>カテゴリ</th>-->
                <!--                <th>作成者</th>-->
                <!--            </tr>-->
                <!--            </thead>-->

                <tr>
                    <td>
                        <select name="refine">
                            <option value="">---</option>
                        </select>
                    </td>
                </tr>
                <tr>
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
            </table>
            <div class="box">
                <table class="tablebody">
                    <!-- ここはphpでデータベースから持ってきて埋め込む-->
                    <!-- 以下イメージ、上記の機能が完了後は削除-->
                    <tr>
                        <td>スポーツEnglish</td>
                        <td>2019/09/06</td>
                        <td>17:00~18:00</td>
                        <td>1155教室</td>
                        <td>イベント</td>
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
        <div class="setting-course-input">
            <div class="setting-course-input1">
                <div>
                    <ul>
                        <li><select></select></li>
                        <li><input type="text"></li>
                        <li><input type="text"></li>
                        <li><select name="" id=""></select></li>
                        <li><input type="text"><p>万円</p></li>
                    </ul>
                </div>
            </div>
            <div class="setting-course-input2">
                <textarea></textarea>
                <button class="button1">削除</button>
                <button class="button2">追加</button>
            </div>
        </div>
    </div>

</body>
</html>

