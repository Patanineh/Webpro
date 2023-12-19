<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติส่วนตัว</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <li><a Style="color: tomato;" href="Web.html">หน้าแรก</a></li> <!--กำหนดสีหัวข้อนี้เอง-->
        <li><a Style="color: tomato;" href="Travel.html">Travel</a></li>
        <li><a Style="color: tomato;" href="ประวัติส่วนตัว.php">ประวัติส่วนตัว</a></li>
    </center>
    
    <?php
        $a = "6406021610071";
        $b = "ปธานิน พรหมศรีสุข";
        $c = "หอพักชาย ห้อง309 มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ
        เลขที่ 129 หมู่21 ตำบลเนินหอม อ.เมืองปราจีนบุรี จ.ปราจีนบุรี 25230";
        $d = "เบอร์โทร : 0931903172";
        $e = "ภาควิชาเทคโนโลยีสารสนเทศ คณะเทคโนโลยีและการจัดการอุตสาหกรรม";

        echo $a; echo "<br/>";
        echo $b; echo "<br/>";
        echo $c; echo "<br/>";
        echo $d; echo "<br/>";
        echo $e; echo "<br/>";
        
    ?>
</body>
</html>