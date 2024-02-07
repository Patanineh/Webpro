<html>

<head>
    <title>แสดงการสร้างและใช้งานอารเรย์ Numberic Array</title>
</head>

<body>
    <?php
    $MaxStudent = 10;
    for($n = 0 ; $n < $MaxStudent; $n++) {
    $score[$n] = rand(50, 100);
    }
    echo '<center><font size="4" color="blue"> Grade Report </font></center>';
    echo '<table border="1" align="center">';
    echo '<tr><td align="center" width="90">Student No.</td>';
    echo '<td align="center" width="90">Score</td>';
    echo '<td align="center" width="90">Grade</td></tr>';
    for($n = 0 ; $n < $MaxStudent; $n++) {
        if($score[$n] >= 80){
            $grade = "A";
        }else if ($score[$n] >= 70){
            $grade = "B";
        }else if ($score[$n] >= 60){
            $grade = "C";
        }else if ($score[$n] >= 50){
            $grade = "D";
        }
    echo '<tr><td align="center" width="90">' . ($n +1 ) . '</td>';
    echo '<td align="center" width="90">' . $score[$n] . '</td>';
    echo '<td align="center" width="90">' . $grade . '</td></tr>';
    }

    echo '<tr><td colspan="3" align="center"> Average Score : ';
    echo average( $score, $MaxStudent);
    echo '</td></tr></table>';
    function average($data, $max) {
    $total = 0;
    for($n = 0 ; $n < $max; $n++) {
    $total += $data[$n];
    }
    return( $total / $max );

    }
    ?>
</body>

</html>