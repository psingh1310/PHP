<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form action="urlparameters.php" method="get" id="games">
  Name: <input type="text" name="name"><br>
  <button type="submit" value="Submit">Submit</button>
  </form>

<br>

<?php

echo $_GET["name"];
echo $_GET["age"];

 ?>


  </body>
</html>
