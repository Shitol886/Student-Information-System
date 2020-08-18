
<?php
error_reporting(0);
include('config.php');

if (isset($_GET['submit'])) {
    
	$id=$_GET['id'];
    $name =$_GET['name'];
$rolno =$_GET['rollno'];
    $city =$_GET['city'];
    $pcont =$_GET['pcont'];
    $standerd =$_GET['standerd'];





if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "UPDATE student SET `id` = '$id', `rollno` = '$rolno', `name` = '$name ', `city` = ' $city', `pcont` = '$pcont', `standerd` = '$standerd' WHERE `id` = '$id'" ;
}
if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();

?>
