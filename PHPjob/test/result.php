<?php
$num = $_POST['numbers'];
$num_arr = str_split($num);
$num_key = array_rand($num_arr);
$result = $num_arr[$num_key];

if ($result == 0){
  $msg = "凶";
} elseif ($result >=1 && $result <=3) {
  $msg = "小吉";
} else {
  $msg = "";
}

echo date("Y/m/d",time())."の運勢は<br>
選ばれた数字は $result <br>
$msg";
