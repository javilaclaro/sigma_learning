<?php include 'modules/header.php'; ?>
<h1>Using variables variable</h1>
<a href="/php/index.php"><p>Return to the index</p></a>

<xmp>
  $price_for_monday = 10;
  $price_for_tuesday = 20;
  $price_for_wednesday = 30;

  $today = 'tuesday';

  $price_for_today = ${ 'price_for_' . $today};
  echo $price_for_today; // will return 20
</xmp>

<h3>Result:</h3>
<?php
$price_for_monday = 10;
$price_for_tuesday = 20;
$price_for_wednesday = 30;

$today = 'tuesday';

$price_for_today = ${ 'price_for_' . $today};
echo $price_for_today; // will return 20
?>
