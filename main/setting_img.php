<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>設定</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/setting_list.css">
    <link rel="stylesheet" href="../css/setting_img.css">
<!--    <link rel="stylesheet" href="./css/settingimage_delete.css">-->
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
    </div>
    <!-- 画像入れるところ -->
    <table border="1" class="list">
        <tr>
            <td></td>
        </tr>
    </table>
    <input id="add" type="submit" name ="add" value = "追加">
<!--    <input id="delete" type="submit" name ="delete" value = "削除">-->
</div>
</body>
</html>

