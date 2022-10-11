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
    $optelling = $_POST['getal_1'] + $_POST['getal_2'];
    $aftrekking = $_POST['getal_1'] - $_POST['getal_2'];
    $vermeningvuldiging = $_POST['getal_1'] * $_POST['getal_2'];
    $deling = $_POST['getal_1'] / $_POST['getal_2'];
    ?>
    <p><?php echo $_POST['getal_1'];?> + <?php echo $_POST['getal_2']; ?> = <?php echo $optelling; ?></p>
    <p><?php echo $_POST['getal_1'];?> - <?php echo $_POST['getal_2']; ?> = <?php echo $aftrekking; ?></p>
    <p><?php echo $_POST['getal_1'];?> x <?php echo $_POST['getal_2']; ?> = <?php echo $vermeningvuldiging; ?></p>
    <p><?php echo $_POST['getal_1'];?> / <?php echo $_POST['getal_2']; ?> = <?php echo $deling; ?></p>