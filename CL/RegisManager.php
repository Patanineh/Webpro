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
    $id_card = $_POST['id_card'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $job_position = $_POST['job_position'];
    $first_day_of_work = $_POST['first_day_of_work'];
    $salary = $_POST['salary'];
    $education_level = $_POST['education_level'];
    $work_experience = $_POST['work_experience'];
    $underlying_disease = $_POST['underlying_disease'];
    $bank_account = $_POST['bank_account'];
    $current = $_POST['current'];
    $id = $_POST['id']; 
    $password = $_POST['password']; 

    $sql_manager = "INSERT INTO manager (Name, Sername, Gender, Age, Birthday, 
    ID_card, Phone_number, Email, Address, Job_position, First_day_of_work, Salary,
    Education_level, Work_experience, Underlying_disease, Bank_account, Current) 
    VALUES ('$name', '$surname', '$gender', '$age', '$birthday', '$id_card', 
    '$phone_number', '$email', '$address', '$job_position', '$first_day_of_work', 
    '$salary', '$education_level', '$work_experience', '$underlying_disease', 
    '$bank_account', '$current')";

    if (mysqli_query($conn, $sql_manager)) {
        $login_sql_manager = "INSERT INTO login_manager (ID, Password, Email) VALUES ('$id', '$password', '$email')";
        if (mysqli_query($conn, $login_sql_manager)) {
            echo "บันทึกข้อมูลเรียบร้อยแล้ว";
        } else {
            echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล login manager: " . mysqli_error($conn);
        }
    } else {
        echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล manager: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>