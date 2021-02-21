<?php include_once dirname( __DIR__ ) . '/modules/header.php'; ?>

<body>

  <h1>For Loops</h1>
  <a href="/php/index.php">Return to the index</a>
  <h3>Code:</h3>
    <xmp>    $characters = ['Arthur Dent','John Doe','Zaphod Beeblebrox'];
    $num_items = count($characters);
    for ($i=0; $i < $num_items; $i++) {
      echo "<li>$characters[$i]</li>";
    }
  </xmp>
  <h3>Result:</h3>
  <ul>
    <?php
    $characters = ['Arthur Dent','John Doe','Zaphod Beeblebrox'];
    $num_items = count($characters);
    for ($i=0; $i < $num_items; $i++) {
      echo "<li>$characters[$i]</li>";
    }
    ?>
  </ul>
</body>
