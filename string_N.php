<?php
$String = "nobuhiro";
$Number = 3;
echo $String."の".$Number."番目の文字は".substr ($String,$Number-1,1)."です";
//
$Number = 10;
echo "<br>".$Number."の数の場合<br>";
if (strlen($String)<=$Number){
  echo $Number."以下の整数を入力してください";
}
else{
  echo $String."の".$Number."番目の文字は".substr ($String,$Number-1,1)."です";

}
?>
