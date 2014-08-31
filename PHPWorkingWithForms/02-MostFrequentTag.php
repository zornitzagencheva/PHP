<?php
    echo "<form action='02-MostFrequentTag.php' method='post'>" .
        "<p>Enter tags: </p>" .
        "<input type='text' name='text' />" .
        "<input type='submit' value='submit' name='submit' /><br> .
   </form>";

    if(isset($_POST['text'])) {
        $arrayInput = explode(", ",$_POST['text']);
        $count = array_count_values($arrayInput);
        $keys = array_keys($count);
        $values = array_values($count);

        foreach($count as $key=>$item) {
            echo $key. ' : ' . $item . ' times' . '<br>';
        }

        for($i = 0; $i < count($keys) - 1; $i++) {
            $temp = $values[0];
            if($temp == $values[$i]) {
                echo "Most frequent Tag is: $keys[$i]" . "<br>";
            }
            else {
                break;
            }
        }
   }
