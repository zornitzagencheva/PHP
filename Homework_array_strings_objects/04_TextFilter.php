<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 4 - TextFilter</title>
    <link rel="stylesheet" href="">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        form {
            width: 203px;
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
            background-color: #ecd5f5;
        }
        textarea {
            width: 200px;
            height: 100px;
            margin-bottom: 5px;
        }
        input[type='submit'] {
            width: 150px;
            height: 30px;
            margin-left: 26px;
            margin-top: 5px;
        }
        input[type='text'] {
            width: 198px;
            height: 20px;
            margin-bottom: 5px;
        }


    </style>
</head>
<body>
<form method="post" action="04_TextFilter.php">
    <textarea name="text"></textarea>
    <input type="text" name="banList" />
    <input type="submit" name="submit" />
</form>
<table>
    <?php
    if(isset($_POST['submit']) && !empty($_POST['text']) && !empty($_POST['banList']))
    {
        $text = htmlentities($_POST['text']);
        $banList = htmlentities($_POST['banList']);
        $banList = explode(', ',$banList);
        $result = '';

        foreach($banList as $ban)
        {
            $pattern = "/$ban/";
            $replacement = str_repeat('*', strlen($ban));
            $currentText = preg_replace($pattern, $replacement, $text);
            $result = $currentText;
            $text = $currentText;
        }
        echo $currentText;
    }
    ?>
</table>
</body>
</html>