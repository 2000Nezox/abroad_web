<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/notification.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/header.js"></script>
<!--    <script src="../js/ajex.js"></script>-->
</head>
<body>
<?php include ("../sharedfile/header.php");?>
<ul class="main-header sub-header">
    <li id="sub-header-1">学生</li>
    <li id="sub-header-2">管理者</li>
</ul>
<div class="top"></div>
<div id="main-content">
    <div id="send-content">
        <div class="course-input-content">
            <div id="send-input">
                <dl>
                    <dt>送信先</dt>
                    <dd><input type="text"></dd>

                    <dt>案内講座</dt>
                    <dd>
                        <select name="">
                            <option value="">スポーツ English</option>
                        </select>
                    </dd>

                    <div class="content-1">
                        <dt>講座申込み</dt>
                        <dd>
                            <select name="">
                                <option value="">申込済</option>
                            </select>
                        </dd>
                    </div>

                    <div class="content-1 content-2">
                        <dt>留学予定</dt>
                        <dd>
                            <select name="">
                                <option value="">予定あり</option>
                            </select>
                        </dd>
                    </div>

                    <dt>内容</dt>
                    <dd>
                        <textarea></textarea>
                    </dd>

                    <div class="content-1">
                    <dt>添付画像</dt>
                    <dd><input type="file"></dd>
                    </div>

                    <div class="content-1">
                        <button>送信</button>
                    </div>
                </dl>

            </div>
            <div id="send-history">
                <div class="send-history-title">
                    <table class="table1">
                        <thead>
                        <tr>
                            <th>送信日時</th>
                            <th>講座名</th>
                            <th>送信先</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="send-history-list">
                    <table class="table2">
                        <tbody>
                        <tr>
                            <td>2019/09/02</td>
                            <td>文法講座</td>
                            <td>講座申込済み</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="send-img">
        <div class="box"></div>
    </div>

<div id="main-css"></div>
<div id="main-js"></div>
</div>
</body>
</html>