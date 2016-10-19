<?php
require 'total1.php';
if($_POST['num1']>100)
              
                    echo "Subject marks cannot be greater than 100";
              
              if($_POST['num2']>100)
              
                    echo "Subject marks cannot be greater than 100";
              
                if($_POST['num3']>100)
                
                    echo "Subject marks cannot be greater than 100";
                
                if($_POST['num4']>100)
                
                    echo "Subject marks cannot be greater than 100";
                
                if($_POST['num5']>100)
                
                    echo "Subject marks cannot be greater than 100";
                
             
                if($_POST['num1']<0)
                
                    echo "Subject marks cannot be negative";
                
                if($_POST['num2']<0)
                
                    echo "Subject marks cannot be negative";
                
                if($_POST['num3']<0)
                
                    echo "Subject marks cannot be negative";
                
                if($_POST['num4']<0)
                
                    echo "Subject marks cannot negative";
                
                if($_POST['num5']<0)
                
                    echo "Subject marks cannot be negative";

    if(isset($_POST['btn_submit']))
    {
        $english = $_POST['num1'];
        $kannada= $_POST['num2'];
        $hindi = $_POST['num3'];
        $maths= $_POST['num4'];
        $science=$_POST['num5'];
    

        $total =  $english+$kannada+$hindi+$maths+$science;
    
 echo "The total value is: ".$total;
    	 
    	     }

    	      	
              

    	      	
    	      	
    

?>
