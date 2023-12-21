<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พื้นที่สามเหลี่ยมคางหมู</title>
    <link rel="stylesheet" href="Style.css">
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
            $a = "สูง";
            $b = "ผลบวกของด้านคู่ขนาน";
            $c = "พื้นที่สามเหลี่ยมคางหมู : 0.5*5*25";
            $d = 0.5;
            $e = 5;
            $f = 25;
            $g = "คำนวณพื้นที่สามเหลี่ยมคางหมู";
        ?>
        <tr><th colspan="2"><?php echo $g;?></th></tr>
        <tr>
            <td><?php echo $a;?></td><td><?php echo $e;?></td>
        </tr>

        <tr>
            <td><?php echo $b;?></td><td><?php echo $f;?></td>
        </tr>

        <tr>
            <td><?php echo $c;?></td><td><?php echo $d*$e*$f;?></td>
        </tr>

        <tr><th colspan="2"><a href="การคำนวณ.php">กลับ</a></th></tr>
    </table>
    </center>
</body>
</html>