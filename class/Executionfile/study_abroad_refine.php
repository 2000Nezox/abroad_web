<?php

require_once 'C:\xampp\htdocs\abroad_web\class\Controll\setting\cource\CourceGet.php';

$class = new CourceGet();
$ans = $class->restriction_get($_POST['country']);

print_r(implode('', $ans));
return $ans;