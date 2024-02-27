<?php
$bookId = isset($_POST['bookId']) ? $_POST['bookId'] : '';
$bookName = isset($_POST['bookName']) ? $_POST['bookName'] : '';
$typeId = isset($_POST['typeId']) ? $_POST['typeId'] : '';
$statusId = isset($_POST['statusId']) ? $_POST['statusId'] : '';
$publish = isset($_POST['publish']) ? $_POST['publish'] : '';
$unitPrice = isset($_POST['unitPrice']) ? $_POST['unitPrice'] : '';
$unitRent = isset($_POST['unitRent']) ? $_POST['unitRent'] : '';
$dayAmount = isset($_POST['dayAmount']) ? $_POST['dayAmount'] : '';
$imageFile = isset($_FILES['imageFile']) ? $_FILES['imageFile'] : null;


$imageFileName = @$_FILES['imageFile']['name'];
$imageFileType = @$_FILES['imageFile']['type'];
$imageFileSize = @$_FILES['imageFile']['size'];
$imageFileTmpName = @$_FILES['imageFile']['tmp_name'];
$picture="";
$bookDate = date("Y-m-d");
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "bookstore";
$conn = mysqli_connect($hostname, $username, $password);
echo '<center>';
if (!$conn)
die("ไม่สามารถติดต่อกับ mySQL ได้");
mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookstore ได้");
mysqli_query($conn,"set character_set_connection=utf8mb4");
mysqli_query($conn,"set character_set_client=utf8mb4");
mysqli_query($conn,"set character_set_results=utf8mb4");
if ($_FILES['imageFile']['name']=="") {
echo '<b><li>คุณไม่ได้เลือกรูปภาพ</li></b><br>';
}
else
{
move_uploaded_file($_FILES["imageFile"]["tmp_name"],"pictures/".$_FILES["imageFile"]["na
me"]);

$picture = $_FILES['imageFile']['name'];
}
$sql = "insert into book(bookId, bookName, typeId, statusId, publish, unitPrice, unitRent,
dayAmount, picture, bookDate) values ('$bookId', '$bookName', '$typeId', '$statusId', '$publish',
'$unitPrice', '$unitRent', '$dayAmount', '$picture', '$bookDate')";
mysqli_query($conn, $sql) or die("insert ลงตาราง book มีข้อผิดพลาดเกิดขึ้น" .mysqli_error($conn));
echo '<br><br><h2>บันทึกข้อมูลหนังสือรหัส '.$bookId.' เรียบร้อย</h2>';
echo '<br><br><a href="bookList1.php">กลับหน้า bookList1.php</a>';
mysqli_close($conn);
echo '</center>';
?>