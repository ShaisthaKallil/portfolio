
<hr style="color:orange;opacity:0.3;width:6%;margin:0 auto;border:8px dotted;border-style:none none dotted;"><br>
<h2 class="tag-line" style="text-align:center;">The Latest Recipes</h2>

<?php
//This page is shows the latest recipes in the site. This is the default content if $content is not set to be either login,register or newrecipe
//refer nav.inc.php links
  // Connect to MySQL db in localhost server using user account created
   // in the db which only has QUERY privileges, done for security reasons
  $connection = mysqli_connect("localhost","test","test") or die('Sorry, error
  establishing connection with the database');

  mysqli_select_db($connection,'recipe')or die('Sorry, error establishing connection with the database');

  // Get the data record values from recipes tables and order it in latest recipes at top
  $query = "SELECT recipeid,title,poster,shortdesc FROM recipes ORDER BY recipeid desc limit 0,5";

  //php variable $result will hold all the returned query results
  $result = mysqli_query($connection,$query) or die("Sorry, error establishing connection with the database");

 //Check for contents in $result and if exist, retrieve to an array display the row entries to webpage
  if(mysqli_num_rows($result)== 0){
    echo "<h3>Sorry, there are no entries. Please try later";
  }else {
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
     $recipeid = $row['recipeid'] ;
     $title = $row['title'];
     $poster = $row['poster'] ;
     $shortdesc = $row['shortdesc'] ;

     //create link for headline
     echo "<br><br><h2 class=\"tag-line\" ><a href=\"index.php?content=showrecipe&id=$recipeid\" style=\"text-decoration:none;color:maroon;\">$title</a></h2><p>submitted by $poster</p>\n";

     echo "<p>$shortdesc<br><br>\n</p>";
    }
  }
 ?>
