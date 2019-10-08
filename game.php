<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

 <form action="game.php" method="get" id="games">
 Color: <input type="text" name="color"><br>
 PluralNoun : <input type="text" name="Pluralnoun"><br>
 Name: <input type="text" name="someone"><br>
 </form>

  <button type="submit" form="games" value="Submit">Submit</button>
<br>

<?php

$color = $_GET["color"];
$pluralnoun = $_GET["Pluralnoun"];
$someone = $_GET["someone"];

echo "Roses are $color <br>";
echo "$pluralnoun are blue <br>";
echo "I love $someone <br>";

 ?>

  </body>
</html>
