<?php
// เชื่อมต่อกับฐานข้อมูล
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "laser clinic";

$conn = mysqli_connect($hostname, $username, $password, $dbName);
if (!$conn) {
    die("ไม่สามารถเชื่อมต่อกับ MySQL: " . mysqli_connect_error());
}

// รับข้อมูลจากฟอร์ม
$course = $_POST['course'];
$price = $_POST['price'];

// เพิ่มข้อมูลสินค้าใหม่ลงในตาราง product
$sql = "INSERT INTO product (Course, Price) VALUES ('$course', '$price')";

if (mysqli_query($conn, $sql)) {
    echo "เพิ่มข้อมูลสินค้าเรียบร้อยแล้ว";
} else {
    echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูลสินค้า: " . mysqli_error($conn);
}

// ปิดการเชื่อมต่อ
mysqli_close($conn);
?>
