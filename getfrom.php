<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $operator = $_GET['operator'];

    echo "<p>";
    echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br />";
   
    
    if ($operator == "สีเหลี่ยม"){
        echo"ความกว้าง : $number1"; echo"<br>";
        echo"ความยาว : $number2"; echo"<br>"; echo"ผลลัพธ์ : ";
        echo($number1 * $number2);}
    else if ($operator == "สามเหลี่ยม") echo (0.5 * $number1 * $number2) ." </i> <br/>";
    else if ($operator == "วงกลม")echo (3.14 * $number1 * $number1) ." </i> <br/>";
?>
</body>
</body>
</html>