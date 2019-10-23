<div id="main-user">
    <ul class="main-header sub-header">
        <li id="sub-header-1">学生</li>
        <li id="sub-header-2">管理者</li>
    </ul>
    <table class="tablecategory">
        <thead>
        <tr>
            <th class="table">学籍番号</th>
            <th>学校名</th>
            <th>学科</th>
            <th>担任名</th>
            <th>学年</th>
            <th>名前</th>
            <th>なまえ</th>
            <th>留学予定</th>
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
                <td>2年</td>
                <td>酒井　春華</td>
                <td>サカイ　ハルカ</td>
                <td>あり</td>
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