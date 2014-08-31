<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 6 - String Modifier</title>
    <link rel="stylesheet" href="">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        form {
            width: 227px;
            border: 1px solid blue;
            padding: 10px;
            margin: 10px;
            background-color: #dbf498;
        }
        label {
            display: inline-block;
            width: 200px;
            margin: 5px;
            color: #334405;
        }
        input[type="submit"] {
            display: block;
            width: 225px;
            height: 25px;
        }
        input[type="text"] {
            display: block;
            width: 222px;
            height: 20px;
        }
    </style>
</head>
<body>
<form method="post" action="06_StringModifier.php">
    <input type="text" name="inputString">
    <label for="palindrome">Check Palindrome</label>
    <input type="radio" name="stringOperation" id="palindrome" value="palindrome" />

    <label for="reverse">Reverse String</label>
        <input type="radio" name="stringOperation" id="reverse" value="reverse" />

    <label for="split">Split</label>
        <input type="radio" name="stringOperation" id="split" value="split" />

    <label for="hashString">Hash String</label>
        <input type="radio" name="stringOperation" id="hashString" value="hashString" />

    <label for="shuffleString">Shuffle String</label>
        <input type="radio" name="stringOperation" id="shuffleString" value="shuffleString" />

    <input type="submit" name="submit" value="Submit" />
</form>

<?php

if(isset($_POST['submit']) && !empty($_POST['inputString']) && isset($_POST['stringOperation'])) {
    $stringOperation = $_POST['stringOperation'];
    $inputString = trim($_POST['inputString']);
    $is_palindrome = true;

    switch($stringOperation) {
        case "palindrome":
            $lastElement = strlen($inputString) - 1;
            for ($i = 0; $i < strlen($inputString) / 2; $i++, $lastElement--){
                if ($inputString[$i] !== $inputString[$lastElement]) {
                     $is_palindrome = false;
                    break;
                }
            }
            if($is_palindrome == true){
                echo $inputString. " is palindrome!";
            }
            else {
                echo $inputString. " is not a palindrome!";
            }
            break;
        case "reverse":
            echo strrev($inputString);
            break;
        case "split":
            $inputAsArray = str_split($inputString);
            echo join(' ', $inputAsArray);
            break;
        case "hashString":
            echo crypt($inputString);
            break;
        case "shuffleString":
            $shuffled = str_shuffle($inputString);
            echo $shuffled;
            break;
        default: break;
    }
}
?>

</body>
</html>