<?php
    echo "<form action='01_PrintTags.php' method='post'>" .
         "<p>Enter tags: </p>" .
         "<input type='text' name='text' />" .
         "<input type='submit' value='submit' name='submit' /><br> .
    </form>";

    if(isset($_POST['text'])) {
        $arrayInput = array_map('trim',explode(", ",$_POST['text']));
        $i = 0;
        foreach($arrayInput as $item) {
            echo $i.' : '. $item.'<br>';
            $i++;
        }
    }


