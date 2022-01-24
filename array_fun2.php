<?php

//array merge
$a=array("a"=>"apple","b"=>"cat","c"=>"can");
$b=array("x"=>"den","y"=>"hen","z"=>"key");
print_r(array_merge($a,$b));
echo "<br>";

$a=array("apple","cat","can");
$b=array("den","hen","key");
print_r(array_merge($a,$b));
echo "<br>";

//array_combine
print_r (array_combine($a,$b));
echo "<br>";

//array_chunk
$c=array("1","2","3","4","5");
print_r(array_chunk($c,2));
echo "<br>";

//array_count_values
$c=array("1","2","3","4","5","3","1");
print_r(array_count_values($c));
echo "<br>";

//array_diff
$a=array("a"=>"apple","b"=>"cat","c"=>"can");
$b=array("a"=>"apple","b"=>"jar","c"=>"can");
print_r (array_diff($a,$b));
echo "<br>";

//array_diff_key
$a=array("a"=>"apple","b"=>"cat","c"=>"can");
$b=array("1"=>"apple","b"=>"jar","c"=>"can");
print_r (array_diff_key($a,$b));
echo "<br>";

//array_pop
$a=array("a"=>"apple","b"=>"cat","c"=>"can");
print_r(array_pop($a));
echo "<br>";

//array_push
$a=array("0"=>"apple","1"=>"cat","2"=>"can");
array_push($a,"bed");
print_r ($a);
echo "<br>";

//array_flip
$a=array("0"=>"apple","1"=>"jar","2"=>"can");
print_r (array_flip($a));
echo "<br>";

//array_sorting ----use for accending 
//a_sort
echo "_____________asort______________"."<br>";
$j=array("a"=>"19","b"=>"2","c"=>"31","d"=>"1");
asort($j);
foreach($j as $k=>$v)
{
  echo $k."--->".$v."<br>";
}
echo "_____________arsort______________"."<br>";
//arsort
$j=array("a"=>"19","b"=>"2","c"=>"31","d"=>"1");
arsort($j);
foreach($j as $k=>$v)
{
  echo $k."--->".$v."<br>";
}

//ksort
echo "_____________ksort______________"."<br>";

$j=array("d"=>"19","b"=>"2","c"=>"31","a"=>"1");
ksort($j);
foreach($j as $k=>$v)
{
  echo $k."--->".$v."<br>";
}

//krsort---->d
echo "_____________krsort______________"."<br>";

$j=array("d"=>"19","b"=>"2","c"=>"31","a"=>"1");
krsort($j);
foreach($j as $k=>$v)
{
  echo $k."--->".$v."<br>";
}

//sorting indexing array -->ascending order
$d=array("jyoti","soumi","bishnu","priti");
echo "<br>";
sort($d);
$l=count($d);
for($i=0;$i<$l;$i++)
{
  echo $d[$i]."<br>";
}

$d=array("jyoti","soumi","bishnu","priti");
echo "<br>";
rsort($d);
$l=count($d);
for($i=0;$i<$l;$i++)
{
  echo $d[$i]."<br>";
}


 ?>
