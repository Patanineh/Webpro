<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border = 1 width = "500">
        <?php
            $a = "สูง";
            $b = "ด้านคู่ขนานบน";
            $c = "พื้นที่สามเหลี่ยมคางหมู : 0.5*5*10*15";
            $d = 5;
            $e = 10;
            $f = "คำนวณพื้นที่สามเหลี่ยมคางหมู";
            $g = 0.5;
            $h = "ด้านคู่ขนานล่าง";
            $i = 15;
        ?>
        <tr><th colspan="2"><?php echo $f;?></th></tr>
        <tr>
            <td><?php echo $a;?></td><td><?php echo $d;?></td>
        </tr>

        <tr>
            <td><?php echo $b;?></td><td><?php echo $e;?></td>
        </tr>

        <tr>
            <td><?php echo $h;?></td><td><?php echo $i;?></td>
        </tr>
        <tr><th colspan="2"><a href="การคำนวณ.php">กลับ</a></th></tr>
    </table>
</body>
</html>