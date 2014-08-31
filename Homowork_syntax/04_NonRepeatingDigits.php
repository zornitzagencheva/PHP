<?php
    $integerVariable = 145;
    if($integerVariable >= 102)
    {
        for($i = 101; $i <= $integerVariable; $i++ )
        {
            $tempVariable = (string)$i;
            $arrayOfChars = str_split($tempVariable);
            $digits_are_unique = true;

            for($ii=0; $ii < count($arrayOfChars); $ii++)
            {
                $temp = $arrayOfChars[$ii];
                for($iii = $ii + 1; $iii < count($arrayOfChars); $iii++)
                {
                    if($temp == $arrayOfChars[$iii]) {
                        $digits_are_unique = false;
                    }
                }
            }

            if($digits_are_unique == true)
            {
                echo $i.', ';
            }
        }
    }
    else
    {
        echo "no";
    }
