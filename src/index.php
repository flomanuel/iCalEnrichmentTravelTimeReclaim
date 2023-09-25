<?php
header('Content-type: text/calendar; charset=utf-8');

$handle = fopen("Here Goes Your iCal-Link", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        if(str_starts_with($line,'DESCRIPTION:')) {
            $line = str_replace(array("\r", "\n"), '', $line);
            $line = "{$line} #needs_travel \n";
        }
        echo($line);
    }

    fclose($handle);
}
exit;
