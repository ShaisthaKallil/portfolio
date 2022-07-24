<?php

  // Make connection with the mysql database mysqlnd_ms_dump_server
  $connection = mysqli_connect("localhost","test","test")or die("Sorry, error establishing connection");

  mysqli_select_db($connection,'recipe')or die("Sorry, error establishing connection");

  //Get the recipe id from the url index.php?content=showrecipe&id=$recipeid
  $recipeid = $_GET['id'];

  //Create a query to get data record for the specific recipe_id
  $query = "SELECT title,poster,shortdesc,ingredients,directions FROM recipes WHERE recipeid = $recipeid";

  //Use php db module to retrieve data from the SQLiteDatabase
  $result = mysqli_query($connection,$query)or die("Sorry, error establishing connection");

  //Check if Empty
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC)or die("Sorry, no records found");

  $title = $row['title'];

  $poster = $row['poster'];

  $shortdesc = $row['shortdesc'];

  $ingredients = $row['ingredients'];

  $directions = $row['directions'];

  // we have statements in different lines in db

  $ingredients = nl2br($ingredients);

  $directions = nl2br($directions);

  //Display html and contents

  echo "<h2>$title</h2>\n";

  echo "<p>by $poster</p>\n";

  echo "<p>$shortdesc<p><br>\n";

  echo "<h2>Ingredients</h2><br>\n";

  echo "<p>$ingredients</p><br><br>\n";

  echo "<h2>Directions</h2><br>\n";

  echo "<p style=\"line-height:1.5;\">$directions<p><br><br>\n";

  //Create # comments posted , Add a comment link and print recipe link

  //Query to count the number of comments for the specific recipe id
  $query = "SELECT count(commentid) from comments WHERE recipeid = $recipeid";

  $result = mysqli_query($connection,$query);

  //no need for mysql_assoc because we know $result only has a number
  $row = mysqli_fetch_array($result);

  //Check if number returned is 0, if yes then no comments
  if($row[0]==0){
    echo "No Comments &nbsp;&nbsp;\n";

    echo "<a href = \"index.php?content=newcomment&id=$recipeid\">Add a comment</a>&nbsp;&nbsp;\n";

    echo "<a href = \"print.php?id=$recipeid\" target=\"_blank\">Print recipe</a>\n";

    echo "<br><br>\n";
  }else {
    echo $row[0]. "\n";

    echo "&nbsp;comments posted.&nbsp;&nbsp;\n";

    echo "<a href = \"index.php?content=newcomment&id=$recipeid\">Add a comment</a>\n";

    echo "<a href = \"print.php?id=$recipeid\" target=\"_blank\">Print recipe</a>\n";

    echo "<br>\n";

    echo "<br><br><hr>\n";

    echo "<br><br>\n";

    echo "<h2>Comments</h2>\n";

    $query = "SELECT date, poster, comment from comments WHERE recipeid=$recipeid order by commentid desc";

    $result = mysqli_query($connection,$query) or die("Error retrieving comments");

    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

        $date = $row['date'];

        $poster = $row['poster'];

        $comment = $row['comment'];

        $comment = nl2br($comment);

        echo $date."- posted by $poster<br>\n";

        echo "$comment<br>\n";

        echo "<br><br>\n";
    }




  }
?>
