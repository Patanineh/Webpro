<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พื้นที่วงกลม</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <a style="color: tomato;" href="Web.html">หน้าแรก</a>
    <a href="Travel.html">Travel</a>
    <a href="ประวัติส่วนตัว.php">ประวัติส่วนตัว</a>
    <a href="การคำนวณ.php">การคำนวณ</a>
    </center>

    <hr width="70%"></hr>
    <center>
    <table border = 1 width = "500">
        <?php
            $a = "Pi";
            $b = "Area";
            $c = "พื้นที่วงกลม: 3.14*10*10";
            $d = 3.14;
            $e = 10;
            $f = "คำนวณพื้นที่วงกลม";
        ?>
        <tr><th colspan="2"><?php echo $f;?></th></tr>
        <tr>
            <td><?php echo $a;?></td><td><?php echo $d;?></td>
        </tr>

        <tr>
            <td><?php echo $b;?></td><td><?php echo $e;?></td>
        </tr>

        <tr>
            <td><?php echo $c;?></td><td><?php echo $d*$e*$e;?></td>
        </tr>
        <tr><th colspan="2"><a href="การคำนวณ.php">กลับ</a></th></tr>
    </table>
    </center>
</body>
</html>