<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>文字の連結</title>
  <link rel="stylesheet" href="">
</head>
<body>
<?php

// 変数を定義
$Number=5;
$String="@";
$matome =NULL;
// For文で回す
echo "For文での文字列<br>";
//
for ($i=0;$i<$Number;$i++){
echo $String;
}

// 関数を使って繰り返し

echo "<BR>str_repeat関数<BR>";
$Answer="";
$Answer = str_repeat($String,$Number);
echo $Answer;

// 配列を使ってみる
echo "<br>配列を使ってみる<br>";
$array = array();
// var_dump($array);
for ($i=0;$i<$Number;$i++){
  $array[] = $String;
  echo $array[$i];
  $matome .= $String;
}
echo "<BR>変数での値は".$matome."です"
?>
</body>
</html>