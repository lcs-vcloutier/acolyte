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
</head>
<body>
  <?php
  $selectedJobId = mysqli_real_escape_string($conn, $_POST['jobRadio']);
  $sql = "SELECT * FROM posted_jobs WHERE ROWNUM = $selectedJobId ";
  $result = $conn->query($sql); 
  echo $row["title"]
       /* <h1><a href="index.html">ACOLYTE</a></h1>
        <p>SELECTED JOB</p>
        <div id="form-div">
              <label for="title">TITLE:</label> <br><br>
              <p></p>
              <label for="email">EMAIL:</label><br><br>
              <p></p>           
              <label for="location">LOCATION:</label><br><br>
              <p></p>
              <label for="payment">PAYMENT(USD):</label><br><br>
              <p></p>
              <label for="description">DESCRIPTION:</label><br><br>
              <p></p>
    </div>
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["title"]. "</td><td>" . $row["email"] . "</td><td>"
. $row["locationOfJob"]. "</td> <td>" . $row["payment"]. "</td> <td>" . $row["descriptionOFJob"]. "</td> </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
 */
?>
</body>
</html>