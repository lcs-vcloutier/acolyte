<?php 
  include_once 'backend/dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="app.js"></script>
</head>
<body>
        <h1><a href="index.html">ACOLYTE</a></h1>
        <p>GET A JOB</p>
<?php
$result = mysqli_query($con,"SELECT title, locationOfJob, payment FROM acolyte_jobs");

echo "<table class= 'jobTable' id='jobTable'>
<tr>
<th> <input type='text' id='titlefilter' onkeyup='tableFilterFunction('titlefilter',num=0)' placeholder='TITLE'></th>
    <th><input type='text' id='locationfilter' onkeyup='tableFilterFunction('locationfilter',num=1)' placeholder='LOCATION'></th>
    <th><button onclick='sortTable('jobTable',2)'>PAYMENT(USD)</button></th>
</tr>";
//this is where i messed up i think (the while loop)
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['locationOfJob'] . "</td>";
echo "<td>" . $row['payment'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>