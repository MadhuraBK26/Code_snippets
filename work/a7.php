<?php
//error_reporting(0);
$question1 = array(
'question_text' => '1.Which of the following is not a type of constructor',


$answers =  array( array(
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
'question_text' => '2.Which of the following type of class allows only one object of it to be created?',
$answers =  array( array(
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

))

);
$collected_question=$question1[$_GET['question']];
$question_text=$collected_question['question_text'];
$answer_text=$collected_question['answer_text'];
echo $answer_text;
echo $question_text;
//print_r($question1);
?>