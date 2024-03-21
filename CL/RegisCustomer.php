<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "laser clinic";

    $conn = mysqli_connect($hostname, $username, $password, $dbName);
    if (!$conn) {
        die("ไม่สามารถเชื่อมต่อกับ MySQL: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $underlying_disease = $_POST['underlying_disease'];
    $id = $_POST['id']; 
    $password = $_POST['password']; 

    $sql = "INSERT INTO customer (Name, Sername, Gender, Age, Birthday, 
    Phone_number, Email, Address, Underlying_disease) 
    VALUES ('$name', '$surname', '$gender', '$age', '$birthday', 
    '$phone_number', '$email', '$address', '$underlying_disease')";

    if (mysqli_query($conn, $sql)) {
        $login_sql = "INSERT INTO login_customer (ID, Password, Email) VALUES ('$id', '$password', '$email')";
        if (mysqli_query($conn, $login_sql)) {
            echo "บันทึกข้อมูลเรียบร้อยแล้ว";
        } else {
            echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล login: " . mysqli_error($conn);
        }
    } else {
        echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล customer: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
