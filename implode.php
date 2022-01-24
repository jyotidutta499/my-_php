
<?php
//implode-->convert from array to string
$a=array(1,2,3,4,5,6,7);
echo implode($a)."<br>";

//explode--->convert from string to array
$a="Jyoti Dutta Purulia Station";
$b=explode(" ",$a);
print_r ($b);

//
$a="jyotidutta@gmali.com";
$b=explode("@",$a);
echo "<br>"."Name=".$b[0];

$c=explode(".",$b[1]);
echo "<br>"."Domain=".$c[0]."<br>"."Extention=".$c[1];

/*name=jyotidutta
domain=gmail
extention=com */
 ?>
