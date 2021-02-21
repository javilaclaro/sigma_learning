<?php include 'modules/header.php'; ?>

<h1>Using strpos function</h1>
<a href="/php/index.php"><p>Return to the index</p></a>

<h3>Strpos is used to find if a string(needle) is found inside another string(haystack)</h3>
<p>Let's look at a quick example</p>
<xmp>
  $haystack = ['bread','apple','pea','needle','banana'];
  if(strpos($haystack, 'neddle')){
    echo 'Neddle found in haystack!';
  }
</xmp>
