<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การลงทะเบียนของนักศึกษา</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if (isset($_GET['btnSubmit'])) {
        $id = $_GET['id'];
        $fName = $_GET['fName'];
        $lName = $_GET['lName'];
        $gender = $_GET['gender'];
        $Education = $_GET['Education'];                              
        $free = $_GET['free'];
        $blood = $_GET['blood'];

        echo "<table align='center' width='20%' border='1'>";
        echo "<tr><td id=\"b\" colspan='2' align='center'><b>การลงทะเบียนของนักศึกษา</b></td></tr>";
        echo "<tr><td>รหัสนักศึกษา : </td><td align='center'><i> $id </i></td></tr>";
        echo "<tr><td>ชื่อ : </td><td align='center'><i> $fName </i></td></tr>";
        echo "<tr><td>นามสกุล : </td><td align='center'><i> $lName </i></td></tr>";
        echo "<tr><td>เพศ : </td><td align='center'><i> $gender </i></td></tr>";
        echo "<tr><td>วุฒิการศึกษา : </td><td align='center'><i> $Education </i></td></tr>";
        echo "<tr><td>งานอดิเรก : </td><td align='center'><i> $free </i></td></tr>";
        echo "<tr><td>หมู่โลหิต : </td><td align='center'><i> $blood </i></td></tr>";
        echo "</table>";
        echo "<center><a href='RegisterAll.php'>กลับ</a></center>"; //การใช้htmlในphp ""กับ''
    } else {
    ?>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
            <table border="1" align="center" width="500">
            <tr>
                <td id="b" colspan="2" align="center"><big>การลงทะเบียนของนักศึกษา</big></td>
            </tr>
            <tr>
                <td>รหัสนักศึกษา : </td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>ชื่อ : </td>
                <td><input type="text" name="fName" size="20" value="" /> </td>
            </tr>
                <td>นามสกุล : </td>
                <td><input type="text" name="lName" size="20" value="" /></td>
            </tr>
            <tr>
                <td>เพศ : </td>
                <td align="center">
                    <input type="radio" name="gender" value="ชาย">ชาย<br>
                    <input type="radio" name="gender" value="หญิง">หญิง<br>
                </td>
            </tr>
            <tr>
                <td>วุฒิการศึกษา : </td>
                <td align="center"><select name="Education">
                    <option value="ยังไม่ได้เลือก">เลือก</option>
                    <option value="ม.6">ม.6</option>
                    <option value="ปวช.">ปวช.</option>
                    <option value="ปวส.">ปวส.</option>
                </select></td>
            </tr>
            <tr>
                <td>งานอดิเรก : </td>
                <td><input type="text" name="free" size="20" value="" /> </td>
            </tr>
            <tr>
                <td>หมู่โลหิต : </td>
                <td align="center"><select name="blood">
                    <option value="ยังไม่ได้เลือก">เลือก</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="O">O</option>
                    <option value="AB">AB</option>
                </select></td>
            </tr>
            <tr>
                <td id="b" colspan="2" align="center">
                    <input name="btnSubmit" type="submit" value=" OK " />
                    <input name="btnReset" type="reset" value=" Clear " />
                </td>
            </tr>
        </table>
        </form>
    <?php
    }
    ?>
</body>
</html>