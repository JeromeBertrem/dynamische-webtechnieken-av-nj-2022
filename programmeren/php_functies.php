
<?php
$zin = "Een zin in kleur.";
$kleuren_opties = ['blue', 'green', 'red'];
function zinInRandomKleur($zin, $kleuren_opties) {
    // Aantal kleuren in de array (voor de bovengrens van de random functie).
    $aantal_kleuren = count($kleuren_opties);

    // Bepaal een random getal tussen 0 en $aantal_kleuren minus 1.
    $random_keuze = rand(0, $aantal_kleuren - 1);

    // De random kleur.
    $random_kleur = $kleuren_opties[$random_keuze];

    return '<span style="color: ' . $random_kleur. '">Een zin in kleur</span>';
}

function woordenInRandomKleur($zin, $kleuren_opties) {
    $woorden_in_random_kleur = '';

    // Aantal kleuren in de array (voor de bovengrens van de random functie).
    $aantal_kleuren = count($kleuren_opties);

    // Transformeer de woorden in de zin naar een array:
    // $woorden = ['Een', 'zin', 'in', kleur.'];
    $woorden = explode(' ', $zin);
    foreach ($woorden as $woord) {
       // Bepaal een random getal tussen 0 en $aantal_kleuren minus 1.
       $random_keuze = rand(0, $aantal_kleuren - 1);

       // De random kleur.
       $random_kleur = $kleuren_opties[$random_keuze];

       // De uitvoer.
       $woorden_in_random_kleur .= '<span style="color: ' . $random_kleur. '">' . $woord. '</span> ';
    }

    return $woorden_in_random_kleur;
}

function lettersInRandomKleur($zin, $kleuren_opties) {
    //...
}
?>

<h1><?php echo $zin; ?></h1>
<ul>
    <li><?php echo zinInRandomKleur($zin, $kleuren_opties); ?></li>
    <li><?php echo woordenInRandomKleur($zin, $kleuren_opties); ?></li>
    <li><?php echo lettersInRandomKleur($zin, $kleuren_opties); ?></li>
<ul>