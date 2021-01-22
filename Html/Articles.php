<?php
include('header.html');
include('conn.php');
?>
<!-- end header -->
<!--start article1-->
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>articles</title>
  <link rel="stylesheet" href="../Css/bootstrap.min.css" />
  <link rel="stylesheet" href="../Css/articles.css" />
</head>
<body>
    
<?php

$sql = "SELECT * FROM `articles` order by id desc";
$res = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($res)) {
    $id = $row['id'];
    $article_name = $row['Articles_name'];
    $articles_details = $row['Articles_details'];
    $articles_img = $row['Articles_img'];
?>
<div class="all" style="padding-top: 80px;">
    <div class="image1" style="background-image: url('images/<?php echo($articles_img); ?>');">
            <div class="book">
                <div class="container">
                    <div class="articles">
                       <a href="ArticlesContent.php?id=<?php echo $row["id"]; ?>" class="rules"><?php echo $article_name; ?> </a>
                        <p><?php echo $articles_details; ?><a href="ArticlesContent.php?id=<?php echo $row["id"]; ?>" >read more </a> </p>
                        <a href="ArticlesContent.php?id=<?php echo $row["id"]; ?>" class="add">add comment</a>
                    </div>
                  
                </div>
            </div>
    </div>
</div>
<br>
  <?php } ?>

  <!--end article1-->
 <!--start script js bootstrap -->
 <script src="../JavaScript/jquery.min.js"></script>
 <script src="../JavaScript/popper.min.js"></script>
 <script src="../JavaScript/bootstrap.min.js"></script>
 <script type="text/javascript" src="../JavaScript/index.js"></script>
 <!--end script js bootstrap -->
    <!-- footer -->
    <br><br><br><br>
    <div class="footer">
        <p> Quick access <br> 2020 &copy; &lt; All &gt; right reserved.</p>
    </div>
</body>
</html>