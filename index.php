<?php

declare(strict_types=1); ?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="index.js" defer></script>
</head>

<body>
  <?php
  echo "<h2>PHP List No styling other than color (Based on PHP logo)</h2>";
  $style = array("style='background-color: #8892bf;'", "style='background-color: #b5c2ff;'");
  echo "<ul>";
  for ($i = 1; $i <= 10; $i++) {
    echo "<li " . $style[$i % 2] . "> Item $i </li>";
  }
  echo "</ul>";

  //This is the css list that we will style
  echo "<ul id='cssList'>";
  for ($i = 1; $i <= 10; $i++) {
    echo "<li> Item $i </li>";
  }
  echo "</ul>";
  ?>
</body>

</html>
