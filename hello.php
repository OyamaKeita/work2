<?php
echo "hello world";
$a = 3;
$b = 7;
echo $a + $b;
?>

<?php
$array_month = [
  "1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
  echo $array_month[7];
 ?>
 <?php
 $hello = "hello";
 $name = "keita";
 $world = "'s World";
 echo $hello . $name . $world;
 ?>
 <?php
 $tech_boost = "tech";
 $tech_boost .= " boost ";
 echo $tech_boost;
  ?>
  <?php
  $calender_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
 ];
echo $calender_2018["December"];
 ?>
 <?php
  $name = keita;
  if ($name == keita) {
    echo "私は$name です";
  } else {
    echo "$name ではありません";
  }
   ?>
   <?php
    $total = 0;
    for ($i = 0; $i <= 10000; $i++) {
      $total += $i;
    }
    echo $total;
    ?>
    <?php
    $fruits = array("apple","lemon","banana","orange","cherry");
    foreach ($fruits as $fruit){
      echo "要素は" . $fruit;
      echo "\n";
    } ?>
    <?php

    for ($i = 1; $i <= 100; $i++) {
      if ($i % 5 == 0) {
    echo $i;
    echo "\n"; }}
    ?>
    <?php

    
