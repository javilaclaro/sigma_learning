<?php include_once dirname( __DIR__ ) . '/modules/header.php'; ?>

<h1>Counting from 0 to 10 using a while loop</h1>
<a href="/php/index.php">Return to the index</a>
<h3>We are gonna use the next code:</h3>
<xmp>
  $number = 0;
  while ($number < 10) {
    $number++;
    echo $number . '<br>';
  }
</xmp>
<h2>RESULT:</h2>
<?php
$number = 0;
while ($number < 10) {
  $number++;
  echo $number . '<br>';
}
?>
<h3>Now we are going to stop at 6 using a if condition inside a while loop:</h3>
<xmp>
  $number = 0;
  while($number < 10){
    $number++;
    echo $number . "<br>";
    if($number >= 6){
      break;
    }
  }
</xmp>
<?php
$number = 0;
while($number < 10){
  $number++;
  echo $number . "<br>";
  if($number >= 6){
    break;
  }
}
?>
<h3>What about trying to show only even numbers?</h3>
<xmp>
  $number = 0;
  while ($number < 20){
    $number++;
    if (number % 2){
      continue;
    }
    echo $number . "<br>";
  }
</xmp>
<?php
$number = 0;
while ($number < 20){
  $number++;
  if ($number % 2){
    continue;
  }
  echo $number . "<br>";
}
?>
