<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="testtaxget.php">
    <table border="1" align="center" width="500">
        <tr>
            <td colspan="2" align="center">
                <big>คำนวณภาษีที่ต้องจ่าย</big>
            </td>
        </tr>
        <tr>
            <td>เงินเดือน : </td>
            <td><input type="text" name="num1" size="15" value=""/></td>
        </tr>
        <tr>
            <td>ค่าลดหย่อน/ปี : </td>
            <td><input type="text" name="num2" size="15" value=""/></td>
        </tr>
        <tr>
            <td>ค่าใช้จ่าย/ปี : </td>
            <td><input type="text" name="num3" size="15" value=""/></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value=" OK "/>
                <input type="reset" value=" Clear "/>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>