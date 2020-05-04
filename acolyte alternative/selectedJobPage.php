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
</head>
<body>
<h1><a href="index.html">ACOLYTE</a></h1>
        <p>SELECTED JOB</p>
  <?php
  $selectedJobId = mysqli_real_escape_string($conn, $_POST['selectedJobId']);
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
              <label for="payment">PAYMENT(USD):</label>
              <?php echo $row["payment"] ?> <br><br>
              <label for="description">DESCRIPTION:</label>
              <p><?php echo $row["descriptionOfJob"] ?></p>
    </div>
    <?php
    }
    } else { echo "0 results"; }
    $conn->close();
?>
       

</body>
</html>