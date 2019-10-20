<?php

function formatDate($dateIso) {// yyyy-mm-dd
    preg_match_all('/(\d\d\d\d)-(\d\d)-(\d\d)/', $dateIso, $matches);
    $year = $matches[1][0];
    $month = $matches[2][0];
    $day = $matches[3][0];
    return join(".", [$day, $month, $year]);
}

$formatDate = formatDate("1998-07-24");
print $formatDate;