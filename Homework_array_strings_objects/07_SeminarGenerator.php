<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 7 - SeminarGenerator</title>
    <link rel="stylesheet" href="">
    <style>
    </style>
</head>
<body>
<form method="post" action="07_SeminarGenerator.php">
    <textarea name="userInput"></textarea>
    <label for="sort">Sorted by</label>
    <select id="sort" name="sort">
        <option value="name">Name</option>
        <option value="date">Date</option>
    </select>
    <label for="order">Order by</label>
    <select id="order" name="order">
        <option value="ascending">Ascending</option>
        <option value="descending">Descending</option>
    </select>
    <input type="submit" name="submit" />
</form>

<?php
//if(isset($_POST['submit']) && !empty($_POST['userInput']) && isset($_POST['sort'])  && isset($_POST['order']))
//{
    $userInput = 'Debugging with WordPress-Mario Peshev-28-08-2014 12:23 WordPress is a free and open source
    blogging tool and a content management system (CMS) based on PHP and MySQL...
    First steps with Laravel-Ivan Vankov-31-08-2014 19:00 Laravel is a free,
    open source PHP web application framework, designed for the development of model–view–controller (MVC)
    web applications. According to...';

    //$sort = trim($_POST['sort']);
    //$order = trim($_POST['order']);
    var_dump($userInput);
    $seminars = explode('...', $userInput);
    var_dump($seminars);
    $arr_seminars = [];

    foreach($seminars as $seminar)
    {
        $obj = new stdClass();
        $currentSeminarDate = '';
        preg_match("/\d\d-\d\d-\d\d\d\d \d\d:\d\d/", $seminar, $currentSeminarDate);
        //var_dump($currentSeminarDate);
        $currentSeminarDate = implode($currentSeminarDate);
        $currentDate = date("d-m-Y I:s", strtotime($currentSeminarDate));
        var_dump($currentDate);
        $obj -> date = $currentDate;
        //var_dump($obj);
    }
//}
?>

</body>
</html>