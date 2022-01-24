<?php

//string lengths
$a="Hello World Hello World ";
echo strlen($a);

//string word count
echo "<br>";
echo str_word_count($a)."<br>";

//searching position of a letter
echo strpos($a,"W")."<br>";

//serching position of a letter ---not case sensitive
echo stripos($a,"w")."<br>";

//last occurrence of a letter in a word
echo strrpos($a,"o")."<br>";

//last occurrence of a letter in a word---not case sensitive
echo strripos($a,"O")."<br>";

//from where n numbers of letters wil be print
echo substr($a,0,7)."<br>";

//starting from a specific letter
echo strstr($a,"l")."<br>";

echo strchr($a,"l")."<br>";

//replace any word
echo str_replace("World","Earth",$a)."<br>";

//replace any word----not case sensitive
echo str_ireplace("world","Earth",$a)."<br>";

//repeat a string
echo str_repeat($a,4)."<br>";

//after a specific position replace a string using substr_replace
echo substr_replace($a,"Jyoti",6)."<br>";

//convert from string to array
print_r (str_split($a))."<br>";
echo "<br>";
//encryption
echo md5($a)."<br>";

echo sha1("jyoti")."<br>";

//ascii value
echo ord('a')."<br>";
//
echo chr(97+7)."<br>";

 ?>
