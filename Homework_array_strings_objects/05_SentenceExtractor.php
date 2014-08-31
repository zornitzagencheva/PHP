<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 5 - SentenceExtractor</title>
    <link rel="stylesheet" href="">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        form {
            width: 156px;
            border: 1px solid black;
            background-color: #ceeea0;
            padding: 10px;
            margin: 10px;
        }
        textarea {
            width: 154px;
            height: 100px;
            margin-bottom: 10px;
        }
        input[type='submit'] {
            width: 156px;
            height: 25px;
            margin-bottom: 10px;
        }
        input[type='text'] {
            width: 152px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<form method="post" action="05_SentenceExtractor.php">
    <textarea name="text"></textarea>
    <input type="text" name="word" />
    <input type="submit" name="submit" />
</form>

    <?php
    if(isset($_POST['submit']) && !empty($_POST['text']) && !empty($_POST['word']))
    {
        $text = htmlentities($_POST['text']);
        $word = htmlentities($_POST['word']);
        $sentences = preg_split("/(?<=[.?!])\s*/", $text);

        foreach($sentences as $sen)
        {
            if(preg_match("/\s+$word\s+.*[.?!]+$/", $sen))
            {
                echo $sen.'<br>';
            }
        }
    }
    ?>

</body>
</html>