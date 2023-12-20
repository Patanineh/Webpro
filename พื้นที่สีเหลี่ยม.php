<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณพื้นที่สี่เหลี่ยม</title>
</head>
<body>
    <table border = 1 width = "500">
        <?php
            $a = "ความกว้าง";
            $b = "ความยาว";
            $c = "พื้นที่สี่เหลี่ยม : 5*10";
            $d = 5;
            $e = 10;
            $f = "คำนวณพื้นที่สี่เหลี่ยม";
        ?>
        <tr><th colspan="2"><?php echo $f;?></th></tr>
        <tr>
            <td><?php echo $a;?></td><td><?php echo $d;?></td>
        </tr>

        <tr>
            <td><?php echo $b;?></td><td><?php echo $e;?></td>
        </tr>

        <tr>
            <td><?php echo $c;?></td><td><?php echo $d * $e;?></td>
        </tr>
        <tr><th colspan="2"><a href="การคำนวณ.php">กลับ</a></th></tr>
    </table>
    
</body>
</html>