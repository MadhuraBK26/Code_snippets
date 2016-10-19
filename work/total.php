<?php

	require 'total1.html';

    if(isset($_POST['btn_submit']))
    {
        $english = $_POST['num1'];
        $kannada= $_POST['num2'];
        $hindi = $_POST['num3'];
        $maths= $_POST['num4'];
        $science=$_POST['num5'];
        $total=$_POST['total'];

        $total =  $english+$kannada+$hindi+$maths+$science;
    
 
    	 
    	    
       	if(($_POST['num1']>100) || ($_POST['num2']>100) || ($_POST['num3']>100) || ($_POST['num4']>100) || ($_POST['num5']>100))
    	      	{
    	      		echo "Subject marks cannot be greater than 100";
    	      	}
    	      	
    	     
    	      else	if(($_POST['num1']<0) || ($_POST['num2']<0) || ($_POST['num3']<0) || ($_POST['num4']<0) || ($_POST['num5']<0))
    	      	{
    	      		echo "Subject marks cannot be negative";
    	      	}
    	      	
    	      
        	 else{
        	 	    echo "<p>English=  $english</p>";

                    echo "<p>Kannada=  $kannada</p>";
                    echo "<p>Hindi=  $hindi</p>";
                    echo "<p>Maths=  $maths</p>";
                    echo "<p>Science=  $science</p>";
    	      		echo "The total value is: ".$total;

    	      	}
    	      	
    } 

?>
