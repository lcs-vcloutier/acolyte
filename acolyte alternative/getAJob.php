<?php 
  include_once 'backend/dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="app.js"></script>
</head>
<body>
        <h1><a href="index.html">ACOLYTE</a></h1>
        <p>GET A JOB</p> 
<table class= "jobTable" id="jobTable">
  <tr class="header">
    <td class="idColumn">id</td>
    <th class="title"> <input type="text" id="titlefilter" onkeyup="tableFilterFunction('titlefilter',num=1)" placeholder="TITLE"></th>
    <th class="payment"><button onclick="sortTable('jobTable',2)">PAYMENT(USD)</button></th>
  </tr>
<?php
$sql = "SELECT id, title, payment FROM posted_jobs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr> <td> <form id=selectedJobRadioForm action=\"selectedJobPage.php\" method = \"POST\"> 
<input type=\"submit\" class=\"selectedJobIdSubmit\" name=\"selectedJobId\"  value=\"" . $row["id"]. "\"/> 
<form> </td> <td>" . $row["title"]. "</td><td>". $row["payment"]. "</td> 
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
</body>
</html>