<?php 
$bedrijf_gegevens = [
  'logo' => 'factuur-logo.png', 
  'naam' => 'Logo BV', 
  'straat' => 'Dorpsstraat 1', 
  'plaats' => '2910 Essen', 
];
$klant_gegevens = [     
  'naam' => 'Francis Van Hooren', 
  'straat' => 'Grote Markt 10', 
  'plaats' => '2000 Antwerpen', 
  'land' => 'België', 
];
$factuur_gegevens = [
  'jaar' => 2016,
  'nummer' => 1,
  'datum' => '05/01/2016',
  'subtotaal' => 194,
  'btw' => 40.70,
  'totaal' => 234.74,
  'vervaldatum' => '15/01/2016',
];
$factuur_product_gegevens = [
  [
    'naam' => 'Webhosting',
    'project' => 'inspiratieloos.be',
    'omschrijving' => '<ul>
                          <li>1 GB webruimte</li>
                          <li>1 database van 250 MB</li>
                          <li>1 e-mail adres</li>
                          <li>onbeperkte bandbreedte</li>
                        </ul>',
    'aantal' => 1,
    'looptijd_van' => '01/01/2016',
    'looptijd_tot' => '31/12/2017',
    'btw_percentage' => 21,
    'eenheids_prijs' => 169,
    'totaal' => 169,
  ],
  [
    'naam' => 'domeinnaam',
    'project' => 'inspiratieloos.be',
    'omschrijving' => '<ul>
                         <li>registiratie/verlenging domeinnaam</li>
                       </ul>',
    'aantal' => 1,
    'looptijd_van' => '01/01/2016',
    'looptijd_tot' => '31/12/2017',
    'btw_percentage' => 21,
    'eenheids_prijs' => 169,
    'totaal' => 169,
  ],
];
?>