        <br><hr style="color:orange;opacity:0.3;width:5%;margin:0 auto;border:8px dotted;border-style:none none dotted;"><br>
        <div class = "news-text" style="width:80%;margin:0 auto;line-height:2.5;">

         <h2 class="tag-line" style="text-align:center;">Latest Cooking News</h2>
        <?php
         //Establish connection with the SQLiteDatabase
         $connection = mysqli_connect("localhost","test","test")or die("Sorry, error establishing connection");

         mysqli_select_db($connection,'recipe')or die("Sorry,error establishing connection");

         $query = "SELECT date, title,article from news order by date desc LIMIT 0,2";

         $result = mysqli_query($connection,$query)or die("Sorry, error with connection");

         if(mysqli_num_rows($result)==0){
           echo "<h3>Sorry, there are no entries. Please try later";
         }else{
           while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
             $date = $row['date'];
             $title = $row['title'];
             $article = $row['article'];

             $article = nl2br($article);

             echo $date."<h3 style=\"font-family:sans-serif;\">$title</h3>\n";
             echo "<p>$article</p><br>\n";
           }
         }

         ?>
       </div>
