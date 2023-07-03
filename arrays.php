<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 
// 2-masala. Massiv berilgan.
// $arr = array("Toshmat"=>"31","Janob"=>"41","Eshmat"=>"39","Sardor"=>"40");

// a) Qiymati bo`yicha o`sish tartibda saralang
// b) Keylari bo`yicha o`sish tartibda saralang
// c) Qiymati bo`yicha kamayish tartibda saralang
// d) Keylari bo`yicha kamayish tartibda saralang
$arr = array("Toshmat"=>"31","Janob"=>"41","Eshmat"=>"39","Sardor"=>"40");
$osishTartibida = asort($arr);
print_r($osishTartibida);




?>
  
</body>
</html>