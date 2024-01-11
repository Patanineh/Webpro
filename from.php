<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณ</title>
</head>
<body>
    <form method="get" action="รับค่าจากฟอร์มคำนวณ.php"></form>
    <table border="1" align="center" width="300">
    <tr>
        <td colspan="2" align="center">
            <big>ทดสอบการใช้ Arithmatic Operator </big>
        </td>
    <tr>
    <tr>
        <td>Enter Number 1 : </td>
        <td><input type="text" name="number1" size="15" value=""/> </td>
    </tr>
        <td>Enter Number 2 : </td>
        <td><input type="text" name="number2" size="15" value=""/></td>
    </tr>
    <tr>
        <td> Operator : </td>
        <td align="center">
        <input type="radio" name="operator" value="+"> + <br>
        <input type="radio" name="operator" value="-"> - <br>
        <input type="radio" name="operator" value="*"> * <br>
        <input type="radio" name="operator" value="/"> / <br>
        <input type="radio" name="operator" value="%"> % <br>
    </td>
    <tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" value=" OK " />
            <input type="reset" value=" Clear " />
        </td>
    </tr>
</table>
</form>
</body>
</html>