<hr style="color:orange;opacity:0.3;width:6%;margin:0 auto;border:8px dotted;border-style:none none dotted;"><br>
<h2 class="tag-line" style="text-align:center;">Post Recipe</h2><br>
<?php

   $title = $_POST['title'];

   $poster = $_POST['poster'];

   $shortdesc = $_POST['shortdesc'];

   $ingredients = htmlspecialchars($_POST['ingredients']);

   $directions = htmlspecialchars($_POST['directions']);

   if(trim($poster)== ""){
       echo "<p>Please enter your name</p>";
   }else{

       $connection = mysqli_connect("localhost", "test", "test")or die("Error connecting to database 1");

       mysqli_select_db($connection,'recipe') or die("Error connecting to database 2");

       $query = "INSERT INTO recipes(title,poster,shortdesc,ingredients,directions)"."VALUES('$title','$poster','$shortdesc','$ingredients','$directions')";

       $result = mysqli_query($connection, $query) or die ("Error connecting to database 3");

       if($result){
         echo "<p>Your new recipe has been posted</p>\n";
       }else{
         echo "<p>Error occured please try again later</p>\n";
       }
   }
?>
