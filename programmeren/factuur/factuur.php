<?php require "factuur_gegevens.php"; ?>
<html>
    <head>
        <title>Factuur 2016/1</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td>
                    <div><img src="<?php echo $bedrijf_gegevens['logo']; ?>" /></div>
                    <div><?php echo $bedrijf_gegevens['naam']; ?></div>
                    <div><?php echo $bedrijf_gegevens['straat']; ?></div>
                    <div><?php echo $bedrijf_gegevens['plaats']; ?></div>
                </td>
                <td>
                    <div><?php echo $klant_gegevens['naam']; ?></div>
                    <div><?php echo $klant_gegevens['straat']; ?></div>
                    <div><?php echo $klant_gegevens['plaats']; ?></div>
                    <div><?php echo $klant_gegevens['land']; ?></div>
                </td>
            </tr>
        </table>
        
        <hr />
        
        <div><strong>FACTUUR <?php echo $factuur_gegevens['jaar']; ?>/<?php echo $factuur_gegevens['nummer']; ?></strong></div>
        <div><strong><u>Datum:</u> <?php echo $factuur_gegevens['datum']; ?></strong></div>
     
        <hr />
        
        <table border="0" width="100%">
            <tr>
                <td><strong>Omschrijving</strong></td>
                <td><strong>Aantal</strong></td>
                <td><strong>BTW %</strong></td>
                <td><strong>Prijs</strong></td>
                <td><strong>Totaal</strong></td>
            </tr>     
            <?php 
            foreach ($factuur_product_gegevens as $factuur_lijn) {
                ?>
                <tr>
                    <td valign="top"><?php echo $factuur_lijn['naam']; ?> - <?php echo $factuur_lijn['project']; ?>
                    <?php echo $factuur_lijn['omschrijving']; ?>
                        <u>Looptijd:</u> <?php echo $factuur_lijn['looptijd_van']; ?> - <?php echo $factuur_lijn['looptijd_tot']; ?>
                    </td>
                    <td valign="top"><?php echo $factuur_lijn['aantal']; ?></td>
                    <td valign="top"><?php echo $factuur_lijn['btw_percentage']; ?>%</td>
                    <td valign="top">€ <?php echo $factuur_lijn['eenheids_prijs']; ?></td>
                    <td valign="top">€ <?php echo $factuur_lijn['totaal']; ?></td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td colspan="2"></td>
                <td>Subtotaal</td>
                <td></td>
                <td>€ <?php echo $factuur_gegevens['subtotaal']; ?></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>+BTW</td>
                <td></td>
                <td>€ <?php echo $factuur_gegevens['btw']; ?></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>Totaal:</td>
                <td></td>
                <td>€ <?php echo $factuur_gegevens['totaal']; ?></td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td>vervaldag:</td>
                <td><?php echo $factuur_gegevens['vervaldatum']; ?></td>
            </tr>
        </table>
        <div>
            <table border="0" width="100%">
                <tr>
                    <ul><li><u>Algemene voorwaarden</u></li>
                        <li>Al onze factuuren zijn betaalbaar op de vervaldag welke op defactuur in weergegeven.</li>
                        <li>Bij gebreek aan betaling behouden wij ons het recht voor, het bedrag te laten innen op kosten van de client</li>
                        <li>In geval van betwisting zijnenkel de rechtbanken van Antwerpen bevoegd</li>
                        <li>Bij niet betalen binnen de vastgestelde termijn zal een interest Ã  rato van 15% worden aangerekend</li>
                    </ul>
                </tr>
            </table>
        </div>
    </body>
</html>