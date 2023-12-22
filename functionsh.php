<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function say() {
        echo "Hello PHP<br>";
        echo "Patanin Phomsisuk";
    }
    say();
    ?>

    <?php
    function add($n1, $n2) {
        $re=$n1+$n2;
        echo "<br><br>Result add : ",$re;
    }
    $num1=10;
    $num2=20;

    add($num1,$num2);
    ?>

    <?php
    function st($n1, $n2=50) { //n2 ถ้ามีค่าอื่นส่งมาจะใช้ค่านั้นๆแทน50
        $re=$n1-$n2;
        echo "<br><br>Result subtract : ",$re;
    }

    $num1=10;
    $num2=100;
    st($num1,$num2);
    ?>

    <?php
    function mp($n1,$n2){ //การรีเทรินค่า ส่งผลลัพกลับ แต่ไม่ได้ส่งค่ากลับ pass by แวลู
        $re=$n1*$n2;
        return $re;
    }
    $num1=10;
    $num2=100;
    $remp = mp($num1,$num2);
    echo "<br><br>Result Multipy : ",$remp;
    ?>

    <?php
    function divide($n1, $n2, &$re){ //n1 n1 pass by แวลู, re pass by เรเฟอเรน กี่ค่าก็ได้
        $re=$n1/$n2; //มีกับไม่มีรีเทรินต่างกัน
    } //$re ส่งค่าไปที่&$re
    $num1=10;
    $num2=20;
    $redi= 0;
    divide($num1, $num2, $redi); 
    echo "<br><br>Result divide : ", $redi;
    ?>
</body>
</html>