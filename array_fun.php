<?php
//is array
$a=10;
if(is_array($a))
 {
   echo "It is an array.";
 }
 else{
   echo "not array";
 }

 //in array
 $c=array("4"=>"JYOTI","6"=>"SOUMI");
 if(in_array("SOUMI",$c))

   echo "in array";

 else
   echo "name not found";


 //array key exist
 $d=array("4"=>"JYOTI","6"=>"SOUMI");
 if(array_key_exists("dj",$d))

   echo "in array";

 else
   echo "name not found";
   //foreach loop
   $f=array(2,array(2,5,10),array("a"=>"20","b"=>"30"));
  foreach($f as $k=>$v)
  {
    if(is_array($v)){
    print_r ($v);
    echo "<br>";}
    else {
      echo "not in array.";
    }
    }
 ?>
