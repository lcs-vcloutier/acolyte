<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "admin", "Ltl3v8nezyUn", "acolyte_jobs");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT user, locationOfJob, payment";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["user"]. "</td><td>" . $row["locationOfJob"] . "</td><td>"
. $row["payment"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>