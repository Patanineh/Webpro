<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="RegisCustomer.php" method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="surname" placeholder="Surname" required>
        <select name="gender" required>
            <option value="" disabled selected>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <input type="text" name="age" placeholder="Age" required>
        <input type="date" name="birthday" placeholder="Birthday" required>
        <input type="text" name="phone_number" placeholder="Phone Number" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="address" placeholder="Address" required></textarea>
        <input type="text" name="underlying_disease" placeholder="Underlying Disease" required>
        <input type="text" name="id" placeholder="ID" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Register">
    </form>
</body>
</html>
