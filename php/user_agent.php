<?php include 'modules/header.php'; ?>

<h1>Printing User agent</h1>
<a href="/php/index.php"><p>Return to the index</p></a>

<p>Given the next code, it will print the user agent:</p>
<xmp>
  echo $_SERVER['HTTP_USER_AGENT'];
</xmp>

RESULT : <?php echo $_SERVER['HTTP_USER_AGENT'];?>

<p>Now we will print if the user is using Internet explorer or not</p>

  <?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')!== FALSE){
?>
<p>You are using internet explorer</p>
<?php }else{ ?>
<p>You are not using internet explorer</p>
<?php } ?>
