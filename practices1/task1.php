<?php
$name = "Yamauchi Mebuki";
if ($name == "Yamauchi Mebuki") {
  echo "私は{$name}です";
}else{
  echo "{$name}ではありません" ;
}
echo "\n" ;

for ($i=1 ; $i<=1000 ; $i ++ ){
  $total += $i ;
}
echo $total ;
echo "\n" ;

$fruits =array("orange","peach","apple","banana","cherry") ;
foreach($fruits as $fruit){
  echo $fruit ;
  echo "\n" ;
}

$start = 1 ;
$end = 100 ;
for($i = $start; $i <= $end; $i ++){
  if ($i % 5 ==0){
    echo $i ;
    echo "\n" ;
  }
}