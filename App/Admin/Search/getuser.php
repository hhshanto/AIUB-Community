<!DOCTYPE html>
<html>
<head>
<style>
.tabClass {
    width: 40%;
    float: left;
}

.tabClass td, th {
    border: 1px solid black;
    padding: 5px;
}

.tabClass th 
{
    text-align: left;.
}
</style>
</head>
<body>
<?php
$q =$_GET['q'];
$serverName="localhost";
$username="root";
$password="";
$databaseName="aiub community";
$con = mysqli_connect($serverName,$username,$password,$databaseName);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM registration WHERE Name like '%".$q."%';";
$result = mysqli_query($con,$sql);

echo "<table class=\"tabClass\">
<tr>
<th>Name</th>
<th>Username</th>
<th>ID</th>
<th>Email</th>
</tr>";
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Username'] . "</td>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>