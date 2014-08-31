<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 3 - SidebarBuilder</title>
    <link rel="stylesheet" href="">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        form {
            width: 250px;
            padding: 10px;
            margin: 10px;
            border: 1px solid black;
            background-color: #ecd5f5;
        }
        label {
            width: 76px;
            display: inline-block;
            margin-bottom: 5px;
        }
        aside {
            width: 99px;
            border-radius: 12px;
            border: 1px solid black;
            background-color: #ecd5f5;
            margin: 20px;
            padding: 27px;
        }
        p {
            display: inline-block;
            border-bottom: 1px solid black;
            margin-bottom: 13px;
            font-weight: bold;
            font-size: 18px;
            width: 127px;
            color: mediumvioletred;
        }
        a {
            color: brown;
            font-size: 17px;
        }
        input[type='text'] {
            margin-bottom: 5px;
            width: 165px;
            height: 20px;
        }
        input[type='submit'] {
            width: 80px;
            height: 25px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<form method="post" action="03_SidebarBuilder.php">
    <label for="categories">Categories
    </label>
    <input type="text" name="categories" id="categories"/><br>

    <label for="tags">Tags
    </label>
    <input type="text" name="tags" id="tags"/><br>

    <label for="months">Months
    </label>
    <input type="text" name="months" id="months"/><br>

    <input type="submit" name="submit" value="Generate"/>
</form>
<table>
    <?php

    function createSideBar($typeOfSideBar, $parameters)
    {
        echo "<aside>";
        echo "<p>$typeOfSideBar</p>";
        echo "<ul>";

        foreach($parameters as $list) { echo "<li><a href=''>$list</a></li>"; }

        echo "</ul>";
        echo "</aside>";
    }

    if(isset($_POST['submit']) && !empty($_POST['categories']) && !empty($_POST['tags']) && !empty($_POST['months']))
    {
        $categories = htmlentities($_POST['categories']);
        $arr_categories = explode(', ', $categories);

        $tags = htmlentities($_POST['tags']);
        $arr_tags = explode(', ', $tags);

        $months = htmlentities($_POST['months']);
        $arr_months = explode(', ', $months);

        createSideBar("Categories", $arr_categories);
        createSideBar("Tags", $arr_tags);
        createSideBar("Months", $arr_months);
    }
    ?>
</table>
</body>
</html>