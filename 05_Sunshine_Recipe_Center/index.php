<?php //Create session cookie in the client browser, so web application(all pages) has access to session data
     session_start();
     ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale = 1.0" />
	<title>Hi Sunshine Recipes</title>
	<link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
</head>

<body>
	<div class = "container">

		<nav>
        <?php include("nav.inc.php"); ?>
	 </nav>


	 <header>
        <?php include("header.inc.php"); ?>
   </header>  <!-- End of Header-->


		<section class = "gallery">

		  <div class = "gal-contain">

			<div class = "item pic1">
                 <p class = "img-1"><a><img src = "images/coffee.png" alt = "coffee"/></a></p>
                 <p class = "desc">Breakfast Coffee</p>
                 <div class = "shade"></div>
			</div>

			<div class = "item pic2">
                  <p class = "img-2"><a><img src = "images/pancakes.png" alt = "food"/></a></p>
                  <p class = "desc">Sunshine Pancakes</p>
			</div>

			<div class = "item pic3">
                  <p class = "img-3"><a><img src = "images/kids-meal.png" alt = "food"/></a></p>
                  <p class = "desc">Kids Breakfast</p>
			</div>

			<div class = "item move">
                  <p class = "img-4"><a><img src = "images/soup.png" alt = "food"/></a></p>
                  <p class = "desc">Healthy Soups</p>
			</div>

			<div class = "item move">
                  <p class = "img-5"><a><img src = "images/lunch.png" alt = "food"/></a></p>
                  <p class = "desc">Lunch Specials</p>
			</div>

			<div class = "item move">
                  <p class = "img-6"><a><img src = "images/salad.png" alt = "food"/></a></p>
                  <p class = "desc">Sunshine Salads</p>
			</div>

		  </div>

		</section><!-- End of gallery-->

    <!-- Main body-dynamic content area-->
    <section id ="main"style="width:80%;margin:0 auto;">

            <?php
                  if (!isset($_REQUEST['content']))
                        include("main.inc.php");
                  else{
                        $content = $_REQUEST['content'];
                        $nextpage = $content.".inc.php";
                        include($nextpage);
                  }
            ?>

    </section>

    <section id = "news">

          <?php include("news.inc.php"); ?>
  </section>


    <footer>
          <?php include("footer.inc.php"); ?>
    </footer>


	</div><!-- End of container -->

</body>
</html>
