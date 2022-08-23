<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
</head>
<body>

<?php
if ($_POST)
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="clientsdb";

    $ID=$_POST['fname'];
    // session_start();
    $_SESSION['active']=$ID;
    $conn=mysqli_connect($host, $user, $pass, $db);
    $query="SELECT * FROM clients WHERE id='$ID'";

    $result=mysqli_query($conn,$query);

    if (mysqli_num_rows($result)==1)
    {
        header('location:http://localhost:3000/info.php');
    }
    else
    {
        echo "Please Inter valied ID";
    }


}
session_start();
       

$_SESSION['id'] = $_POST['fname'];




?>
<h1>LOGIN</h1>
<form method="POST">
  <label for="fname">USER ID:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <input type="submit" name="submit" value="Submit">
</form> 





</body>
</html>
