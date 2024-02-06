<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $id = $_GET['id'];
        $fName = $_GET['fName'];
        $lName = $_GET['lName'];
        $gender = $_GET['gender'];
        $Education = $_GET['Education'];                              
        $free = $_GET['free'];
        $blood = $_GET['blood'];

        echo "<table align='center' width='20%' border='1'>";
        echo "<tr><td id=\"b\" colspan='2' align='center'><b>การลงทะเบียนของนักศึกษา</b></td></tr>";
        echo "<tr><td>รหัสนักศึกษา : </td><td align='center'><i> $id </i></td></tr>";
        echo "<tr><td>ชื่อ : </td><td align='center'><i> $fName </i></td></tr>";
        echo "<tr><td>นามสกุล : </td><td align='center'><i> $lName </i></td></tr>";
        echo "<tr><td>เพศ : </td><td align='center'><i> $gender </i></td></tr>";
        echo "<tr><td>วุฒิการศึกษา : </td><td align='center'><i> $Education </i></td></tr>";
        echo "<tr><td>งานอดิเรก : </td><td align='center'><i> $free </i></td></tr>";
        echo "<tr><td>หมู่โลหิต : </td><td align='center'><i> $blood </i></td></tr>";
        echo "</table>";
    ?>
    <center><a href="Register.php"> Back </a></center>
</body>
</html>