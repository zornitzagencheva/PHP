<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 1 - SquareRootSum</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table ,td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        th {
            text-align: left;
        }
    </style>
</head>
<body>

<table>
<tr><th>Number</th><th>Square</th></tr>
<?php
$sum = 0;
for($i = 0; $i <= 100; $i+=2):
    $current = sqrt($i);
    $sum += $current;
    $current = round($current, 2); ?>
    <tr><td><?php echo $i ?></td><td><?php echo $current ?></td></tr>
<?php endfor; ?>
<tr><td><strong>Total</strong></td><td><?php echo round($sum, 2) ?></td></tr>
</table>

</body>
</html>