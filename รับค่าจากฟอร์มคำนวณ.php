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
    echo "Number 1 : <i> $number1 </i> <br/>";
    echo "Number 2 : <i> $number2 </i> <br/>";
    echo "Operator : <i> $operator </i> <br/>";
    
    echo "Result : <i> ";
    if ($operator == "+")echo ($number1 + $number2) ." </i> <br/>";
    if ($operator == "-") echo ($number1 - $number2) ." </i> <br/>";
    if ($operator == "*")echo ($number1 * $number2) ." </i> <br/>";
    if ($operator == "/") echo ($number1 / $number2) ." </i> <br/>";
    if ($operator == "%")echo ($number1 % $number2) ." </i> <br/>";
?>
</body>
</html>