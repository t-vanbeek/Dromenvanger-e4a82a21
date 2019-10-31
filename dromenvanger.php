<?php
echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
/* $aantalVrienden = readline() . PHP_EOL; */

// $vrienden = array();
// per vriend
    // vraag naam
    // vraag aantal dromen
        // per droom
            // vraag droom
            // sla op
    // =-----

$vrienden = array(
);

$aantalVrienden = readline() . PHP_EOL;

for ($i = 1; $i <= $aantalVrienden; $i++) {
    $dromen = array();
    echo "Wat is jouw naam?" . PHP_EOL;
    $naamVriend = readline() . PHP_EOL;

    echo "Hoeveel dromen heb je?" . PHP_EOL;
    $aantalDromen = readline() . PHP_EOL;

    
    for ($j = 1; $j <= $aantalDromen; $j++) {
        echo "Wat is jouw droom?" . PHP_EOL;
        $droom = readline().PHP_EOL;
        array_push($dromen, $droom);
    }
    
    $vrienden[$naamVriend] = $dromen;
}



//for($k = 0;$k <= count($dromen);$k++);


foreach ($vrienden as $vriend => $dromen) {
    foreach ($dromen as $droem){
    echo $vriend . " heeft als droom: " . $droem . PHP_EOL;
}
}