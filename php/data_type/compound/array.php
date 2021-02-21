<?php include_once dirname( __DIR__ ) . '/modules/header.php'; ?>

<body>

  <h1>Array</h1>
  <a href="/php/index.php">Return to the index</a>


  <xmp>
    $a_bool = TRUE;   // a boolean
    $a_str  = "foo";  // a string
    $a_str2 = 'foo';  // a string
    $an_int = 12;     // an integer

    echo gettype($a_bool); // prints out:  boolean
    echo gettype($a_str);  // prints out:  string

    // If this is an integer, increment it by four
    if (is_int($an_int)) {
      $an_int += 4;
    }

    // If $a_bool is a string, print it out
    // (does not print out anything)
    if (is_string($a_bool)) {
      echo "String: $a_bool";
    }
  </xmp>

  <h3>RESULT:</h3>
  <?php
  $a_bool = TRUE;   // a boolean
  $a_str  = "foo";  // a string
  $a_str2 = 'foo';  // a string
  $an_int = 12;     // an integer

  echo gettype($a_bool) . ' '; // prints out:  boolean
  echo gettype($a_str) . ' ';  // prints out:  string
  echo var_dump($an_int);
  // If this is an integer, increment it by four
  if (is_int($an_int)) {
    $an_int += 4;
  }

  // If $a_bool is a string, print it out
  // (does not print out anything)
  if (is_string($a_bool)) {
    echo "String: $a_bool";
  }
  ?>

  <h3>Using an array:</h3>
  <xmp>
    $array = array(
    "testing" => first_test,
    $foo => bar,
    );
    echo $array;
  </xmp>
  <h3>CODE:</h3>
  <?php
  $array = array(
  "testing" => "first_test",
  "foo" => "bar",
  );
  var_dump($array);
  ?>
