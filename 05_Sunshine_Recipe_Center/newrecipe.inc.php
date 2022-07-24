<hr style="color:orange;opacity:0.3;width:6%;margin:0 auto;border:8px dotted;border-style:none none dotted;"><br>
<h2 class="tag-line" style="text-align:center;">Post Recipe</h2><br>


<form action="index.php" method="post">

   <p>Title : </p><input type="text" name="title" size = "40"><br><br>

   <p>Poster :</p> <input type="text" name="poster" size = "40"><br><br>

   <p>Short Description :</p> <br>

   <textarea name = "shortdesc" rows = "5" cols = "50"></textarea><br><br>

  <p> Ingredients : </p><br>

   <textarea name = "ingredients" rows = "10" cols = "50"></textarea><br><br>

  <p> Directions :</p> <br>

   <textarea name = "directions" rows = "10" cols = "50"></textarea><br><br>

   <input type = "submit" value = "Post Recipe" style = "
            background-color: orange;
            font-size:18px;
            border: none;
            text-decoration: none;
            color: white;
            padding: 10px 10px;
            ">
  <!-- Sends content value to index.php where it will next send data to addrecipe.inc.php -->
   <input type = "hidden" value = "addrecipe" name = "content">

 </form>
