<?php
 $completed=$_GET('completed');
 if($completed==1)
 {
 	echo "Completed";
 }
 	else{
 		echo "Incomplete";

 }
 require 'index.view4a.php';
 ?>