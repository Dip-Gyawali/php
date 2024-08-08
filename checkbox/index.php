<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza">Pizza<br>
        <input type="checkbox" name="noodles">Noodles<br>
        <input type="checkbox" name="burger">Burger<br>
        <input type="checkbox" name="fires">Fries<br>
        <input type="submit" value="Okey" name="okey">
    </form>
</body>
</html>
<?php
  if(isset($_POST["okey"])){

    if(isset($_POST["pizza"])){
        echo "You like Pizza"."<br>";
    }

    if(isset($_POST["noodles"])){
        echo "You like Noodles"."<br>";
    }

    if(isset($_POST["burger"])){
        echo "You like Burgers"."<br>";
    }

    if(isset($_POST["fries"])){
        echo "You like Fries"."<br>";
    }
  }

?>