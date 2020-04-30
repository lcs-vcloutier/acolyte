<?php
$servername = "localhost";
$username = "admin";
$password = "Ltl3v8nezyUn";
$dbname = "acolyte_jobs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT title, locationOfJob, payment FROM posted_jobs";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["title"] . $row["locationOfjob"] . $row["payment"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>