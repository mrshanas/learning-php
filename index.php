<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <?php echo "Hello World!"; ?> -->
    <form method="POST" action="student.php">
        <input type="text" name="regno" id="regno"class="in1" placeholder="Registration number" required><br>
        <input type="text" name="fname" id="fname"class="in1" placeholder="First name" required><br>
        <input type="text" name="mname" id="mname"class="in1" placeholder="Middle name" required><br>
        <input type="text" name="sname" id="sname"class="in1" placeholder="Surname" required><br>
        <select name="sex" id="sex" class="in1">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <input type="year" name="yob" id="" class="in1" placeholder="Year of birth" required><br>
        <input type="submit" value="Submit" class="btn1">
    </form>
</body>
</html>