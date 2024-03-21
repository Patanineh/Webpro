<?php
session_start();

// เชื่อมต่อกับฐานข้อมูล
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "laser clinic";

$conn = mysqli_connect($hostname, $username, $password, $dbName);
if (!$conn) {
    die("ไม่สามารถเชื่อมต่อกับ MySQL: " . mysqli_connect_error());
}

// ตรวจสอบว่าผู้ใช้เป็นลูกค้าหรือไม่
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // ถ้าไม่ใช่ลูกค้าให้ redirect ไปยังหน้าล็อกอิน
    exit();
}

// คำนวณราคารวมของสินค้าทั้งหมดในตะกร้า
$total_price = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product_id) {
        $sql = "SELECT Price FROM product WHERE ID = '$product_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $total_price += $row['Price'];
    }
}

// ตรวจสอบการกดปุ่ม "ยืนยัน"
if (isset($_POST['confirm'])) {
    // รับข้อมูลจากฟอร์ม
    $reserve_date = $_POST['reserve_date'];
    $reserve_time = $_POST['reserve_time'];
    $customer_id = $_SESSION['user_id'];

    // เพิ่มข้อมูลการจองลงในตาราง reserve
    $sql = "INSERT INTO reserve (Name, Time, Date, Course, Confirm, Sale_id, Total_price) VALUES ('$reserve_date', '$reserve_time', CURDATE(), '', 'Waiting for admin confirmation', '', 0)";
    if (mysqli_query($conn, $sql)) {
        echo "รอการยืนยันจากแอดมิน";
    } else {
        echo "เกิดข้อผิดพลาดในการบันทึกข้อมูลการจอง: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order & Reservation</title>
</head>
<body>
    <h2>Order Summary</h2>
    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Course</th>
            <th>Price</th>
        </tr>
        <?php
            // ถ้ามีตะกร้าสินค้า
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $product_id) {
                    // คำสั่ง SQL เพื่อดึงข้อมูลสินค้า
                    $sql = "SELECT * FROM product WHERE ID = '$product_id'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    
                    // แสดงข้อมูลในตาราง
                    echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['Course'] . "</td>";
                    echo "<td>" . $row['Price'] . "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
    <p>Total Price: <?php echo $total_price; ?></p>

    <h2>Reservation</h2>
    <form action="" method="post">
        <label for="reserve_date">Date:</label><br>
        <input type="date" id="reserve_date" name="reserve_date" required><br>
        <label for="reserve_time">Time:</label><br>
        <input type="time" id="reserve_time" name="reserve_time" required><br><br>
        <input type="submit" value="Confirm" name="confirm">
    </form>
</body>
</html>

<?php
// ปิดการเชื่อมต่อ
mysqli_close($conn);
?>
