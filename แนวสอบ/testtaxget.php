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
    $num3 = $_GET['num3'];

    $sum = ($num1*12) - $num2 - $num3;
    echo "เงินได้สุทธิ : $sum" ,"<br>";

    if ($sum <= 150000) {
        echo "ได้รับการยกเว้น";
    }else if ($sum <= 300000){
        $tax = $sum*5/100;
        echo "ภาษี : $tax";
    }else if ($sum <= 500000){
        $tax = $sum*10/100;
        echo "ภาษี : $tax";
    }else if ($sum <= 750000){
        $tax = $sum*15/100;
        echo "ภาษี : $tax";
    }else if ($sum <= 1000000){
        $tax = $sum*20/100;
        echo "ภาษี : $tax";
    }else if ($sum <= 2000000){
        $tax = $sum*25/100;
        echo "ภาษี : $tax";
    }else if ($sum <= 5000000){
        $tax = $sum*30/100;
        echo "ภาษี : $tax";
    }else {$tax = $sum*35/100;
        echo "ภาษี : $tax";}
    ?>
</body>
</html>