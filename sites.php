<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>






<!--GETTING THE INPUT FROM THE USER -->


<form action = " sites.php" method = "get">

Name: <input type = "text" name = "name">
<br>
Age: <input type="number" Age = "age  "
<input type = "submit"

</form>

<br>
Your Name is <?php echo $_GET["name"] ?>

<br>

Your age is <?php echo $_GET["age"] ?>




  </body>
</html>
