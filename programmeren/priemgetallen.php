<?php
$van = 1;
$tot = 100;
$aantal_gevonden_priemgetallen = 0;
 
for ($teller = $van; $teller <= $tot; $teller++) {
    $aantal_deelbaar = 0;
    for ($deling_teller = $van; $deling_teller <= $teller; $deling_teller++) {
        if ($teller % $deling_teller == 0) {
            $aantal_deelbaar++;
        }
    }

    if ($aantal_deelbaar == 2) {
        $aantal_gevonden_priemgetallen++;
        if ($aantal_gevonden_priemgetallen > 1) {
            echo ', ';
        }
        echo $teller; 
    }
}
?>