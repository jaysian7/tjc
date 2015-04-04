<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>GAP Promotions - LA Hacks</title>
</head>

<body>
<h1>GAP Promotions</h1>
<form action="register.php" method="post">
First Name:<br>
<input type="text" name="FirstName"/>
<br>
Last Name:<br>
<input type="text" name="LastName"/>
<br>
Email Address:<br>
<input type="text" name="Email"/>
<br>
Password:<br>
<input type ="password" name="Pass"/>
<br>
<input type="submit" value="Submit"/>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>