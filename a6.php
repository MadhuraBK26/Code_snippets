<?php

   $input=array(
      array('q'=>"1.Which of the following type of class allows only one object of it to be created?",
   	
   'a'=>	"(1)Abstract class", 'w'=>false,
    'b'=> "(2)Singleton class", 'w'=>true,
   	'c'=>"(3)Friend class" ,  'w'=>"false",
      ),

  array('q'=> "2.Which of the following is not a type of constructor?",
   	'a'=>"(1)Copy constructor", 'w'=>"false",
   	'b'=>"(2)Friend constructor", 'w'=>"true",
   	'c'=>"(3)Default constructor", 'w'=>"false",
   	'd'=>"(4)Parameterized constructor", 'w'=>"false",
   	));
$collected_question = $input[$_GET['question']];
$q = $collected_question['q'];
$ans = $collected_question['a'];
$ans1=$collected_question['b'];
$ans2=$collected_question['c'];
$ans3=$collected_question['d'];
$ans3=$collected_question['e'];
echo $q;
echo $e;
?>
<html>
<input type="radio" name="question" >
</html>

<?php
echo $ans;
echo"<br>";
?>
<html>
<input type="radio" name="question" >
</html>
<?php
echo $ans1;
?>
<html>
<input type="radio" name="question" >
</html>
<?php
echo $ans2;
?>
<html>
<input type="radio" name="question" >
</html>
<?php
echo $ans3;
?>
