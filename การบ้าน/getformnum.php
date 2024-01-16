<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];

        echo"<b>ผลลัพธ์</b><br />";

        $sum = 0;       //กำหนดnum=number1 เงื่อนไขnumน้อยกว่าหรือเท่ากับnumber2ให้ลูปทำงาน
                        //ถ้าใส่num=number2ลูปจะเป็นเท็จตั้งแต่แรก เพราะค่าnumตอนเริ่มต้นจะเท่ากับค่าnumber1
                        //เช่น number1=2 number2=7 กำหนดnum=number1 ถ้าใส่num=number2 จะเป็นเท็จ
                        //เพราะตอนนี้ num=2 number2=7 แล้วเงื่อนไขnum=number2 เท่ากับว่า 2=7ไหม ตอบไม่
        for ($num = $number1; $num <= $number2; $num++) {
            $sum += $num;
        }
        echo $sum;
    ?>
</body>
</html>