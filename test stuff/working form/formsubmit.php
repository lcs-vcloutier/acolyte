<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "admin", "Ltl3v8nezyUn", "acolyte_jobs");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$locationOfJob = mysqli_real_escape_string($link, $_REQUEST['location']);
$payment = mysqli_real_escape_string($link, $_REQUEST['payment']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
 
// Attempt insert query execution
$sql = "INSERT INTO posted_jobs (title, email, locationOfJob, payment, descriptionOfJob) 
VALUES ('$title', '$email', '$locationOfJob', '5', '$description')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>