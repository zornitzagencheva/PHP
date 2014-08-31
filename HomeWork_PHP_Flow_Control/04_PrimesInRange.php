<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 4 - Primes number in given range</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        form {
            background-color: #facca8;
            border: 1px solid #ca6b25;
            margin-bottom: 20px;
            width: 424px;
            padding: 19px;
        }

    </style>
</head>
<body>

<form method="post" action="04_PrimesInRange.php">
    <label for="start">Start
        <input type="number" name="start" required="required"/>
    </label>
    <label for="end">End
        <input type="number" name="end" required="required"/>
    </label>
    <input type="submit" name="submit" value="Submit"/>
</form>

<?php
    if(isset($_POST['submit']) &&
       !empty($_POST['start']) &&
       !empty($_POST['end'])) {

        $start = htmlentities($_POST['start']);
        $end = htmlentities($_POST['end']);
        $resultString = '';

        for($i = $start; $i <= $end; $i++) {
            $is_prime = isPrime($i);
            if($i == $end) { //remove last comma from string
                $resultString .= $i;
                break;
            }
            if($is_prime == true) { //if the number is prime use strong tag
                $resultString .= '<strong>'.$i.'</strong>'.', ';
            }else {
                $resultString .= $i.', ';
            }
        }
        echo $resultString;
    }

    function isPrime($num) { // find prime numbers;
        if($num == 1)
            return false;
        if($num == 2)
            return true;
        if($num % 2 == 0) {
            return false;
        }
        for($i = 3; $i <= ceil(sqrt($num)); $i++) {
            if($num % $i == 0)
                return false;
        }
        return true;
    }
?>

</body>
</html>