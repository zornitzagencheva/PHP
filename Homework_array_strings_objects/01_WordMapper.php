<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 1 - WordMapper</title>
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
<form method="post" action="01_WordMapper.php">
    <textarea name="textArea"></textarea>
    <input type="submit" name="submit" value="Count words"/>
</form>
<table>
<?php
    if(isset($_POST['submit']) && !empty($_POST['textArea']))
    {
        $textAreaInput = trim($_POST['textArea']);
        $words = preg_split('/[\s,.!?;:\/]+/', $textAreaInput);
        $words = array_filter($words);
        $arrayOfCountWords = array_count_values(array_map('strtolower', $words));

        foreach($arrayOfCountWords as $word => $count)
        {
            echo "<tr><td>$word</td><td>$count</td></tr>";
        }
    }
?>
</table>
</body>
</html>