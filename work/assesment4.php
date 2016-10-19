
<?php
//error_reporting(0);
$question1 = array(
'question_text' => '1.Which of the following is not a type of constructor',
$answers1 =  array( array(
'answer_text' => '(1)Copy constructor',
'correct_answer' => false,

),
 array(
'answer_text' => '(2)Friend constructor',
'correct_answer' =>true,

),
 array(
'answer_text' => '(3)Default constructor',
'correct_answer' => false,

)),
$question2 = array(
'question_text' => '2.Which of the following type of class allows only one object of it to be created',
$answer2=array(
 array(
'answer_text' => '(1)Abstract class',
'correct_answer' => false,

),
array(
'answer_text' => '(2)Singleton class',
'correct_answer' =>true,

),
array(
'answer_text' => '(3)Friend class',
'correct_answer' => false,

))));
//print_r($question1);
print($question1['question_text']);

//echo $question1($answers1[0]);
//print($answers1[0]['answer_text']);
//print $answers1['answer_text'];
//print $question1($answers1['answer_text']);

 //var_dump($question1);
 //if (isset($_POST['btn_submit']))
//{
//if(!is_array($question1))

foreach($question1 as $question=>$q){
	//echo $q;
	echo "<br>";
//else
	//echo ($question1['question_text']);


foreach($q as $answer1=>$a1){
	foreach($a1 as $p=>$x){
		echo"<br>";
		echo $x;
	}
	}
}

foreach((array)$question2 as $questionn=>$q2){
	//echo $q2;
	echo "<br>";


	foreach((array)$q2 as $answer2=>$a2){
	foreach((array)$a2 as $p2=>$x2){
      echo "<br>";
       echo $x2;
}
}
}




?>

