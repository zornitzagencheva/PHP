<?php
    $date1 = new DateTime();
    $date2 = new DateTime('2015-01-01');
    $diff = $date2->diff($date1);
    $hours = $diff->h;
    $hours = $hours + ($diff->days*24);
    $minutes = ($hours + ($diff->days*24)) * 60;
    $seconds = (($hours + ($diff->days*24)) * 60) * 60;
    $days = getdate();

    echo "Hours until new year : ". $hours;
    echo "<br>";
    echo "Minutes until new year : ". number_format($minutes, 0, '.', ' ');
    echo "<br>";
    echo "Seconds until new year : " . number_format($seconds, 0, '.', ' ');
    echo "<br>";
    echo "Days:Hours:Minutes:Seconds $days[yday] : $days[hours] : $days[minutes] : $days[seconds]";
?>