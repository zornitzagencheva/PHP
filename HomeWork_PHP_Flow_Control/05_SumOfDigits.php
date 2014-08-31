<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 5 - Sum of digits</title>
    <link rel="stylesheet" href="">
    <style>
        table ,td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
            background-color: #fae8ce;
        }
        td {
            width: 100px;
        }
        table {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<form method="post" action="05_SumOfDigits.php">
    <label for="numbers"> Input string
        <input type="text" name="numbers" id="numbers" />
    </label>
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
    if(isset($_POST['submit']) && !empty($_POST['numbers'])) {
        $numbers = htmlentities($_POST['numbers']);
        $arr_numbers = explode(',', $numbers);
        echo "<table>";
        foreach($arr_numbers as $number) {
            $sumOfDigits = 0;
            $string = "I cannot sum that";

            if(((int)($number))) {
                $currentNumAsArray = preg_split('[]', $number);
                foreach($currentNumAsArray as $digit) {
                    $sumOfDigits += $digit;
                }
                echo "<tr><td>$number</td><td>$sumOfDigits</td></tr>";
            }else {
                echo "<tr><td>$number</td><td>";
                echo "I cannot sum this";
                echo "</td></tr>";
            }
        }
        echo "</table>";
    }
?>
</body>
</html>