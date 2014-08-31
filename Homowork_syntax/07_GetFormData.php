<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 3 - Handlebars</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        form {
            border: 1px solid blue;
            background-color: #d3c8c8;
            width: 159px;
            height: 115px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <form action="07_GetFormData.php" method="post">
        <input type="text" name="name" required="required"/><br>
        <input type="number" name="age" required="required"/><br>
        <label for="male"><input type="radio" id="male" name="sex" value="male">Male</label><br>
        <label for="female"><input type="radio" id="female" name="sex" value="female">Female</label><br>
        <input type="submit" name="submit" value="Изпращане">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $gender = $_POST['sex'];
            if($age < 120) {
                echo "My name is $name. I am $age years old. I am $gender.";
            }
            else {
                echo "Please enter valid age!";
            }
        }
    ?>

</body>
</html>