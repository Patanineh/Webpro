<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    $sumfinal = 0;
    for ($num = 0; $num1 <= $num2; $num1++) {
        if(($num1 % 12)==0){
            $num++;
            $sumfinal = $num1;
        }
    }
    echo $sumfinal;

    ?>
</body>
</html>