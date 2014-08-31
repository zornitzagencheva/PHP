<?php
    $num_of_days = date('t'); //get num of day in current month;
    $currentMonth = date('M');
    $currentYear = date('Y');

    for( $i=1; $i<= $num_of_days; $i++) {
        $currentDayString = $i.$currentMonth.$currentYear;
        $currentDate = date("jS F, Y", strtotime($currentDayString));
        if(date('l', strtotime( $currentDate)) == "Sunday") { //if 'l'(day of week of current date) == to Sunday than print it!
            echo $currentDate.'<br>';
        }
    }
