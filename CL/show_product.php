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

// ตรวจสอบการกดปุ่ม "Add to Cart"
if (isset($_POST['add_to_cart'])) {
    // รับข้อมูลจากฟอร์ม
    $product_id = $_POST['product_id'];

    // เพิ่มสินค้าที่เลือกเข้าไปใน session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    // เพิ่มสินค้าลงในตะกร้า
    $_SESSION['cart'][] = $product_id;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h2>Product List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Course</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php
            // คำสั่ง SQL เพื่อดึงข้อมูลสินค้า
            $sql = "SELECT * FROM product";
            $result = mysqli_query($conn, $sql);

            // วนลูปและแสดงข้อมูลในตาราง
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Course'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>
                        <form action='' method='post'>
                            <input type='hidden' name='product_id' value='" . $row['ID'] . "'>
                            <button type='submit' name='add_to_cart'>Add to Cart</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
        ?>
    </table>
    <a href="order.php">Go to Order Page</a>
</body>
</html>

<?php
// ปิดการเชื่อมต่อ
mysqli_close($conn);
?>
