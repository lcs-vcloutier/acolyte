
<?php
include_once 'dbh.php';


//make form submit to itself?


$title = mysqli_real_escape_string($conn, $_POST['title']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$payment = mysqli_real_escape_string($conn, $_POST['payment']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

// Attempt insert query execution
$sql = "INSERT INTO `posted_jobs` (`title`, `email`, `payment`, `descriptionOfJob`) 
VALUES ('$title', '$email', '6', '$description')";
if(mysqli_query($conn, $sql)){
    echo "Job added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
header("location: ../index.html?submit=success"); 
?>