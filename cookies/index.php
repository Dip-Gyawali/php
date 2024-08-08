<?php
  setcookie("fav_food","pizza", time() +84600,"/");
  setcookie("fav_name","Hyrax", time() +84600,"/");
  setcookie("fav_place","place", time() +84600,"/");


    if(isset($_COOKIE["fav_food"])){
        echo "You like {$_COOKIE["fav_food"]}"."<br>";
    }
    else{
        echo "No data found"."<br>";
    }

    if(isset($_COOKIE["fav_name"])){
        echo "You like {$_COOKIE["fav_name"]}"."<br>";
    }
    else{
        echo "No data found"."<br>";
    }

    if(isset($_COOKIE["fav_place"])){
        echo "You like {$_COOKIE["fav_place"]}"."<br>";
    }
    else{
        echo "No data found"."<br>";
    }


?>