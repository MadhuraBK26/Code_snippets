
<?php
error_reporting(0);
$question1 = array(
'question_text' => '1.Which of the following is not a type of constructor',
$answers1 =  array(
0 => array(
'answer_text' => '(1)Copy constructor',
'correct_answer' => false,

),
1 => array(
'answer_text' => '(2)Friend constructor',
'correct_answer' =>true,

),
2 => array(
'answer_text' => '(3)Default constructor',
'correct_answer' => false,
)

)
);



foreach($question1 as $question=>$q){
	//echo $q;
	echo "<br>";
//else
	//echo ($question1['question_text']);


foreach((array)$q as $answer1=>$a1){
	foreach((array)$a1 as $p=>$x){
		echo"<br>";
		echo $x;
	}
	}
}





?>

