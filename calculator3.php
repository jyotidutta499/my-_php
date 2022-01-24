
<form action="" method="post">
enter first value:<input type="text"name="n1" value="<?php $a=$_REQUEST['n1']; echo $a;?>">
enter second value:<input type="text"name="n2"  value="<?php $b=$_REQUEST['n2']; echo $b;?>"><br>
<input type="submit" value="+" name="A">
<input type="submit" value="-" name="A">
<input type="submit" value="*" name="A">
<input type="submit" value="/" name="A">
</form>



<?php
if(ISSET($_REQUEST['A']))
{
$a=$_REQUEST['n1'];
$b=$_REQUEST['n2'];
$c=$_REQUEST['A'];
Switch($c)
   {
     case'+':
     $d=$a+$b;
     echo "RESULT <input type='text' value='$d'>";break;

     case'-':
     $d=$a-$b;
     echo "RESULT <input type='text' value='$d'>";break;

     case'*':
     $d=$a*$b;
     echo "RESULT <input type='text' value='$d'>";break;

     case'/':
     $d=$a/$b;
     echo "RESULT <input type='text' value='$d'>";break;
   }
}
?>
