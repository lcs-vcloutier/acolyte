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
  $selectedJobId = mysqli_real_escape_string($conn, $_POST['jobRadio']);
  $sql = "SELECT * FROM posted_jobs WHERE `id` = $selectedJobId";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  ?>

    <div id="form-div">
              <label for="title">TITLE:</label> <br><br>
              <p><?php echo $row["title"] ?> </p>
              <label for="email">EMAIL:</label><br><br>
              <p><?php echo $row["email"] ?></p>           
              <label for="location">LOCATION:</label><br><br>
              <p><?php echo $row["locationOfJob"] ?></p>
              <label for="payment">PAYMENT(USD):</label><br><br>
              <p><?php echo $row["payment"] ?></p>
              <label for="description">DESCRIPTION:</label><br><br>
              <p><?php echo $row["descriptionOfJob"] ?></p>
    </div>
    <?php
    }
    } else { echo "0 results"; }
    $conn->close();
?>
       

</body>
</html>