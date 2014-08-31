<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 2 - TextColorer</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table ,td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        tr td:first-child {
            background-color: #ccf5ec;
        }
        tr td:last-child {
            background-color: #58cbb1;
            color: white;
        }
    </style>
</head>
<body>
<form method="post" action="02_TextColorer.php">
    <textarea name="textArea"></textarea>
    <input type="submit" name="submit" value="Color text"/>
</form>
<table>
    <?php
    if(isset($_POST['submit']) && !empty($_POST['textArea']))
    {
        $textAreaInput = trim($_POST['textArea']);
        $arrayOfChars = str_split($textAreaInput);
        foreach($arrayOfChars as $char)
        {
            if(ord($char) % 2 == 0)
            {
                echo "<span style='color: red'>$char\t</span>";
            }
            else
            {
                echo "<span style='color: blue'>$char\t</span>";
            }
        }
    }
    ?>
</table>
</body>
</html>