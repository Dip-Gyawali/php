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
    <form action="index.php" method="post">
        Username:
        <input type="text" name="username"><br>
        Email:
        <input type="email" name="email"><br>
        <input type="submit" value="check" name="check">
    </form>
</body>
</html>
<?php
  if(isset($_POST["check"])){
    if(empty($_POST["username"]) && empty($_POST["email"])){
        echo "Enter Something";
    }
    else{
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["email"]=$_POST["email"];

        header("Location: home.php");
    }
  }
?>