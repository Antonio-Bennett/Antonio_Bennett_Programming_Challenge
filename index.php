<?php

declare(strict_types=1); ?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="index.js" defer></script>
</head>

<body>
  <?php
  echo "<h2>PHP List No styling other than color (Based on PHP Logo)</h2>";
  $style = array("style='background-color: #8892bf;'", "style='background-color: #b5c2ff;'");
  echo "<ul>";
  for ($i = 1; $i <= 10; $i++) {
    echo "<li " . $style[$i % 2] . "> Item $i </li>";
  }
  echo "</ul>";

  //This is the css list that we will style
  echo "<div id='wrapper'><h2>Css List (Based on CSS Logo)</h2><div><ul id='cssList'>";
  for ($i = 1; $i <= 10; $i++) {
    echo "<li> Item $i </li>";
  }
  echo "</ul></div></div>";
  ?>
</body>

</html>
