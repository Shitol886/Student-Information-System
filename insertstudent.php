



<html>
 <head>
 <style>
     body{
      
  margin: auto;
  padding: 0;
  font-family: sans-serif;
         background-image: url(bgpic.jpg);
  
    background-size: cover
    }
    #container
     {
         padding-left: 35%; 
         font-family: 'Open Sans', sans-serif;
        margin:auto
     }
     

     input[type=text],[type=number] {
         
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
          font-family: 'Open Sans', sans-serif;
         border-radius:10px;
     }
     input[type=submit]{
     border:0;
  background-color:royalblue;
  display: inline-block;
  margin: 10px auto;
  text-align: center;
border: 2px solid white;
  padding: 14px 40px;
  outline: none;
  color:white;
  cursor: pointer;
    border-radius:10px;
     }
</style>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  
    <link href="css/stylee" rel="stylesheet"type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <div>
    <h4><br><a class="btn btn-primary btn-sm" href="records.php"style="float:left;margin:15px; color:black;font-size:20px">Back </a><br></h4>
</div>

 </head>
 <body>   
 
<form mathod="GET" action="insertstudent.php">

<div id="container">
    <tr>
         <lebel><b>Roll No</b></lebel>
    
        <td><br><input type="text" name="rollno" value="" placeholder="Enter Rollno" required><br></td>
       
   </tr>
    </div>
       <div id="container">
        <tr>
        <lebel><b>Full Name </b></lebel>
    </tr>
     
    <td> <br><input type="text" name="name" value="" placeholder="Enter Full Name" required><br></td>
    </div>
    <div id="container">
   <tr>
       
       <lebel><b>City</b></lebel>
     <td><br><input type="text" name="city" value="" placeholder="Enter City" required><br></td>
    </tr>
    </div>
    <div id="container">
     <tr>
       
         <lebel><b>Parents Contact no</b></lebel>
    <td><br><input type="text" name="pcont" value=""  placeholder="Enter Parents Contacts no" required><br></td>
    </tr>
    </div>
    <div id="container">
   <tr>
       <lebel><b>Standard</b></lebel>
    
    <td><br><input type="number" name="standerd" value="" placeholder="Enter Standard" required><br></td>
    
     </tr>
       </div>
       <div id="container">
       <tr>
        <td colspan="2" align="center"><br> <input type="submit"
         name ="submit" value="submit" id="but_submit"><br></td>
    </tr>
    </div>

</div>
</form>
    </table>
    </body>
</html>


<?php

include('config.php');

    if(isset($_GET['submit'])){
   
   

    $rolno =  $_GET['rollno'];
      $name =  $_GET['name'];
     $city =  $_GET['city'];
      $pcon= $_GET['pcont'];
      $std= $_GET['standerd'];


$sql = "INSERT INTO student (rollno,name,city,pcont,standerd) VALUES ('$rolno','$name','$city','$pcon','$std')";

    
if(mysqli_query($con, $sql)){
    echo "Records added successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);

}
    
mysqli_close($con);

    }
    
?>
 
 