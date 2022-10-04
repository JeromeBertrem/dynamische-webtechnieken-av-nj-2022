<?php
$voorgrond_kleur = $_POST["voorgrond_kleur"];
$achtergrond_kleur = $_POST["achtergrond_kleur"]; 
?>
<html>
    <head>
        <title>Kleuren</title>
    </head>
    <body style="background-color: <?php echo $achtergrond_kleur; ?>; color: <?php echo $voorgrond_kleur; ?>;">
    <form action="kleuren.php" method="POST">
        <ul>
            <li>Voorgrond keur 
                <select name="voorgrond_kleur">
                    <option></option>
                    <option <?php if ($voorgrond_kleur == 'yellow') { ?>selected<?php } ?> value="yellow">geel</option>
                    <option <?php if ($voorgrond_kleur == 'green') { ?>selected<?php } ?> value="green">groen</option>
                    <option <?php if ($voorgrond_kleur == 'red') { ?>selected<?php } ?> value="red">rood</option>
                </select>
            </li>
            <li>Achtergrond keur 
                <select name="achtergrond_kleur">
                    <option></option>
                    <option <?php if ($achtergrond_kleur == 'yellow') { ?>selected<?php } ?> value="yellow">geel</option>
                    <option <?php if ($achtergrond_kleur == 'green') { ?>selected<?php } ?> value="green">groen</option>
                    <option <?php if ($achtergrond_kleur == 'red') { ?>selected<?php } ?> value="red">rood</option>
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
