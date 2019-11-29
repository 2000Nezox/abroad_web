<?php
require_once('../Controll/account/operation/UserListRefine.php');


$class = new UserListRefine();
//$ans = $class->refinement_function($_POST['attribute'],$_POST['content']);
$ans = $class->refinement_function('school_name','麻生情報ビジネス専門学校 福岡校');
//var_dump($ans);
//var_dump($ans);
$count = 0;
foreach ($ans as $i){
//    print_r($i);
    $lst = [];
    foreach ($i as $key => $value){
        if(is_string($key)){
           unset($ans[$count][$key]);
        }
    }
    $count++;
}
//print_r($ans);
$json_li = json_encode($ans);
print_r($json_li);
return $json_li;
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