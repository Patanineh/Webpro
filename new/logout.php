<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
session_destroy();
$Username = $_GET['Username'];
echo "User : " . $Username . " now logout.";
echo "<br><a href='login.php'>คลิก กลับไปหน้า login </a>"
?>
</body>
</html>