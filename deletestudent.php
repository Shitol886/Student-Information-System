<?php




include('config.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/stylee.css" />
<style>
    body
    {
       background-image: url(bgpic.jpg);
         background-size: cover
    }
    #student {
        background-color: white;
    font-family: 'Open Sans', sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#student td, #student th {
  border: 3px solid black;
  padding: 8px;
}



#student th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: lightseagreen;
  table, td, th {
  border: 1px solid Black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 30px;
}
    
  
    
    </style>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <h4><br><a class="btn btn-primary btn-sm" href="admin.php"style="float:left; margin:15px; color:black;font-size:20px">Back </a><br></h4>
 <div class="container">
<form mathod="GET" action="">


<head>
<table id="student">

<tr>
<th  ><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Roll no</strong></th>
<th><strong>City</strong></th>
<th><strong>Parents Contact no</strong></th>
<th><strong>Standerd</strong></th>
<th><strong>Edit</strong></th>
</tr>

<?php
$count=1;
$sel_query="Select * from student ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["rollno"]; ?></td>
<td align="center"><?php echo $row["city"]; ?></td>
<td align="center"><?php echo $row["pcont"]; ?></td>
<td align="center"><?php echo $row["standerd"]; ?></td>


<td align="center">

<a  class="btn btn-danger "href="deletedata.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
    
<?php $count++; } ?>

</table>
</div>
    </form>
</body>
</html>