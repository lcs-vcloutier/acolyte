<<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="formsubmit.php" method="post">
    <p>
        <label for="title">title:</label>
        <input type="text" name="title" id="title">
    </p>
    <p>
        <label for="email">email:</label>
        <input type="email" name="email" id="email">
    </p>
    <p>
        <label for="location">location:</label>
        <input type="text" name="location" id="location">
    </p>
    <p>
        <label for="payment">payment:</label>
        <input type="number" name="payment" id="payment">
    </p>
    <p>
        <label for="description">Email Address:</label>
        <input type="text" name="description" id="description">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>