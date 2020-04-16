<?php
//数値を２倍にして返す関数作成する
function A_multiple_of_2($a){
  $result =0;
  // $aを2倍にして結果を返す
  $result =$a*2;
  return $result;
}
echo A_multiple_of_2(2);
echo "\n";

//$a+$bの結果を関数fを作る
function f($a, $b){
  $result = 0;
  $result =$a + $b;
  return $result;
}
// 4+6の結果を返す
echo f(4,6);
echo "\n";

// $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成する
$arr =[1,3,5,7,9];
$result = array_product($arr);
echo $result;
echo "\n";


function times($arr){
  $result =0;
  $result =array_product($arr);
  return $result;
}
$arr =[1,3,5,7,9];
echo times($arr);
echo "\n";

// 配列の中で一番大きい値を返すmax_arrayという関数を実装する
echo max($arr);
echo "\n";

function max_array($arr){
  // 配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
}    
echo max_array($arr);
echo "\n";

// $htmlの<a>タグを消す
$html ='<li><a href="#">Home</a></li>';
echo strip_tags($html, '<li>');
echo "\n";

//$arrの配列に11と13を追加する
array_push($arr, 11, 13);
print_r($arr);
echo "\n";

//$arrに$arr2を結合する
$arr2 =[0,2,4,6,8];
$array = array_merge($arr, $arr2);
print_r($array);
echo "\n";

//現在の日時を表す
$date = time();
echo date("Y/m/d H:i:s",$date);
