
<html>
<form  method="post" action=""  >
   <i><b> 2.Which of the following is not a type of constructor?<br></b></i></td>
  <input type="radio" name="name" value="Copy constructor" >Copy constructor <br>
  <input type="radio" name="name" value="Friend constructor" >Friend constructor
  <br> 
  <input type="radio" name="name" value="Default constructor" >Default constructor <br>
   <input type="radio" name="name" value="Parametrized constructor" >Parametrized constructor <br>
  <input type="submit" name="btn_submit" value="Submit"> <br><br>
  <input type="submit" name="btn_submit1" value="Submit1"> <br><br>
  </form>
 </html>


 <?php

if (isset($_POST['btn_submit1'])) {
    $keys = array_keys($input);
    if ($i = 1) {
        echo $keys[$i];
        echo "<br>";
        
    }
    
    foreach ($input[$keys[$i]] as $key => $value) {
        echo $key . ":" . $value . "<br>";
    }
    echo "<br>";


} else if (isset($_POST['btn_submit'])) {
    
    header('Location: /welcome4.php');
    
    echo "<form  method='post' action='assessment4c.php'  >";
    
    
}
?>

