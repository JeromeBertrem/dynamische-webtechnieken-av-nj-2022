<?php
$kleuren_opties = ['blue', 'yellow', 'red'];

function gekozenKleuren() {
    $voorgrond_kleur = $_POST['voorgrond_kleur'];
    $achtergrond_kleur = $_POST['achtergrond_kleur'];
    return 'background-color: '. $achtergrond_kleur . '; color: '. $voorgrond_kleur . ';';
}

function achtergrondOpties($kleuren_opties) {
    $achtergrond_kleur = $_POST['achtergrond_kleur'];

    $options = '';
    foreach ($kleuren_opties as $kleur) {
        $selected = '';
        if ($kleur == $achtergrond_kleur) {
            $selected = 'selected';
        }
        $options .= '<option ' . $selected . ' value="' . $kleur . '">' . $kleur. '</option>';
    }
    return $options;
}

function voorgrondOpties($kleuren_opties) {
    $voorgrond_kleur = $_POST['voorgrond_kleur'];

    $options = '';
    foreach ($kleuren_opties as $kleur) {
        $selected = '';
        if ($kleur == $voorgrond_kleur) {
            $selected = 'selected';
        }
        $options = $options . '<option ' . $selected . ' value="' . $kleur . '">' . $kleur. '</option>';
    }
    return $options;
}
?>
<html>
    <head>
        <title>Kleuren</title>
    </head>
    <body style="<?php echo gekozenKleuren(); ?>">
    <form action="kleuren_met_functies.php" method="POST">
        <ul>
            <li>Voorgrond keur 
                <select name="voorgrond_kleur">
                    <option></option>                                      
                    <?php echo voorgrondOpties($kleuren_opties); ?>
                </select>
            </li>
            <li>Achtergrond keur 
                <select name="achtergrond_kleur">
                    <option></option>
                    <?php echo achtergrondOpties($kleuren_opties); ?>
                </select>
            </li>
        </ul>
        <input type="submit" value="Toon" />
    </form>
    
    <h1>Lorem ipsum dolor sit amet</h1>
    <p>
    Mauris vitae interdum est. Sed at fringilla massa. Vestibulum a rutrum velit, quis mattis mi. Donec dui ex, pulvinar vitae ante ac, pharetra suscipit est. Nullam laoreet suscipit tellus ac vestibulum. Nunc finibus posuere metus eu elementum. Ut ut rutrum nibh, vitae luctus enim. Sed nisl sapien, dapibus nec nisl nec, sollicitudin tincidunt nisl. Nullam pellentesque lobortis posuere. Duis cursus a risus a elementum. Donec vitae risus sed leo gravida lobortis sit amet eget erat.
    </p>
    </body>
</html>