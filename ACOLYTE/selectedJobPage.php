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
<h1><a href="index.html">ACOLYTE</a></h1>
        <p>SELECTED JOB</p>
  <?php
  $selectedJobId = $_COOKIE["selectedJobCookie"];
  $sql = "SELECT * FROM posted_jobs WHERE `id` = $selectedJobId";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  ?>

    <div id="form-div">
              <label for="title">TITLE:</label>
              <?php echo $row["title"] ?> <br><br>
              <label for="email">EMAIL:</label>
              <?php echo $row["email"] ?> <br><br>    
              <label for="location">LOCATION:</label>
              <?php echo $row["locationOfJob"] ?> <br><br>
              <label for="payment">PAYMENT(USD):</label>
              <?php echo $row["payment"] ?> <br><br>
              <label for="description">DESCRIPTION:</label>
              <p><?php echo $row["descriptionOfJob"] ?></p>
    </div>
    <?php
    }
    } else { echo "TRY AGAIN"; }
    $conn->close();
?>
</body>
</html>