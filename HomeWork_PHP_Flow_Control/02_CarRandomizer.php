<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 2 - CarRandomizer</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table ,td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #f3c4e9;
        }
        form {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<form method="post" action="02_CarRandomizer.php">
    <label for="cars">
        Enter cars:
        <input type="text" name="cars" />
    </label>
    <input type="submit" name="submit" value="Show result" />
</form>

<table>
    <tr><th>Car</th><th>Color</th><th>Count</th></tr>
<?php
    if(isset($_POST['submit']) && !empty($_POST['cars']))
    {
        $cars = htmlentities($_POST['cars']);
        $cars = explode(', ', $cars);
        $colors = ['yellow','red','green','blue','grey','white','black'];

        foreach($cars as $car):
            $currentColorIndex = array_rand($colors);
            $currentQuantity = rand(1, 5); ?>
            <tr><td><?= $car ?></td><td><?= $colors[$currentColorIndex] ?></td><td><?= $currentQuantity ?></td></tr>
        <?php
        endforeach;
    }   ?>
</table>

</body>
</html>