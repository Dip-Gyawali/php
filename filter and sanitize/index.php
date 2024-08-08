<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter and Sanitize</title>
</head>
<body>
    <form action="index.php" method="post">
        Username: <input type="text" name="username"><br>
        Age: <input type="text" name="age"><br>
        Email: <input type="text" name="email"><br>

        Name:<input type="text" name="name"><br>
        Number:<input type="text" name="number"><br>
        Gmail:<input type="text" name="gmail"><br>
        <input type="Submit" value="Login" name="login">
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        //sanitize section which only filters invalid
        $username = filter_input(INPUT_POST, "username" , FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST,"age" , FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST,"email" , FILTER_SANITIZE_EMAIL);
        echo "$username";
        echo "$age";
        echo "$email";


        //valid section which only gives output if its valid else an empty string is passed
        // $name = filter_input(INPUT_POST,"name", FILTER_VALIDATE_SPECIAL_CHARS);
        $number =filter_input(INPUT_POST,"number",FILTER_VALIDATE_INT);
        $gmail = filter_input(INPUT_POST,"gmail",FILTER_VALIDATE_EMAIL);

        if(empty($number)){
            echo "Inalid number";
        }
        else{
            echo " Your number is $number";
        }
        
    }

?>