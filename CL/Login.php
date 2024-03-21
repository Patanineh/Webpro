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

    // รับข้อมูลจากฟอร์ม
    $id = $_POST['id'];
    $password = $_POST['password'];

    // ค้นหาข้อมูลในตาราง login_employee
    $employee_query = "SELECT * FROM login_employee WHERE ID='$id' AND Password='$password'";
    $employee_result = mysqli_query($conn, $employee_query);

    // ค้นหาข้อมูลในตาราง login_manager
    $manager_query = "SELECT * FROM login_manager WHERE ID='$id' AND Password='$password'";
    $manager_result = mysqli_query($conn, $manager_query);

    // ค้นหาข้อมูลในตาราง login_customer
    $customer_query = "SELECT * FROM login_customer WHERE ID='$id' AND Password='$password'";
    $customer_result = mysqli_query($conn, $customer_query);

    // ตรวจสอบว่าข้อมูลตรงกับ login_employee หรือ login_manager หรือ login_customer หรือไม่
    if (mysqli_num_rows($employee_result) > 0) {
        $_SESSION['user_id'] = $id;
        $_SESSION['user_type'] = 'employee';
        header("Location: employee_dashboard.php"); // ไปยังหน้า dashboard ของพนักงาน
        exit(); // ออกจากสคริปต์
    } elseif (mysqli_num_rows($manager_result) > 0) {
        $_SESSION['user_id'] = $id;
        $_SESSION['user_type'] = 'manager';
        header("Location: manager_dashboard.php"); // ไปยังหน้า dashboard ของผู้จัดการ
        exit(); // ออกจากสคริปต์
    } elseif (mysqli_num_rows($customer_result) > 0) {
        $_SESSION['user_id'] = $id;
        $_SESSION['user_type'] = 'customer';
        header("Location: customer_dashboard.php"); // ไปยังหน้า dashboard ของลูกค้า
        exit(); // ออกจากสคริปต์
    } else {
        echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }

    // ปิดการเชื่อมต่อ
    mysqli_close($conn);
?>
