<?php
    $connection = mysqli_connect("localhost", "test", "test") or die("Error establishing connection1");

    mysqli_select_db($connection,'recipe') or die("Failed to connect to database");



    $userid = $_POST['userid'];

    $password = $_POST['password'];

    $password2 = $_POST['password2'];

    $fullname = $_POST['fullname'];

    $email = $_POST['email'];

    $baduser = 0;

    //check whether all user input meet the requirements
    //If no user name given
    if(trim($userid)==''){
      echo "<p>Sorry, you must enter a username</p><br>";
      echo "<a href = \"index.php?content=register\">Return to Register</a>&nbsp;&nbsp;\n";
      echo "<a href = \"index.php\">Return to Home</a>\n";
      $baduser = 1;
    }

    //if no password given
    if(trim($password)==''){
      echo "<p>Sorry, you must enter a password</p><br>";
      echo "<a href = \"index.php?content=register\">Return to Register</a>&nbsp;&nbsp;\n";
      echo "<a href = \"index.php\">Return to Home</a>\n";
      $baduser = 1;
    }

    //if no password given
    if($password != $password2){
      echo "<p>Sorry, you password does not match</p><br>";
      echo "<a href = \"index.php?content=register\">Return to Register</a>&nbsp;&nbsp;\n";
      echo "<a href = \"index.php\">Return to Home</a>\n";
      $baduser = 1;
    }

    //Check if userid already exist in SQLiteDatabase
    $query = "SELECT userid FROM users WHERE userid = '$userid'";

    $result = mysqli_query($connection,$query)or die("Error establishing connection2");

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($row['userid']== $userid){
      echo "<p>This username already exist. Please try again.</p>";
      echo "<a href = \"index.php?content=register\">Return to Register</a>&nbsp;&nbsp;\n";
      echo "<a href = \"index.php\">Return to Home</a>\n";
      $baduser = 1;

    }
    if($baduser !=1){
       $query = "INSERT INTO users VALUES ('$userid',PASSWORD('$password'),'$fullname','$email')";

       $result = mysqli_query($connection,$query) or die("Error establishing connection3");

       if($result){
          $_SESSION['valid_recipe_user'] ='$userid';
          echo "<p>Congratulations! Welcome to Hi Sunshine Recipe community.You are logged in.</p>";
          echo "<a href = \"index.php\">Return to Home</a>\n";

          exit;
       } else{
         echo "<p>Error occured please try again later</p>\n";

         echo "<a href = \"index.php?content=register\">Return to Register</a>\n";
         echo "<a href = \"index.php\">Return to Home</a>\n";
       }
    }



 ?>
