<?php
function optelling($getal_1, $getal_2) {
    return $getal_1 + $getal_2;
}

function aftrekken($getal_1, $getal_2) {
    return $getal_1 - $getal_2;
}

function vermenigvuldigen($getal_1, $getal_2) {
    return $getal_1 * $getal_2;
}

function delen($getal_1, $getal_2) {
    return $getal_1 / $getal_2;
}

function rekenen($bewerking, $getal_1, $getal_2) {
    switch ($bewerking) {
        case '+':
            $resultaat = optelling($getal_1, $getal_2);
            break;
        case '-':
            $resultaat = aftrekken($getal_1, $getal_2);
            break;
        case '*':
            $resultaat = vermenigvuldigen($getal_1, $getal_2);
            break;
        case '/':
            $resultaat = delen($getal_1, $getal_2);
            break;
    }
}
?>
<html>
    <head></head>
    <body>
        <form action="rekenen.php" method="POST">
            <ul>
                <li>Getal 1: <input name="getal_1" type="number" value="<?php echo $_POST['getal_1']; ?>"></li>
                <li>Getal 2: <input name="getal_2" type="number" value="<?php echo $_POST['getal_2']; ?>"></li>
            </ul>
            <input type="submit" value="Verstuur">
        </form>

        <?php
        $optelling = rekenen('+', $_POST['getal_1'], $_POST['getal_2']);
        $aftrekking = rekenen('-', $_POST['getal_1'], $_POST['getal_2']);
        $vermeningvuldiging = rekenen('*', $_POST['getal_1'], $_POST['getal_2']);
        $deling = rekenen('/', $_POST['getal_1'], $_POST['getal_2']);
        ?>
        <p><?php echo $_POST['getal_1'];?> + <?php echo $_POST['getal_2']; ?> = <?php echo $optelling; ?></p>
        <p><?php echo $_POST['getal_1'];?> - <?php echo $_POST['getal_2']; ?> = <?php echo $aftrekking; ?></p>
        <p><?php echo $_POST['getal_1'];?> x <?php echo $_POST['getal_2']; ?> = <?php echo $vermeningvuldiging; ?></p>
        <p><?php echo $_POST['getal_1'];?> / <?php echo $_POST['getal_2']; ?> = <?php echo $deling; ?></p>
    </body>
</html>