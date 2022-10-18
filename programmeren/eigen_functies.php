<p>
  <?php 
  function optelling($getal_1, $getal_2) {
    $optelling = $getal_1 + $getal_2;
    return $optelling;
  }

  function toonOptelling($optelling) {
    echo $optelling;
  }

  $getal_1 = 100;
  $getal_2 = 200;
  $optelling = optelling($getal_1, $getal_2);

  echo $getal_1 . ' + ' . $getal_2 . ' = ' . toonOptelling($optelling);
  ?>
</p>