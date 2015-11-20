<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>数の比較</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <?php

if ($_SERVER["REQUEST_METHOD"] === "POST" ){
    if (!empty($num1)){
  echo "<font color='RED'> 数1に入力されていません</font>"."<br>";
  echo "<a href='hikaku.php'>戻る"."</a>";
  exit();
}
    if (!empty($num2)){
  echo "<font color='RED'> 数2に入力されていません</font>"."<br>";
  echo "<a href='hikaku.php'>戻る"."</a>";
  exit();
}
  $num1 = $_POST["kazu1"];
  $num2 = $_POST["kazu2"];
  // var_dump($num1);
  // echo $num1;
  // echo $num2;

  if ($num1 == $num2){
  echo $num1."と".$num2."は等しい";
}
else if ($num1 > $num2){
  echo $num1."は".$num2."より大きい";
}
else{
  echo $num2."は".$num1."より大きい";
}
}









?>
  <h1>大きい数を判別します</h1>
  <form action="" method="POST">
  <p>数1<input type = "text" name ="kazu1"></p>
  <p>数2<input type = "text" name ="kazu2"></p>
  <input type ="submit" value="判定する">
  </form>

</body>
</html>