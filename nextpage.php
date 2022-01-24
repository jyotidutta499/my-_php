

<?php
$a=$_REQUEST['n1'];
$b=$_REQUEST['n2'];
$c=$_REQUEST['A'];
Switch($c)
   {
     case'+':
     $d=$a+$b;
     echo "RESULT<input type='text' value='$d'>";break;

     case'-':
     $d=$a-$b;
     echo "RESULT<input type='text' value='$d'>";break;

     case'*':
     $d=$a*$b;
     echo "RESULT<input type='text' value='$d'>";break;

     case'/':
     $d=$a/$b;
     echo "RESULT<input type='text' value='$d'>";break;}
?>