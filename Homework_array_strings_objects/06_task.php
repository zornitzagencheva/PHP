<?php
if(isset($_GET['submit']) && !empty($_GET['userInput']))
{
    $userInput = $_GET['userInput'];
    $userInput = str_replace('</a>', '[/URL]', $userInput);
    $userInput = preg_replace('/<a href="(.*?)">/', '[URL=\1]', $userInput);
    echo htmlentities($userInput);
}
?>

