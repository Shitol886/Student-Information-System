<?php

include('config.php');

$id=$_REQUEST['id'];

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "DELETE FROM student  WHERE `id` = '$id'" ;

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();

?>
