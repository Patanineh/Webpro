<html>
<head>
<title>onlyPage</title>
</head>
<body>
onlyPage.php
<br><br>
Result
<br><br>
<?php
if(isset($_GET['btnSubmit']))
{
$fName = $_GET['fName'];
$lName = $_GET['lName'];
$address = $_GET['address'];
echo "First Name : ".$fName;
echo "<br><br>";
echo "Last Name : ".$lName;
echo "<br><br>";
echo "Address : ".$address;
echo "<br><br>"; }
else
{
?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"

method="get"> <!--แบบที่1 มีการเชคความปลอดภัย-->

<!-- <form action="#" method="get"> -->  <!--แบบที่2-->
<!-- <form action="onlyPage.php" method="get"> --> <!--แบบที่3-->
First Name :
<input type="text" name="fName">
<br><br>
Last Name:
<input type="text" name="lName">
<br><br>
Address:
<textarea name="address" cols="50" rows="5"></textarea>
<br><br>
<input name="btnSubmit" type="submit" value="OK">
<input name="btnReset" type="reset" value="Clear">
</form>
<?php
}
?>
</body>
</html>