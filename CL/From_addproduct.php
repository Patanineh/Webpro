<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h2>Add Product</h2>
    <form action="addproduct.php" method="post">
        <label for="course">Course:</label><br>
        <input type="text" id="course" name="course" required><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
