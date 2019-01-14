<?php
//parse_str(ﬁle_get_contents("php://input"), $_PUT);
include "products.php";
function get_dinHoroskp($products)
{
   
    foreach($products as $product=>$dinHoroskp){
    echo $dinHoroskp.'<br>';
     $resultOne = substr($dinHoroskp, 0, 2);
    $resultTwo = substr($dinHoroskp, 2, 4);
    echo  $resultOne.'<br>';
    echo  $resultTwo.'<br>';
};

   // echo $resultTwo;
   // $result = $resultOne*30+$resultTwo;
  /* if($result<20){
    return "Stenbocken";
   
   } elseif($result<50) {
   return "Vattumannen";
  
   }else{
   return "vv";}*/
}
get_dinHoroskp($products);
?>