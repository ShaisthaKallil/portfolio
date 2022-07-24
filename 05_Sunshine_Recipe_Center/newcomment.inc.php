<hr style="color:orange;opacity:0.3;width:6%;margin:0 auto;border:8px dotted;border-style:none none dotted;"><br>
<h2 class="tag-line" style="text-align:center;">Enter Comments</h2><br>
<?php $recipeid=$_GET['id'];

if(!isset($_SESSION['valid_recipe_user'])){

    echo "<p>Please login to post comments<p><br>";

    echo "<a href = \"index.php?content=login\">Return to Login</a>&nbsp;&nbsp;\n";

    echo "<a href = \"index.php?content=showrecipe&id=$recipeid\">Return to Login</a>&nbsp;&nbsp;\n";

}else{

$userid = $_SESSION['valid_recipe_user'];
echo "<form action=\"index.php\" method=\"post\">";

echo "<p>Comments :</p> <br>";

echo "<textarea name =\"comment\" rows = \"10\" cols = \"80\"></textarea><br><br>";

  echo "<input type = \"submit\" value = \"Post Comment\" style = \"
            background-color: orange;
            font-size:18px;
            border: none;
            text-decoration: none;
            color: white;
            padding: 10px 10px;
            \">";

  echo "<input type=\"hidden\" value = \"$userid\" name = \"poster\"><br>\n";
  echo "<input type =\"hidden\" value = \"$recipeid\" name = \"recipeid\">\n";
   echo "<input type = \"hidden\" value = \"addcomment\" name = \"content\">";

echo "</form>";
}
?>
