<?php
   $input=array(1=>$_POST['name'],2=>$_POST['account'],3=>$_POST['transaction']);
   echo $input[1];
   echo "<br>";
   echo $input[2];
   echo "<br>";

   if($input[3]=='Good'){
   
   	echo "Thank you for the feedback.We ensure providing same service";
   }
    if($input[3]=='Not Satisfactory')
   {
   	echo "We will improve";

   }
   if($input[3]=='Poor')
   {
   	echo "We regret for the inconvenience.We will improve our quality of service";
}
 
?>