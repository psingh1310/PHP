<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


  <form action="siteone.php" method="get" id="calc">
  Number1: <input type="number" name="num1"><br>
  Number2: <input type="number" name="num2"><br>
  </form>

  <button type="submit" form="calc" value="Submit">Submit</button>


  Answer: <?php echo $_GET["num2"] + $_GET["num2"] ?>



  </body>
</html>
