<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Calculator</title>
  </head>
  <body>
    <h1>Soz tanlang: </h1>

    <?php
// -------------------------17-masala --------------------------------
// N ta elementdan tashkil topgan massiv berilgan. 
// Dastlab massiv elementlari orasidan, juft indekslilarini ekranga chiqaring, 
// keyin toq indekslilarini ekranga chiqaring. Shart operatorini ishlatmasdan.
// $n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);
// $k=6;
// $m=0;
// $newarr = [];
// $ans = 0;

// for ($i = 0; $i < count($n); $i++) {
//   $m=abs($k-$n[$i]);
//   $newarr[]=$m;
// }

// $ans = min($newarr); 

// print_r($ans);

// ------------------------- 18-masala --------------------------------
// 18-masala. N ta elementdan tashkil topgan massiv berilgan. 
// Massiv elementlari orasida aniq 2 ta bir xil  qiymatli element bor. 
// Birinchi topilgan bir xil qiymatli elementlar indeksini chiqaring.
// $n = array(12, 5, 2, 66, 22, 56, 123, 2, 7, 1, 67);
// $indexarr = [];

// for ($i = 0; $i < count($n); $i++) { 
//   for ($k = $i+ 1; $k < count($n); $k++) { 
//     if($n[$i]==$n[$k]) {
//       $indexarr[] = $i;
//       $indexarr[] = $k;
//       $indexarr;
//     }
//   }  
// }

// print_r($indexarr);

// ------------------------- 19-masala --------------------------------
// 19-masala. ”2019-12-03 12:35:43” - Ushbu matnni quyidagi ko’rinishda yozing: 
// “3-dekabr, 2019-yil, soat 12 dan 35 daqiqayu, 43 soniya o’tdi”

// $n="2019-12-03 12:35:43";
// // 3-dekabr, 2019-yil, soat 12 dan 35 daqiqayu, 43 soniya o’tdi
// $data = "";
// $timeCol = "";
// $unnumericCases = []; 
// $newarr = [];
// $i=0;


// for($i=0;$i<strlen($n);$i++) {
//   for($j=0;$j<strlen($n);$j++) {
//     if (!is_numeric($n[$j])) {
//       $data = "";
//     } else {
//       $timeCol = $data;
//     }
//   }
//   $newarr[] = $timeCol;
// }



// print_r($newarr);

// ------------------------- 22-masala --------------------------------
// 22-masala. N ta elementdan tashkil topgan massiv berilgan. Massivda eng kop
// qatnashgan bir xil qiymatli element sonini chiqaruvchi funksiya yozing.


// function sameNumbers($arr) {
//   $counts = [];
//   $length = count($arr);
  
//   for ($i = 0; $i < $length; $i++) {
//       $value = $arr[$i];
      
//       if (isset($counts[$value])) {
//           $counts[$value]++;
//       } else {
//           $counts[$value] = 1;
//       }
//   }
  
//   return $counts;
// }
// $n = array(1, 2, 3, 4, 2, 3, 4, 4, 4, 5);
// $numOfElements = sameNumbers($n);
// print_r($numOfElements)


// ------------------------- 23-masala --------------------------------
// 23-masala. N ta elementdan tashkil topgan massiv berilgan. Massiv elementlari
// orasidan 2 martadan kop uchraganlarini o'chiruvchi funksiya yozing.
// Hosil bolgan massiv elementlari soni va elementlari chiqarilsin.
//$n = array(12, 5, 2, 66, 2, 2, 56, 123, 2, 7, 1, 67);
// $n = array(123, 123, 2, 66, 2, 2, 56, 123, 2, 1, 1, 1);
// $result = [];

// for ($k=0; $k < count($n); $k++) { 
//   $count =0;
//   $el = $n[$k];
  
//   for ($m=0; $m < count($n); $m++) { 
//     if($n[$m] == $el) {
//       $count++;
//     }
//   }

//   if ($count<2) {
//     $result[] = $el;
//   }
// }

// print_r($result);



// ****************************************************************//
// **
// Array functions
// **
// ****************************************************************//
// ------------------------- 2-masala --------------------------------
// $arr = array("Toshmat"=>"31","Janob"=>"41","Eshmat"=>"39","Sardor"=>"40");

// a) Qiymati bo`yicha o`sish tartibda saralang
// $arr = array("Toshmat"=>"31","Janob"=>"41","Eshmat"=>"39","Sardor"=>"40");

// asort($arr);
// print_r($arr);
// b) Keylari bo`yicha o`sish tartibda saralang
// $arr = array("Toshmat"=>"31","Janob"=>"41","Eshmat"=>"39","Sardor"=>"40");
// ksort($arr);
// print_r($arr);
// c) Qiymati bo`yicha kamayish tartibda saralang
// arsort($arr);
// print_r($arr);
// d) Keylari bo`yicha kamayish tartibda saralang
// krsort($arr);
// print_r($arr);

// ------------------------- 5-masala --------------------------------
// $matn_1 = "1,4,6,8,9";
// $matn_2 = "1,3,2,5,10,7";
// Quyidagicha vergul(,) bilan ajratilgan ikkita matn berilgan. 
// Shu matnlardan foydalanib, quyidagi ko`rinishda yangi matn hosil qiling:
// Shartlar:
// -bir xil qiymatlilardan faqat 1 tasi olinsin;
// -sonlar ketma-ket osish tartibda bo`lsin;

// "1,2,3,4,5,6,7,8,9,10"

// $matn_1 = "1,4,6,8,9";
// $matn_2 = "1,3,2,5,10,7";

// $matn_1arr = explode(",",$matn_1);
// $matn_2arr = explode(",",$matn_2);

// $arrcombination = array_merge($matn_1arr,$matn_2arr);
// $sorted = array_unique($arrcombination);
// sort($sorted);
// print_r($sorted);

// ------------------------- 6-masala --------------------------------
// Yuqoridagidek 2 ga massiv berilgan. 
// $massiv_2 elementlari qiymati, $massiv_1 ning index keylariga mos kelganlar 
// elementlarini ekranga chiqaring:
// Natija:
// Array
// (
//     [js] => JavaScript
//     [pp] => php
// )

// $massiv_1 = [
//   "hh"=>"html", 
//   "cc"=>"CSS", 
//   "js"=>"JavaScript", 
//   "pp"=>"php", 
//   "my"=>"mysql", 
//   "psql"=>"postgresq", 
//   "jiji"=>"java"
// ];

// $massiv_2 = ["js", "css", "js", "pp", "mysql"];

// $result = [];
// foreach ($massiv_2 as $element) {
//   if (isset($massiv_1[$element])) {
//     $result[$element] = $massiv_1[$element];
//   }
// }

// print_r($result);

// ------------------------- 7-masala --------------------------------

// 7-masala. 1 o`lchamli massivdan foydalanib, sayt uchun pagination qiling
// masalan: 150 ta elementdan tashkil topgan 1 o`lchamli massiv bor.
// array(
//    "1-element",
//    "2-element",
//    ...
//    "150-element"
// );

// har bir sahifada 10 tadan element ko`rinsin, eng pastida 
// 1 2 3 4 ...n
// ko`rinishida pagination bo`lsin.

// har bir page ni bosganimda usha pagega mos array elementlarni chiqarsin.
// masalan man 5-page ni bossam 50-elementdan to 59-elementgacha ko'rsatsin.
// $start =($page-1)*$limit; 

// ------------------------- 8-masala --------------------------------

// 8-masala. Ikkita time berilgan. T1 va T2. (T1 > T2)
// 1. Ikkita vaqtni bir biriga qoshing. (T1 + T2)
// 2. Ikkita vaqtni farqini toping. (T1 - T2) 

// Date ga oid funksiya ishlatilmasin. Strtotime ham ishlatilmasin.
// Matematik fuksiyalar ishlatilishi mumkin. 
// Hint: explode(), implode(), floor() dan foydalaning 


// T1 + T2 = "43:17:0"
// T1 - T2 = "4:31:59"
// $t1 = "23:54:59";
// $t2 = "19:22:11";

// function addT1T2 ( $t1, $t2 ) { 
//   $t1exploded = explode(":", $t1);
//   $t2exploded = explode(":", $t2);
//   $soatT1 = (int)$t1exploded[0]*3600;
//   $soatT2 = (int)$t2exploded[0]*3600;
//   $daqiqaT1 = (int)$t1exploded[1]*60;
//   $daqiqaT2 = (int)$t2exploded[1]*60;
//   $soniyaT1 = (int)$t1exploded[2];
//   $soniyaT2 = (int)$t2exploded[2];
  
//   $totalSeconds1=$soatT1 + $daqiqaT1 + $soniyaT1;
//   $totalSeconds2=$soatT2 + $daqiqaT2 + $soniyaT2;

//   // Adding hoours
//   $addSeconds = $totalSeconds1+$totalSeconds2;
//   // Subtracting hoours
//   $diffSeconds = $totalSeconds1-$totalSeconds2;

//   $sumHours = floor($addSeconds/3600);
//   $sumMinutes = floor(($addSeconds%3600) / 60);
//   $sumSeconds = $addSeconds % 60;

//   $diffHours = floor($diffSeconds/3600);
//   $diffMinutes = floor(($diffSeconds%3600) / 60);
//   $diffSeconds = $diffSeconds % 60;
  
//   return "T1 + T2 = $sumHours:$sumMinutes:$sumSeconds"."</br>"."T1 - T2 = $diffHours:$diffMinutes:$diffSeconds";

// };
// print_r(addT1T2($t1, $t2));

// ------------------------- 9-masala --------------------------------
// 9-masala. Sonlardan tashkil topgan massivda,birinchi uchragan, 4 marta 
// takrorlangan massiv elementi topilsin. Yozgan kodingiz 
// 3 qatordan oshmasin.
// Natija: 1
// $massiv = array(3,3,1,12,1,2,3,4,1,4,5,7,3,5,2,4,3,2);

// $newarr = array_count_values($massiv);
// print_r($newarr[$massiv[0]]);
?>
  </body>
</html>