/*print($question1['question_text']);
echo"<br>";
print($answers1[0]['answer_text']);
echo"<br>";
print($answers1[1]['answer_text']);
echo"<br>";
print($answers1[2]['answer_text']);
<html>
<form  method="post" action=""  >

<br><input type="submit" name="btn_submit" value="Submit"><br>
</form>
</html>
<?php
//print_r($question1);
//print_r($questions1);
//print_r($questions2);
//print_r($answers1);
//print_r($answers2);


if (isset($_POST['btn_submit']))
{

foreach($question1 as $question=>$q){
	echo $q;
	echo "<br>";


foreach($q as $answer1=>$a1){
	foreach($a1 as $p=>$x){
		echo"<br>";
		echo $x;
	}
}
}
//{

}
?>*/


error_reporting(E_ALL);
ini_set("display_errors", 1);
include("file_with_errors.php");