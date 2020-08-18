<?php
  

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'testt');
 

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con)
{
    echo"";
}
    else
    {
         die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>