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
<table class= "jobTable" id="jobTable">
  <tr class="header">
    <th> <input type="text" id="titlefilter" onkeyup="tableFilterFunction('titlefilter',num=0)" placeholder="TITLE"></th>
    <th><input type="text" id="locationfilter" onkeyup="tableFilterFunction('locationfilter',num=1)" placeholder="LOCATION"></th>
    <th><button onclick="sortTable('jobTable',2)">PAYMENT(USD)</button></th>
  </tr>
<?php
$sql = "SELECT id, title, locationOfJob, payment FROM posted_jobs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr data-href='selectedJobPage.php'><td>" . $row["title"]. "</td><td>" . $row["locationOfJob"] . "</td><td>"
. $row["payment"]. "</td> </tr>";
}
} else { echo "0 results"; }
$conn->close();
?>
</table>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const rows = document.querySelectorAll("tr[data-href]");

  rows.forEach(row => { 
    row.addEventListener("click",() => {
      window.location.href = row.dataset.href

    });

  });
  
});
</script>
 
</body>
</html>