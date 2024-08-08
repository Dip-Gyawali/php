<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Home Page</h1>
    <form action="home.php" method="post">
       <input type="submit" value="submit" name="checkout">
    </form>
</body>
</html>
<?php
   echo "Hello ". $_SESSION["name"]."<br>";
   echo "Your Email ".$_SESSION["username"]."<br>";

   if(isset($_POST["checkout"])){
    session_destroy();
    header("Location: index.php");
   }
?>