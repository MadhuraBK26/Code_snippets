<?php

$user_name = "root";
$password  = "compass";
$database  = "mytodo";
$server    = "localhost";

mysql_connect("$server", "$user_name", "$password");

mysql_select_db("$database");


$order = "INSERT INTO trial

          VALUES

          ('madhu',

           'saligrama')";


$result = mysql_query($order);

if ($result) {
    
    echo ("<br>Input data is succeed");
    
} else {
    
    echo ("<br>Input data is fail");
    
}
?> 