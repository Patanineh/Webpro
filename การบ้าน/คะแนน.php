<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $maxRow = 10;
    $maxCol = 6; // เพิ่มหนึ่งคอลัมน์สำหรับเลขนักเรียนและผลรวม
    $students = range('1', '10'); // สร้างอาร์เรย์ของนักเรียนตามต้องการ
    echo "<table border='1' align='center' width='100%'>";
    echo "<tr><td width='80' align='center'>Student</td>";
    echo "<td width='80' align='center'>Homework</td>";
    echo "<td width='80' align='center'>รายงาน</td>"; // เพิ่มคอลัมน์รายงาน
    echo "<td width='80' align='center'>Midterm</td>";
    echo "<td width='80' align='center'>Final</td>";
    echo "<td width='80' align='center'>ผลรวม</td></tr>"; // เพิ่มคอลัมน์ผลรวม
    for ($r = 0; $r < $maxRow; $r++) {
        echo "<tr>";
        echo "<td align='center'>" . $students[$r] . "</td>"; // เพิ่มคอลัมน์นักเรียน
        $scores = []; // สร้างอาร์เรย์เก็บคะแนนทั้งหมดในแถวนั้น
        for ($c = 0; $c < $maxCol - 1; $c++) { // เปลี่ยนจำนวนคอลัมน์ที่วนลูป
            if ($c == 0) {
                // สุ่มคะแนน Homework ในช่วง 0-10
                $scores[] = rand(0, 10);
            } elseif ($c == 1) {
                // สุ่มคะแนน รายงาน ในช่วง 0-20
                $scores[] = rand(0, 20);
            } elseif ($c == 2 || $c == 3) {
                // สุ่มคะแนน Midterm และ Final ในช่วง 0-35
                $scores[] = rand(0, 35);
            }
        }
        // แสดงคะแนนทั้งหมดที่คอลัมน์ต่างๆ
        foreach ($scores as $score) {
            echo "<td align='center'>" . $score . "</td>";
        }
        // แสดงผลรวมที่คอลัมน์ "ผลรวม"
        echo "<td align='center'>" . array_sum($scores) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
