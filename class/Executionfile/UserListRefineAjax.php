<?php
require_once('C:\xampp\htdocs\abroad_web\class\Controll\account\operation\UserListRefine.php');


$class = new UserListRefine();
//$ans = $class->refinement_function($_POST['attribute'],$_POST['content']);
$ans = $class->refinement_function('school_name','麻生情報ビジネス専門学校 福岡校');
//var_dump($ans);
//var_dump($ans);
return json_encode($ans);
//    foreach ($ans as $value) {
//        if (is_null($value[9])) {
//            $value[9] = "いいえ";
//        } else {
//            $value[9] = "はい";
//        }
//        echo "
//                        <tr>
//                            <td>$value[0]</td>
//                            <td>$value[1]</td>
//                            <td>$value[2]</td>
//                            <td>$value[3]</td>
//                            <td>$value[4]年</td>
//                            <td>$value[5]　$value[6]</td>
//                            <td>$value[7]　$value[8]</td>
//                            <td>$value[9]</td>
//                        </tr>
//                    ";
//    }