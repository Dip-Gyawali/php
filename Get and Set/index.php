<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="name">Quantity</label>
        <input type="number" name="quantity">
        <input type="submit" value="Total">
    </form>
</body>
</html>
<?php

  $per = 200;
  $order = $_POST["quantity"];
  $total = $per * $order;
  echo "Per price = Rs.$per"."<br>";
  echo "Total Price = Rs.$total";
?>