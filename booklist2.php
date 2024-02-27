<html>
<head>
    <title>bookList2.php</title>
</head>
<body>
    <?php
    // โค้ดเชื่อมต่อฐานข้อมูลและการ query ข้อมูลจากตาราง book
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookstore";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
    mysqli_query($conn, "set character_set_connection=utf8mb4");
    mysqli_query($conn, "set character_set_client=utf8mb4");
    mysqli_query($conn, "set character_set_results=utf8mb4");

    // ตรวจสอบว่ามีการส่งค่า bookId ผ่าน URL หรือไม่
    if(isset($_GET['bookId'])) {
        $bookId = $_GET['bookId'];
        $sql = "SELECT * FROM book WHERE BookID = '$bookId'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            // ถ้าพบข้อมูลหนังสือที่มีรหัสตรงกับค่าที่ระบุผ่าน URL
            $row = mysqli_fetch_assoc($result);
            echo "<h2>ข้อมูลหนังสือรหัส $bookId</h2>";
            echo "<p>ชื่อหนังสือ: " . $row['BookName'] . "</p>";
            echo "<p>ประเภทหนังสือ: " . $row['TypeID'] . "</p>";
            echo "<p>สถานะหนังสือ: " . $row['StatusID'] . "</p>";
            echo "<p>สำนักพิมพ์: " . $row['Publish'] . "</p>";
            echo "<p>ราคาหนังสือ: " . $row['UnitPrice'] . "</p>";
            echo "<p>ราคาเช่าหนังสือ: " . $row['UnitRent'] . "</p>";
            echo "<p>จำนวนวันที่เช่า: " . $row['DayAmount'] . "</p>";
            echo "<p>รูปภาพ: <img src='pictures/" . $row['Picture'] . "'></p>";
            echo "<p>วันที่ซื้อ: " . $row['BookDate'] . "</p>";
        } else {
            echo "<p>ไม่พบข้อมูลหนังสือรหัส $bookId</p>";
        }
    } else {
        echo "<p>กรุณาเลือกรหัสหนังสือ</p>";
    }
    mysqli_close($conn);
    ?>
    <br><br><a href="bookList1.php">กลับหน้า bookList1.php</a>
</body>
</html>
