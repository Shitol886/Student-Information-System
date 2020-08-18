<?php

include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: project.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<!doctype html>
<html>
    <head> 
   
        <h2 align='center'>Welcome to Student Information System</h2>
        </head>
<body>
    <h3 align='right'> <a href="admin.php">Admin login</a></h3>
     
<table style="width:30%;"align ="center" border="1">
    <tr>
        <td colspan="2" align="center">Student Information System</td>
    </tr>
    <tr>
    <td align="left">Choose Standard</td>
    
    <td >
    <select name="std"required>
        <option value="1">1st</option>
        <option value="2">2nd</option>
        <option value="3">3rd</option>
        <option value="4">4th</option>
        <option value="5">5th</option>
    </select>
        </td>
    </tr>
    <tr>
        <td align="left">Enter Rollno</td>
        <td><input type="text"name="rollno"required</td>
    </tr>
    <td colspan="2"align="center"><input type="submit"name="submit"value="show Info"></td>
</table>
            <h5><a href="admin</h5>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
        <form method="post" action="index.php">
             </form>
    </body>
</html>


