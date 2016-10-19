<?php
$person= [ 
'age' => 31, 
'hair' => 'brown', 
'career' => 'web developer',
 ];
 $person['name']= 'Madhu';
 
 unset($person['age']);

require 'index.view3.php';
?>

