<hr style="color:orange;opacity:0.3;width:6%;margin:0 auto;border:8px dotted;border-style:none none dotted;"><br>
<h2 class="tag-line" style="text-align:center;">Post Recipe</h2><br>
<?php

   $recipeid = $_POST['recipeid'];

   $poster = $_POST['poster'];

   $comment = htmlspecialchars($_POST['comment']);

   $date = date("Y-m-d");

       $connection = mysqli_connect("localhost", "test", "test")or die("Error connecting to database 1");

       mysqli_select_db($connection,'recipe') or die("Error connecting to database 2");

       $query = "INSERT INTO comments(recipeid,poster,date,comment)"."VALUES('$recipeid','$poster','$date','$comment')";

       $result = mysqli_query($connection, $query) or die ("Error connecting to database 3");

       if($result){
         echo "<p>Your new comment has been posted</p>\n";
       }else{
         echo "<p>Error occured please try again later</p>\n";

           echo "<a href = \"index.php?content=showrecipet&id=$recipeid\">Return to recipe</a>\n";
       }

?>
