<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = $_GET['num'];

    function showraw($num) {
        for ($row = 1; $row <= $num; $row++) {
            echo "Row: $row ";
            echo '<span style="color: green;">' . str_repeat("*", $row) . '</span>';
            echo "<br>";
        }
    }
    showraw($num);
    ?>
</body>
</html>