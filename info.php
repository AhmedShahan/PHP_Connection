<!DOCTYPE html>
<html>
<head>
<title>View Clients</title>
</head>
<body>

<h1>View Clients</h1>

<a href="http://localhost:3000/add_clients.php">Back</a>


<table>
  <tr>
    <th>id</th>
    <th>First Name</th>
    <th>Last Name</th>
  </tr>

<?php
    require_once('connect_sql.php');

    session_start();
    $ActiveID=$_SESSION['id'];


    $sql = "SELECT id, first_name, last_name FROM clients Where id='$ActiveID'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<tr>
            <td>". $row['id'] ."</td>
            <td>". $row['first_name'] ."</td>
            <td>". $row['last_name'] ."</td>
        </tr>";
    }
?>

</table>

</body>
</html>