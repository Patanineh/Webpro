<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การลงทะเบียนของนักศึกษา</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="get" action="RegisterShow.php">
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
</body>
</html>