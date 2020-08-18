<?php
error_reporting(0);

include('config.php');

$id=$_REQUEST['id'];
$sql = "SELECT * from student where id='".$id."'"; 
$result = mysqli_query($con, $sql) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>



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
    <h4><br><a class="btn btn-primary btn-sm" href="updatestudent.php" style="float:left;margin :15px; color:black;font-size:20px">Back </a><br></h4>
    <div>
    <h4><br><a href="upd.php"style="float:left; color:black;font-size:20px"> </a><br></h4>
</div>

 </head>
 <body>

<div>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300&display=swap" rel="stylesheet">
<form name="form" method="GET" action="updatedata.php">
<div class=container></div> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
 <div id="container">
    <tr>
         <lebel><b>Roll No</b></lebel>
    
        <td><br><input type="text" name="rollno" placeholder="Enter Roll no" 
required value="<?php echo $row['rollno'];?>" /><br></td>
       
   </tr>
    </div>
    <div id="container">
        <tr>
        <lebel><b>Full Name </b></lebel>
    </tr>
     
    <td><br><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /><br></td>
    </div>
    <div id="container">
   <tr>
       
       <lebel><b>City</b></lebel>
     <td><br><input type="text" name="city" placeholder="Enter City" 
required value="<?php echo $row['city'];?>" /><br></td>
    </tr>
    </div>
    
    
    <div id="container">
     <tr>
       
         <lebel><b>Parents Contact no</b></lebel>
    <td><br><input type="text" name="pcont" placeholder="Enter Parents Contact no" 
required value="<?php echo $row['pcont'];?>" /><br></td>
    </tr>
    </div>
    <tr>
   <div id="container">
   <tr>
       <lebel><b>Standard</b></lebel>
    
    <td><td><br><input type="text" name="standerd" placeholder="Enter standerd" 
required value="<?php echo $row['standerd'];?>" /><br></td>
    </tr>
    </div>
    
       <div id="container">
       <tr>
        <td><br> <td colspan="2" align="center"><br> <input type="submit"
         name ="submit" value="Update" id="but_submit"><br></td>         

    </tr>
    </div>
    </table>
</form>
    </body>
    </html

<?

<?php  ?>   
 
