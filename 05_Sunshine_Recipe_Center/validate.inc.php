<?php

    $connection = mysqli_connect("localhost", "test","test")or die("Error establishing connection");

    mysqli_select_db($connection,'recipe')or die("Error establishing connection");

    $userid = $_POST['userid'];

    $password = $_POST['password'];

    $query = "SELECT userid FROM users WHERE userid ='$userid'and password=PASSWORD('$password')";

    $result = mysqli_query($connection,$query)or die("Error establishing connection");

    if(mysqli_num_rows($result) == 0){
      echo "<p>Sorry, user account does not exist<p><br>";
      echo "<a href = \"index.php?content=login\">Return to Login</a>&nbsp;&nbsp;\n";
      echo "<a href = \"index.php\">Return to Home</a>\n";
    }else{
        $_SESSION['valid_recipe_user'] = $userid;
        echo "<p>Login Successful<p><br>";
        echo "<a href = \"index.php\">Return to Home</a>\n";
    }

 ?>
