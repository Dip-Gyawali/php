<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <input type="radio" name="datas" value="Red">Red<br>
    <input type="radio" name="datas" value="Blue">Blue<br>
    <input type="radio" name="datas" value="Yellow">Yellow<br>
    <input type="submit" value="Submit" name="submitdata">
    </form>
</body>
</html>
<?php
 if(isset($_POST["submitdata"])){

    if(isset( $_POST["datas"])){
        $val = $_POST["datas"];
        echo $val;
    }
    else{
        echo "Please select a value";
    }
 }
?>