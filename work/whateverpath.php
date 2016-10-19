<html>
<i><b>2.Which of the following is not a type of constructor?<br></b></i>
   <input type="radio" name="account" value="Copy constructor "> Copy constructor <br>
  <input type="radio" name="account" value="Friend constructor">Friend constructor
  <br>
  <input type="radio" name="account" value="Default constructor "> Default constructor <br>
  <input type="radio" name="account" value="Parameterized constructor "> Parameterized constructor<br>

 <input type="submit" name="btn_submit" value="Submit"> <br><br></form>
</html>
 <?php

   if(isset($_POST['submit']))
   {
    //Do all the submission part or storing in DB work and all here
    header('Location: whateverpath.php');
   }
?>

$keys=array_keys($input);
   for($i=0;$i<count($input);$i++){
   	echo $keys[$i];
   	echo "<br>";
    
   foreach($input[$keys[$i]] as $key => $value){
   		echo $key.":" .$value."<br>";
   	}
   	echo "<br>";
   }
   ?>