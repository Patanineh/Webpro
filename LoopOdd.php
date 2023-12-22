<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $s = 0;
        $a = 0;
       for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 !== 0) {
                $s += $i;
            } else $a += $i;  
       }
       echo "ผลรวมเลขคี่ 1-10 = ", $s,"<br/>";
       echo "ผลรวมเลขคู่ 1-10 = ", $a;
    ?>
</body>
</html>