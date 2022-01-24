






  <form action="" method="post" id="quiz-form">
          <p>
              <input type="number" name="a" id="a" required="required" value="<?php echo $a; ?>" /> <b>First Number</b>
          </p>
          <p>
              <input type="number" name="b" id="b" required="required" value="<?php echo $b; ?>" /> <b>Second Number</b>
          </p>

          <p>
              <input type="text" name="d" value="<?php echo $d_POST; ?>"> <b>Result</b>
          </p>
<input type="submit" value="+" name="o">
<input type="submit" value="-" name="o">
<input type="submit" value="*" name="o">
<input type="submit" value="/" name="o">
</form>


<?php

$a=$_POST['a'];
$b=$_POST['b'];
$o=$_POST['o'];
//$d = '';
Switch($o)
   {
     case'+':
     $d=$a+$b;
     break;

     case'-':
     $d=$a-$b;
     break;

     case'*':
     $d=$a*$b;
     break;

     case'/':
     $d=$a/$b;

   }

?>
